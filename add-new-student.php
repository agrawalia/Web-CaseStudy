<?php
 $fieldA = isset($_POST['studentid']) ? $_POST['studentid'] : '';
 $fieldB = isset($_POST['studentname']) ? $_POST['studentname'] : '';
 $fieldC = isset($_POST['gender']) ? $_POST['gender'] : '';
 $fieldD = isset($_POST['dob']) ? $_POST['dob'] : '';
 $fieldE = isset($_POST['city']) ? $_POST['city'] : '';
 $fieldF = isset($_POST['state']) ? $_POST['state'] : '';
 $fieldG = isset($_POST['emailid']) ? $_POST['emailid'] : '';
 $fieldH = isset($_POST['qualification']) ? $_POST['qualification'] : '';
 $fieldI = isset($_POST['stream']) ? $_POST['stream'] : '';

 $keys = array($fieldA,$fieldB,$fieldC,$fieldD,$fieldE,$fieldF,$fieldG,$fieldH,$fieldI); //THIS IS WHERE YOU PUT THE FORM ELEMENTS ex: array('$fieldA','$fieldB',etc)
 // $csv_line = $keys;
 // foreach( $keys as $key ){
 //     array_push($csv_line,'' .isset($_GET[$key]) ? $_GET[$key] : '');
 // }

 $fname = "students.csv"; //NAME OF THE FILE
 //$csv_line = implode(',',$csv_line);
 if(!file_exists($fname)){$csv_line = $csv_line."\r\n" ;}
 $fcon = fopen($fname,"a");
 //$fcon = $fcon ."\n";
 //$fcontent = $csv_line;
 fputcsv($fcon,$keys);
 fclose($fcon);
 ?>