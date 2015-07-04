<html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'nav.php';?>
<a href="addOpportunity.php"<button type="button" class="btn btn-success btn-lg">Add Opportunity</button></a>
<?php

$host = "127.0.0.1";
$database = "opportunity_db";
$user = "root";
$pass = "";

//connection to the database
$conn=mysql_connect($host, $user, $pass)
  or die ('cannot connect to the database: ' . mysql_error());

//select the database
mysql_select_db($database)
  or die ('cannot select database: ' . mysql_error());

//loop to show all the tables and fields
$loop = mysql_query("SHOW tables FROM $database")
  or die ('cannot select tables');

while($table = mysql_fetch_array($loop))
{


  $i = 0; //row counter
  $row = mysql_query("SHOW columns FROM " . $table[0])
    or die ('cannot select table fields');
  $elements = array();

  while ($col = mysql_fetch_array($row))
  {
    $elements[$i]=$col[0];


    $i++;
  } //end row loop
  echo "</table><br/><br/>";
}

?>
<div class="container">
<h2>opportunities</h2>
<table class="table table-hover table-striped" >
<thead>
<tr>
<?php
for($j=1; $j<=2;$j++){
  echo "<th>";
  echo strtr($elements[$j], "_"," " );
  echo "</th>";
}
echo "<th>";
echo "Follow-up Date";
echo "</th>";

?>
  </tr>
  </thead>
  <tbody>

<?php
mysql_select_db($conn,$database);
$sqlselect = "SELECT * FROM opportunity order by followup_date desc";
$result = mysql_query($sqlselect);
echo $qwer;
// output data of each row
while($row = mysql_fetch_assoc($result)) {
  $var=$row["id"];
  echo "<tr>";
  echo "<td><a href='editOpportunities.php?new=$var'>";
  echo  $row["Business_Name"]. "</td><td> " . $row["Website"]. "</td><td>  ". $row["followup_date"]."</a></td>";
  echo "</tr>";
}

$conn->close();
?>
</tbody>
</table>
</div>


</body>
</html>
