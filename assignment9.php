<?php

    $myarray = array("Brian, Holly, Debbie, Kenny", "TJ, Erin, Kate, Mo");

    $file = fopen("writeCSV.csv", "w");

    foreach ($arrayLine as $line){
        fputcsv($file, explode(',', $line));
    }

    fclose($file);
?>