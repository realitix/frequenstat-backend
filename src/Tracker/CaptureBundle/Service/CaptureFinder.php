<?php

namespace Tracker\CaptureBundle\Service;

use Doctrine\ORM\EntityManager;

class CaptureFinder
{
	/*
	 * EntityManager
	*/
    private $em;
    
    /*
	 * Repository
	*/
    private $r;
    
    /*
	 * Type de statistiques (24h, 1 semaine, 1 mois)
	*/
    private $type = null;
    
    /*
	 * Box de l'utilisateur
	*/
    private $box = null;
    
    /*
	 * Date de départ des statistiques
	*/
    private $date1 = null;
    
    /*
	 * Date de fin des statistiques
	*/
    private $date2 = null;
    
    /*
	 * Permet de calculer l'estimation de perseonnes en fonction du nombre de signaux
	*/
    private $multiplier = null;
    
    /*
	 * Renvoie toutes les dates relativement
	*/
    private $relative = false;
    
    /*
	 * Force l'intervalle
	*/
    private $interval = null;
    
    /*
	 * Interval authorizés
	*/
    private $intervals = array('minute', 'hour', 'day', 'month');
    
    
    public function __construct(EntityManager $em, $multiplier)
    {
        $this->em = $em;
        $this->r = $this->em->getRepository('TrackerCaptureBundle:Capture');
        $this->multiplier = $multiplier;
    }
    
    public function setBox($box)
    {
        $this->box = $box;
    }
    
    public function setRelative($r)
    {
        $this->relative = $r;
    }
    
    public function setInterval($i)
    {
        $this->interval = $i;
    }
    
    public function setDates(\DateTime $date1, \DateTime $date2)
    {
        if( $date1->getTimestamp() > $date2->getTimestamp() ) {
            $this->date1 = $date2;
            $this->date2 = $date1;
            return;
        }
            
        $this->date1 = $date1;
        $this->date2 = $date2;
    }
    
    private function datesToRound() 
    {
        // Force interval
        if( $this->interval !== null )
            return $this->interval;
            
        $interval = $this->date2->getTimestamp() - $this->date1->getTimestamp();
        
        // Moins d'une heure
        if( $interval <= 60*60 )
            return 'minute';
        // Moins de 60h
        if( $interval <= 60*60*60 )
            return 'hour';
        // Moins de 60 jours
        if( $interval <= 60*24*60*60 )
            return 'day';
        
        // Sinon c'est mensuel
        return 'month';
    }
    
    /**
     * Cette fonction renvoie les statistiques en fonction du type désiré
     */
    public function getStatistics()
    {
        if( $this->type == null || $this->box == null || $this->date1 == null || $this->date2 == null )
            return null;
            
        return array(
            'ratioChart'      => $this->getRatioChart(),
            'countChart'      => $this->getCountChart(),
            'redemptionChart' => $this->getRedemptionChart(),
            'osRate'          => $this->getOsRate(),
            'averageTimeChart' => $this->getAverageTimeChart()
        );
    }
    
    /**
     * Cette fonction renvoie les statistiques lié aux entrée sortie et ratio
     */
    public function getRatioChart()
    {
        $round = $this->datesToRound();
        $infos = $this->r->findRatio($this->date1, $this->date2, $this->box, $round);
    
        if($infos === null)
            $infos = array();
        
    	// On créer le tableau json de la courbe
    	$entry = array();
    	$transit = array();
    	$ratio = array();
    	$sumEntry = 0;
    	$sumTransit = 0;
    	$sumRatio = 0;
    	foreach( $infos as $i )
    	{
    	    $d = strtotime($i['date_capture']);
    	    
    	    if( $this->relative ) {
    	        $d2 = new \DateTime($i['date_capture'].' today');
    	        $d = $d - $d2->getTimestamp();
    	        // Timestamp origine
    	        $d -= 60*60;
    	    }
    	    
    	    $entry[] = array($d * 1000, intval($i['entry']));
            $transit[] = array($d * 1000, intval($i['transit']));
            $ratio[] = array($d * 1000, intval($i['ratio']));
            
            $sumEntry += intval($i['entry']);
            $sumTransit += intval($i['transit']);
    	}
    	
    	if( $sumTransit > 0 )
    	    $sumRatio = (100*$sumEntry)/($sumTransit);
    	
    	$infos = array(
    	    'entry' => json_encode($entry),
    	    'transit' => json_encode($transit),
    	    'ratio' => json_encode($ratio),
    	    'sumEntry' => $sumEntry,
    	    'sumTransit' => $sumTransit,
    	    'sumRatio' => $sumRatio,
    	    'displayType' => $round
    	);
    	return $infos;
    }
    
    /**
     * Cette fonction renvoie les statistiques du graphique
     * $relatif True renvoie le timestamp relativement à sa date
     * Si c'est en heure, il renvoie par rapport au matin meme
     */
    public function getCountChart()
    {
        $round = $this->datesToRound();
        $captures = $this->r->findNumberIntervalStation($this->date1, $this->date2, $this->box, $round);
        
    	// On créer le tableau json de la courbe
    	$real = array();
    	$sum = 0;
    	foreach( $captures as $c )
    	{
    	    $d = strtotime($c['date']);
    	    
    	    if( $this->relative ) {
    	        $d2 = new \DateTime($c['date'].' today');
    	        $d = $d - $d2->getTimestamp();
    	        // Timestamp origine
    	        $d -= 60*60;
    	    }
    	    
    	    $real[] = array(
    	        $d * 1000,
    	        intval($c['sum'])
            );
            
            $sum += intval($c['sum']);
    	}
    	$captures = array(
    	    'real' => json_encode($real),
    	    'displayType' => $round,
    	    'sum' => $sum
    	);
    	return compact('captures');
    }
    
    /**
     * Cette fonction renvoie le temps moyen passé dans la boutique
     */
    public function getAverageTimeChart()
    {
        $round = $this->datesToRound();
    	$rs  = $this->r->findAverageTime($this->date1, $this->date2, $this->box, $round);
    	
    	$times = array();
    	$sumTime = 0;
    	$moreOneHour = false;
    	$i = 0;
    	foreach( $rs as $r )
    	{
    	    $d = strtotime($r['date_capture']);
    	    
    	    if( $this->relative ) {
    	        $d2 = new \DateTime($r['date_capture'].' today');
    	        $d = $d - $d2->getTimestamp();
    	        // Timestamp origine
    	        $d -= 60*60;
    	    }
    	    
    	    // On prend le timestamp moins le matin minuit, on enlève 1h car début timestamp à 1h
    	    $tmpAvg = (strtotime($r['average_time']) - strtotime('00:00:00') - 60*60);
    	    $sumTime += $tmpAvg;
    	    $times[] = array(
    	        $d * 1000,
    	        $tmpAvg * 1000,
            );
            
            if( $tmpAvg >= 60*60 ) {
                $moreOneHour = true;
            }
            
            $i++;
    	}
    	$sumTime = ($i !== 0) ? $sumTime/$i : 0;
    	
    	if( $sumTime >= 60*60  ) {
    	    $sumMoreOneHour = true;
    	}
    	
    	$times = array(
    	    'times' => json_encode($times),
    	    'sumTime' => intval($sumTime),
    	    'moreOneHour' => $moreOneHour,
    	    'displayType' => $round
    	);
    	return $times;
    }
    
    /**
     * Cette fonction renvoie le taux de retour
     */
    public function getRedemptionChart()
    {
    	$res = $this->r->findRedemptionRate($this->date1, $this->date2, $this->box);
		
		return $res;
    }
    
    /**
     * Cette fonction renvoie lpourcentage d'utilisation des OS
     */
    private function getOsRate()
    {
    	return $this->r->findOsRate($this->date1, $this->date2, $this->box);
    }
    
    /**
     * Cette fonction renvoie true si il existe des captures
     */
    public function hasCapture()
    {
    	$res = $this->r->countCaptures($this->date1, $this->date2, $this->box);
		
		if( $res > 0 )
		    return true;
		
		return false;
    }
}