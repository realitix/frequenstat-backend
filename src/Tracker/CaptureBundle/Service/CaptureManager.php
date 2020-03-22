<?php

namespace Tracker\CaptureBundle\Service;

class CaptureManager
{
    const TYPE_24H    = 1;
    const TYPE_7DAYS  = 2;
    const TYPE_1MONTH = 3;
    const TYPE_CUSTOM = 4;
    
	/*
	 * CaptureManager
	*/
    private $cm;
    
    /*
	 * Type de statistiques (24h, 1 semaine, 1 mois)
	*/
    private $type = null;
    
    /*
	 * Date des intervalles
	*/
    private $dates = array();
    
    public function __construct(CaptureFinder $cm)
    {
        $this->cm = $cm;
    }
    
    public function setBox($box)
    {
        $this->cm->setBox($box);
        return $this;
    }
    
    /**
     * @param array $dates
     *  array(
        	array('begin' => $begin1, 'end' => $end1),
        	array('begin' => $begin2, 'end' => $end2)
        )
     */
    public function setDates($dates)
    {
    	for($i = 0; $i < count($dates); $i++) {
    		$dates[$i]['begin'] = new \DateTime($dates[$i]['begin']);
    		$dates[$i]['end'] = new \DateTime($dates[$i]['end']);
    	}
    	
        $this->dates = $dates;
        return $this;
    }
    
    private function setDatesRound() 
    {
    	for($i = 0; $i < count($this->dates); $i++) {
    		$interval = $this->dates[$i]['end']->getTimestamp() - $this->dates[$i]['begin']->getTimestamp();
    		
    		$int = 'month';
    		// Moins d'une heure
        	if( $interval <= 60*60 )
            	$int = 'minute';
        	// Moins de 60h
        	elseif( $interval <= 60*60*60 )
	            $int = 'hour';
	        // Moins de 60 jours
	        elseif( $interval <= 60*24*60*60 )
	            $int = 'day';
        	
        	$this->dates[$i]['interval'] = $int;
    	}
    }
    
    /**
     * Valide que l'intervalle est le même pour les deux périodes
     */
    public function validInterval() 
    {
        for( $i = 0; $i < count($this->dates) - 1; $i++ ) {
            if( $this->dates[$i]['interval'] != $this->dates[$i+1]['interval'] )
    		    return false;
        }
    	return true;
    }
    
    public function setRelative($b = true)
    {
    	$this->cm->setRelative($b);
    }
    
    public function setInterval($i)
    {
    	$this->cm->setInterval($i);
    }
    
    /**
     * Cette fonction renvoie les statistiques en fonction du type désiré
     */
    public function getStatistics()
    {
    	if( !$this->hasCapture() )
    		return $this->dates;
    	
    	// Set the interval
    	$this->setDatesRound();
    	
    	// Set results
        $this->setCountChart();
        $this->setRatioChart();
        $this->setRedemptionChart();
        $this->setAverageTimeChart();
        
        return $this->dates;
    }
    
    /**
     * Cette fonction met en place le graphique de comptage dans les dates
     */
    private function setCountChart()
    {
    	for( $i = 0; $i < count($this->dates); $i++ ) {
    		$this->cm->setDates($this->dates[$i]['begin'], $this->dates[$i]['end']);
    		$this->dates[$i]['stats']['countChart'] = $this->cm->getCountChart();
    	}
    	
    	return $this;
    }
    
    /**
     * Cette fonction met en place le graphique de ratio dans les dates
     */
    private function setRatioChart()
    {
    	for( $i = 0; $i < count($this->dates); $i++ ) {
    		$this->cm->setDates($this->dates[$i]['begin'], $this->dates[$i]['end']);
    		$this->dates[$i]['stats']['ratioChart'] = $this->cm->getRatioChart();
    	}
    	
    	return $this;
    }
    
    /**
     * Cette fonction met en place le graphique de taux de retour dans les dates
     */
    private function setRedemptionChart()
    {
    	for( $i = 0; $i < count($this->dates); $i++ ) {
    		$this->cm->setDates($this->dates[$i]['begin'], $this->dates[$i]['end']);
    		$this->dates[$i]['stats']['redemptionChart'] = $this->cm->getRedemptionChart();
    	}
    	
    	return $this;
    }
    
    /**
     * Cette fonction met en place le graphique de temps de présence dans les dates
     */
    private function setAverageTimeChart()
    {
    	for( $i = 0; $i < count($this->dates); $i++ ) {
    		$this->cm->setDates($this->dates[$i]['begin'], $this->dates[$i]['end']);
    		$this->dates[$i]['stats']['averageTimeChart'] = $this->cm->getAverageTimeChart();
    	}
    	
    	return $this;
    }
    
    /**
     * Cette fonction renvoie true si il existe des captures
     */
    public function hasCapture()
    {
    	$hasCapture = true;
    	for( $i = 0; $i < count($this->dates); $i++ ) {
    		$this->cm->setDates($this->dates[$i]['begin'], $this->dates[$i]['end']);
    		$h = $this->cm->hasCapture();
    		$this->dates[$i]['hasCapture'] = $h;
    		if( !$h ) $hasCapture = false;
    	}
    	return $hasCapture;
    }
}