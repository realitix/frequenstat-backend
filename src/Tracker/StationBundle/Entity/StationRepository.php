<?php

namespace Tracker\StationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * StationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StationRepository extends EntityRepository
{
	/**
     * Delete stations with no capture
     */
    public function deleteStationsWithoutCapture()
    {
		$em = $this->_em;
		$tableStation = $em->getClassMetadata('TrackerStationBundle:Station')->getTableName();
		$tableCapture = $em->getClassMetadata('TrackerCaptureBundle:Capture')->getTableName();
		
		$sql = "
			DELETE FROM $tableStation s
            WHERE s.id NOT IN (
            	SELECT station_id
            	FROM $tableCapture
            ) 
		";
		
		$connection = $em->getConnection();
		$connection->exec($sql);
    }
}
