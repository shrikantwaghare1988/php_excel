<?php

require('PHPExcel.php');

$xl_obj = new PHPExcel();
		$reader = PHPExcel_IOFactory::createReader('Excel2007');
		$reader->setReadDataOnly(true);
		$excel = $reader->load('test.xlsx');

        $sheet = $excel->getActiveSheet()->toArray(null,true,true,true);
		//pre($excel->getActiveSheet());die;
		pre($sheet);die;
        $arrayCount = count($sheet); 
        for($i=2;$i<=$arrayCount;$i++)
        {                   
           // echo $sheet[$i]["A"].$sheet[$i]["B"].$sheet[$i]["C"];
        }

        function pre($var)
        {
            echo "<pre>";
            print_r($var);        
        }      
?>