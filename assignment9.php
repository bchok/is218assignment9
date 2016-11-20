<?php

class MyCSVWriter{
    
    public function openCSV($file){
        try {
         fopen($file, "w");
        } catch (Exception $e){
            echo 'The file was not found: '. $e->getMessage() ."\n";
        }
    }

    public function writeToCSV($file, $userarray){
        try {
            fopen($file, "w");
        } catch (Exception $e){
            echo 'The file was not found: '. $e->getMessage() ."\n";
        }
        try{
            foreach ($userarray as $line){
                fputcsv($file, explode(',', $line));
        }
        }catch(Exception $e){
            echo 'Unable to write to file: ', $e->getMessage(), "\n";
        }
    fclose($file);
    }
}

$myWriter = new MyCSVWriter();
$myarray = array("Brian, Holly, Debbie, Kenny", "TJ, Erin, Kate, Mo");
$myWriter->openCSV("myCSV.csv");
$myWriter->writeToCSV("myCSV.csv", $myarray);



?>