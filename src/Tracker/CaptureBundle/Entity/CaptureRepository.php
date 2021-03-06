<?php

namespace Tracker\CaptureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CaptureRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CaptureRepository extends EntityRepository
{

    /**
     * Count captures between two dates 
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     */
    public function countCaptures($date1, $date2, $box)
    {
		$em = $this->_em;
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		
		$sql = "
			SELECT COUNT(*)
            FROM $tableCapture
            WHERE box_id = :idBox
				AND date_capture BETWEEN :date1 and :date2
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->execute();
        
        return $statement->fetchColumn();
    }
    
    /**
     * Find ration between two dates 
     * Retourne le nombre d'entrées et le nombre de passages
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     * @param int $round
     */
    public function findRatio($date1, $date2, $box, $round, $interval = '00:00:10')
    {
		$em = $this->_em;
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		$tableStation = $em->getClassMetadata('TrackerStationBundle:Station')->getTableName();
		
		$sql = "
			SELECT t2.date_capture, t2.transit, t2.entry, ((t2.entry*100)/(t2.entry+t2.transit)) ratio
            FROM
            (
            	SELECT 
            		date_trunc(:round, t1.date2_capture) date_capture, 
            		COUNT(*) transit, 
            		COUNT(CASE WHEN (t1.duration > INTERVAL '$interval') THEN 1 ELSE NULL END) entry
            	FROM
            	(
            		SELECT c.station_id, c.date2_capture, (c.tab[array_length(c.tab, 1)] - c.tab[1]) duration
            		FROM
            		(
            			SELECT station_id, date_trunc('hour', date_capture) date2_capture, ARRAY_AGG(date_capture ORDER BY date_capture) tab
            			FROM $tableCapture
            			WHERE box_id = :idBox
				            AND date_capture BETWEEN :date1 and :date2
            			GROUP BY station_id, date_trunc('hour', date_capture)
            		) c
            	) t1
            	GROUP BY date_trunc(:round, t1.date2_capture)
            	ORDER BY date_trunc(:round, t1.date2_capture)
            ) t2
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("round", $round);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->execute();
        
        return $statement->fetchAll();
    }
    
    
    /**
     * Find station between two dates 
     * On va écrire manuellement la requête
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     * @param int $round
     */
    public function findNumberIntervalStation($date1, $date2, $box, $round)
    {
		$em = $this->_em;
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		
		$sql = "
			SELECT COUNT(DISTINCT c.station_id) sum, date_trunc(:round, c.date_capture) AS date
			FROM $tableCapture c
			WHERE c.box_id = :idBox
				AND c.date_capture BETWEEN :date1 and :date2
			GROUP BY date
			ORDER BY date ASC
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("round", $round);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->execute();
        
        return $statement->fetchAll();
    }
    
    /**
     * Find redemption rate
     * Renvoie le taux de retour des visiteurs
     * Le taux de retour est égal à :
     * 
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     */
    public function findRedemptionRate($date1, $date2, $box)
    {
		$em = $this->_em;
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();

		$sql = "
    		SELECT nbUnique nb_unique, nbMulti nb_multi, (100.0 * nbMulti/(CASE nbUnique WHEN 0 THEN 1 ELSE nbUnique END)) redemption_rate
    		FROM 
    		(
    		    SELECT COUNT(*) nbUnique
    			FROM 
    			    (
    			        SELECT DISTINCT c.station_id
    			        FROM $tableCapture c
    			        WHERE c.box_id = :idBox
    				        AND c.date_capture BETWEEN :date1 and :date2
    			    ) tmp
    		) t1,
    		(
    		    SELECT COUNT(*) nbMulti
    		    FROM 
    		    (
        			SELECT COUNT(*), tmp.station_id
        			FROM 
        			(
        			    SELECT DISTINCT c.station_id, date_trunc('hour', c.date_capture) date
            			FROM $tableCapture c
            			WHERE c.box_id = :idBox
            				AND c.date_capture BETWEEN :date1 and :date2
        			) tmp
            		GROUP BY tmp.station_id
            		HAVING COUNT(*) > 1
        		) tmp2
    		) t2
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->execute();
		
		$r = $statement->fetch();
		if( $r == false || count($r) == 0 )
		    return null;
        
        return $r;
    }
    
    
    /**
     * @TODO Un utilisateur qui reste dans un magasin ne doit pas etre compter a chaque fois
     * Find os rate
     * Renvoie la proportion d'os en pourcentage
     * Ils sont déduits du constructeur
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     */
    public function findOsRate($date1, $date2, $box)
    {
		$em = $this->_em;
		
		$tableCapture      = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		$tableStation      = $em->getClassMetadata('TrackerStationBundle:Station')->getTableName();
		$tableOrganization = $em->getClassMetadata('TrackerOuiBundle:Organization')->getTableName();
		$tableOs           = $em->getClassMetadata('TrackerOuiBundle:Os')->getTableName();
		
		$sql = "
		    WITH wt AS (
		        SELECT o2.name, o2.color
	    		FROM $tableCapture c
	    			INNER JOIN $tableStation s ON s.id = c.station_id
    					INNER JOIN $tableOrganization o	ON o.mac = SUBSTRING(s.mac FROM 1 FOR 8)
    						INNER JOIN $tableOs o2 ON o2.id = o.os_id
        		WHERE c.box_id = :idBox
                	AND c.date_capture BETWEEN :date1 and :date2
				)
            	
    		SELECT t1.name, t1.color, ( ( 1.0 * COUNT(*) / ( SELECT COUNT(*) FROM wt t2 ) )* 100 ) pourcent
    		FROM wt t1
    		GROUP BY t1.name, t1.color
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->execute();
        
        return $statement->fetchAll();
    }
    
    
    /**
     * Find average time
     * Renvoie le temps moyen de passage d'un visiteur
     * 
     * @param Datetime $date1
     * @param Datetime date2
     * @param Box $box
     */
    public function findAverageTime($date1, $date2, $box, $round, $interval = '00:00:10')
    {
		$em = $this->_em;
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		$sql = "
        	SELECT 
        		date_trunc(:round, t1.date2_capture) date_capture, 
        		AVG(t1.duration) average_time
        	FROM
        	(
        		SELECT c.station_id, c.date2_capture, (c.tab[array_length(c.tab, 1)] - c.tab[1]) duration
        		FROM
        		(
        			SELECT station_id, date_trunc('hour', date_capture) date2_capture, ARRAY_AGG(date_capture ORDER BY date_capture) tab
        			FROM $tableCapture
        			WHERE box_id = :idBox
			            AND date_capture BETWEEN :date1 and :date2
        			GROUP BY station_id, date_trunc('hour', date_capture)
        		) c
        	) t1
        	WHERE t1.duration > INTERVAL '$interval'
        	GROUP BY date_trunc(:round, t1.date2_capture)
        	ORDER BY date_trunc(:round, t1.date2_capture)
		";
		
		$connection = $em->getConnection();
		$statement = $connection->prepare($sql);
		$statement->bindValue("idBox", $box->getId());
		$statement->bindValue("date1", $date1, "datetime");
		$statement->bindValue("date2", $date2, "datetime");
		$statement->bindValue("round", $round);
		$statement->execute();
        
        return $statement->fetchAll();
    }
}
