<?php

    $myarray = array("Brian, Holly, Debbie, Kenny", "TJ, Erin, Kate, Mo");

    try {
    $file = fopen("writeCSV.csv", "w");
    } catch (Exception $e){
        echo 'The file was not found: '. $e->getMessage() ."\n";
    }

    try{
    foreach ($arrayLine as $line){
        fputcsv($file, explode(',', $line));
    }
    }catch(Exception $e){
        echo 'Unable to write to file: ', $e->getMessage(), "\n";
    }

    fclose($file);

    echo 'the code utilizes a try and catch block to see if the exception gets thrown<br>';
    echo 'i cannot get the exception to be thrown even though the file does not exist<br>';
    echo 'therefore my custom error message for the exception is not being displayed<br>';
?>