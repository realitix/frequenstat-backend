<?php

namespace Tracker\CaptureBundle\Service;

class CaptureExporter
{
	/*
	 * CaptureManager
	*/
    private $cm;
    
    /*
	 * PHPExcel
	*/
    private $pe;
    
    /*
	 * Type de fichier à exporter
	*/
    private $fileType = null;
    
    /*
	 * Statistique générés par le CaptureManager
	*/
    private $statistics = null;
    
    /*
	 * Extension de fichiers
	*/
    private $extensions = array(
		'Excel5' => 'xls',
		'Excel2007' => 'xlsx',
		'CSV' => 'csv'
    );
    
    
    /*
	 * Date des intervalles
	*/
    private $dates = array();
    
    public function __construct(CaptureManager $cm, \Liuggio\ExcelBundle\Factory $pe)
    {
        $this->cm = $cm;
        $this->pe = $pe;
    }
    
    public function setBox($box)
    {
        $this->cm->setBox($box);
        return $this;
    }
    
    public function setInterval($i)
    {
        $this->cm->setInterval($i);
        return $this;
    }
    
    public function setFileType($t)
    {
        if( !array_key_exists($t, $this->extensions) )
            return false;
            
        $this->fileType = $t;
        return $this;
    }
    
    public function setDates($dates)
    {
    	$this->cm->setDates($dates);
        return $this;
    }
    
    public function validInterval() 
    {
    	return $this->cm->validInterval();
    }
    
    public function setRelative($b = true)
    {
    	$this->cm->setRelative($b);
    	return $this;
    }
    
    /**
     * Cette fonction renvoie le fichier que le controleur doit retourné
     */
    public function getFile()
    {
    	if( !$this->hasCapture() )
    		return null;
    		
		$sheets = $this->formatStatistics();
		
		$phpExcelObject = $this->pe->createPHPExcelObject();
		$phpExcelObject->getProperties()
			->setCreator('FrequenStat')
			->setLastModifiedBy("FrequenStat")
			->setTitle("Statistiques FrequenStat")
			->setSubject("Statistiques FrequenStat")
			->setDescription("Statistiques FrequenStat");
		
		$nbS = 0;
		$letters = range('A', 'Z');
		foreach( $sheets as $sheet ) {
			if( $nbS > 0 )
				$phpExcelObject->createSheet();
			$phpExcelObject->setActiveSheetIndex($nbS);
			foreach( $sheet['data'] as $l => $ld ) {
				foreach( $ld as $c => $cd ) {
					$phpExcelObject->getActiveSheet()->setCellValue($letters[$c].($l+1), $cd);
				}
			}
			
			$phpExcelObject->getActiveSheet()->setTitle($sheet['name']);
			$nbS++;
		}
		$phpExcelObject->setActiveSheetIndex(0);
		$writer = $this->pe->createWriter($phpExcelObject, $this->fileType);
        ob_start();
        $writer->save('php://output');
        $excelOutput = ob_get_clean();

 
        $response = new \Symfony\Component\HttpFoundation\Response();
		$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
		$response->headers->set('Content-Disposition', 'attachment;filename=frequenstat.'.$this->extensions[$this->fileType]);
		$response->headers->set('Pragma', 'public');
		$response->headers->set('Cache-Control', 'maxage=1');
        $response->setContent($excelOutput);
		return $response;
    }
    
    private function formatStatistics() {
    	$this->statistics = $this->cm->getStatistics();
    	/*echo '<pre>';
    	print_r($this->statistics);
    	echo '</pre>';
    	exit(0);*/
    	
    	
    	$sheets = array(
    		array(
    			'name' => 'Comptage',
    			'data' => $this->formatCount()
    		),
    		array(
    			'name' => 'Taux d\'entrée',
    			'data' => $this->formatRatio()
    		),
    		array(
    			'name' => 'Temps de présence',
    			'data' => $this->formatAverageTime()
    		)
    	);

    	return $sheets;
    }
    
    private function formatCount() {
    	$lines = array();
    	$l = 0;
    	$c = 0;
    	$i = 1;
    	foreach( $this->statistics as $s ) {
    		$lines[$l][$c] = "Période ".$i;
    		$l++;
    		$lines[$l][$c] = "Date";
    		$lines[$l][$c+1] = "Nombre de passages";
    		
    		foreach( json_decode($s['stats']['countChart']['captures']['real']) as $capture ) {
    			$l++;
    			$lines[$l][$c] = date('Y-m-d H:i', ($capture[0]/1000));
    			$lines[$l][$c+1] = $capture[1];
    		}
    		
    		$l = 0;
    		$c += 3;
    		$i++;
    	}
    	return $lines;
    }
    
    private function formatRatio() {
    	$lines = array();
    	$l = 0;
    	$c = 0;
    	$i = 1;
    	foreach( $this->statistics as $s ) {
    		$lines[$l][$c] = "Période ".$i;
    		$l++;
    		$lines[$l][$c] = "Date";
    		$lines[$l][$c+1] = "Nombre d'entrées";
    		$lines[$l][$c+2] = "Nombre de passages";
    		$lines[$l][$c+3] = "Taux d'entrée";
    		
    		foreach( json_decode($s['stats']['ratioChart']['entry']) as $e ) {
    			$l++;
    			$lines[$l][$c] = date('Y-m-d H:i', ($e[0]/1000));
    			$lines[$l][$c+1] = $e[1];
    		}
    		$l = 1;
    		foreach( json_decode($s['stats']['ratioChart']['transit']) as $e ) {
    			$l++;
    			$lines[$l][$c+2] = $e[1];
    		}
    		$l = 1;
    		foreach( json_decode($s['stats']['ratioChart']['ratio']) as $e ) {
    			$l++;
    			$lines[$l][$c+3] = $e[1].'%';
    		}
    		
    		$l = 0;
    		$c += 5;
    		$i++;
    	}
    	return $lines;
    }
    
    private function formatAverageTime() {
    	$lines = array();
    	$l = 0;
    	$c = 0;
    	$i = 1;
    	foreach( $this->statistics as $s ) {
    		$lines[$l][$c] = "Période ".$i;
    		$l++;
    		$lines[$l][$c] = "Date";
    		$lines[$l][$c+1] = "Durée de présence";
    		
    		foreach( json_decode($s['stats']['averageTimeChart']['times']) as $e ) {
                $l++;
    			$lines[$l][$c] = date('Y-m-d H:i', ($e[0]/1000));
    			
                $s = floor($e[1]/1000) + 60*60;
        		$hours = floor($s / 3600);
        		$remainder = $s % 3600;
        		$minutes = floor($remainder / 60);
        		$seconds = $remainder % 60;
        		
        		$hours = (strlen(strval($hours)) < 2) ? '0'.$hours : $hours;
        		$minutes = (strlen(strval($minutes)) < 2) ? '0'.$minutes : $minutes;
        		$seconds = (strlen(strval($seconds)) < 2) ? '0'.$seconds : $seconds;
        		$lines[$l][$c+1] = $hours.':'.$minutes.':'.$seconds;
    		}
    		
    		$l = 0;
    		$c += 3;
    		$i++;
    	}
    	return $lines;
    }
    
    /**
     * Cette fonction renvoie true si il existe des captures
     */
    public function hasCapture()
    {
    	return $this->cm->hasCapture();
    }
}