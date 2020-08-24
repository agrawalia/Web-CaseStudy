<!DOCTYPE html>
<html>
<head>
	<title>Search Student By ID</title>
<style>
fieldset {
  background-color: #eeeeee;
}
</style>
</head>
<body style="font-family: Arial">
<fieldset>
	<legend><i><h2>All Students data</i></h2></legend>
<table border= "2">
<?php

$csv = array();
 if(($handle = fopen("students.csv", "r")) !== FALSE)
 {
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $csv[] = $data;
    }
 }

 $row=0;
 if (($fp = fopen("students.csv", "r")) !== FALSE) { 
  while (($record = fgetcsv($fp)) !== FALSE) {
      $row++;
  }

}
 echo "<tr><th> Student ID </td><th>Student Name </th><th>Gender </th><th>DateOfBirth </th><th> City </th><th>State </th><th>EmailID </th><th>Qualification </th><th> Stream </th></tr>";

for($i=1; $i<$row; $i++){
	echo "<tr>";
    for($j=0; $j<9; $j++){
        //echo $row[0];
        
        echo "<td>". $csv[$i][$j]."</td>";              
    }
    echo "</tr>";
}
 fclose($handle);
?>
</table>
</fieldset>
</body>
</html>
