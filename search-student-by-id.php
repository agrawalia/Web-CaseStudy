<!DOCTYPE html>
<html>
<head>
	<title>Search Student By ID</title>
</head>
<style>
fieldset {
  background-color: #eeeeee;
}
</style>
<body style="font-family: Arial">
<fieldset>
	<legend><i><h2>Student details</i></h2></legend>
<table border= "2">
<?php
 $id = isset($_POST['searchbar']) ? $_POST['searchbar'] : '';

 $csv = array();
 if(($handle = fopen("students.csv", "r")) !== FALSE)
 {
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $csv[] = $data;
    }
 }

 for($i=0; $i<10; $i++){
    if ($csv[$i][0] == $id){
        //echo $row[0];
        echo "<tr><td><b> Student ID </b></td><td>". $csv[$i][0]."</td></tr>";
        echo "<tr><td><b> Student Name </b></td><td>". $csv[$i][1]."</td></tr>";
        echo "<tr><td><b> Gender </b></td><td>". $csv[$i][2]."</td></tr>";
        echo "<tr><td><b> DateOfBirth </b></td><td>". $csv[$i][3]."</td></tr>";
        echo "<tr><td><b> City </b></td><td>". $csv[$i][4]."</td></tr>";
        echo "<tr><td><b> State </b></td><td>". $csv[$i][5]."</td></tr>";
        echo "<tr><td><b> EmailID </b></td><td>". $csv[$i][6]."</td></tr>";
        echo "<tr><td><b> Qualification </b></td><td>". $csv[$i][7]."</td></tr>";
        echo "<tr><td><b> Stream </b></td><td>". $csv[$i][8]."</td></tr>";
        break;              
    }
}
    fclose($handle);           

 ?>
</table>
</fieldset>
</body>
</html>
