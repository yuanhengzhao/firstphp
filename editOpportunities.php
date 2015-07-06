<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<trnk rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/trbs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/bootstrap.min.css" />
<link type="text/css" href="css/bootstrap-timepicker.min.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-2.2.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>

</head>
<body>
<!--Add the nav bar-->
<?php include 'nav.php';?>

<?php
$id=$_GET['new'];
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
	$sql ="SELECT * FROM opportunity where id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	//var_dump($_POST['bi']);//test for the bi array;
	//Mysql syntax for update data.
	$sqls="update opportunity set status='".$_POST['bi']['status']."',Website='".$_POST['bi']['Website']."', Phone_Number='".$_POST['bi']['Phone_Number']."',Contact_Name='".$_POST['bi']['Contact_Name']."', Email='".$_POST['bi']['Email']."', Interesting_package='".$_POST['bi']['Interesting_package']."', followup_date='".$_POST['bi']['followup_date']."',committed_to_do='".$_POST['bi']['committed_to_do']."',followup_notes ='".$_POST['bi']['followup_notes']."', followup_Meeting_date='".$_POST['bi']['followup_Meeting_date']."',followup_Meeting_topic ='".$_POST['bi']['followup_Meeting_topic']."', followup_Meeting_sample_app_name='".$_POST['bi']['followup_Meeting_sample_app_name']."', followup_Meeting_sample_buttons='".$_POST['bi']['followup_Meeting_sample_buttons']."', followup_Meeting_sample_notes='".$_POST['bi']['followup_Meeting_sample_notes']."', Notes='".$_POST['bi']['Notes']."' where id=".$id;
	function update() {
		global $sqls;
		mysql_query($sqls);
	}

if (isset($_POST['submit'])) {
	update();
}

?>
<!--Display information of the selected user-->

<div class="container-fluid">

<h2><a{text-decoration:none} style="margin-left:10px"><?php echo $row['Business_Name'] ;?></a>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal"
data-target="#myModal">Edit</button></h2>

<div  class="modal fade" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close"
data-dismiss="modal"style="float:right">&times;</button>
<div class="container">
<h2>Edit <?php echo $row['Business_Name'];?></h2>
<form class="form-horizontal" role="form" action="editOpportunities.php?new=<?php echo $_GET['new']?>" method="POST">
<div class="form-group">
<label class="control-label col-sm-2" for="website">Website:</label>
<div class="col-sm-6">
<input name="bi[Website]" type="text" class="form-control"
id="website"value="<?php echo $row['Website']?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="Pnum">Phone Number:</label>
<div class="col-sm-6">
<input name="bi[Phone_Number]"type="text"class="form-control" id="Pnum" value="<?php echo $row['Phone_Number']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="Cnam">Contact Name:</label>
<div class="col-sm-6">
<input name="bi[Contact_Name]"type="text" class="form-control" id="Cnam" value="<?php echo $row['Contact_Name']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="email">Email:</label>
<div class="col-sm-6">
<input name="bi[Email]" type="text" class="form-control" id="email" value="<?php echo $row['Email']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="bi[status]">Status:</label>
<div class="radio" id="choice" style="margin-left:20px">
<label><input type="radio" name="bi[status]" value="Lead" <?php if ($row['status']== 'Lead') echo 'checked'?> >Lead</label>
<label><input type="radio" name="bi[status]" value="Interested" <?php if ($row['status']== 'Interested') echo 'checked'?>>Interested</label>
<label><input type="radio" name="bi[status]" value="Not this time" <?php if ($row['status']== 'Not this time') echo 'checked'?> >Not this time</label>
<label><input type="radio" name="bi[status]" id="close_button" value="Closed" onclick="alert('Are you sure to close your opportunity?') <?php if ($row['status']== 'closed') echo 'checked'?> " >Closed</label>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2"for="bi[Interesting_package]" >Interested Package Name:</label>
<div class="col-sm-6">
<select name="bi[Interesting_package]"type="text" class="form-control" id="IPackname">
<option name="bi[Interesting_package]" value="Package 1" <?php if ($row['Interesting_package']=='Package 1') echo 'checked'?> >Package 1</option>
<option name="bi[Interesting_package]" value="Package 2" <?php if ($row['Interesting_package']=='Package 2') echo 'checked'?> >Package 2</option>
<option name="bi[Interesting_package]" value="Package 3" <?php if ($row['Interesting_package']=='Package 3') echo 'checked'?> >Package 3</option>
<option name="bi[Interesting_package]" value="Package 4" <?php if ($row['Interesting_package']=='Package 4') echo 'checked'?> >Package 4</option>
</select>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="" >Comments:</label>
<div class="col-sm-6">
<input name="bi[committed_to_do]"type="text" class="form-control" id="Scom" value="<?php echo $row['committed_to_do']?>">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" >Follow-up Date:</label>
<div class="col-sm-6">
<input name="bi[followup_date]"type="datetime" class="form-control" id="fdate" value="<?php echo $row['followup_date']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Follow-up Notes:</label>
<div class="col-sm-6">
<input name="bi[followup_notes]"type="text" class="form-control" id="fnotes" value="<?php echo $row['followup_notes']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" >Meeting Date:</label>
<div class="col-sm-6 input-append bootstrap-timepicker">
<input name="bi[followup_Meeting_date]" id="timpicker2" type="text" class="form-control" id="fMdate" value="<?php echo $row['followup_Meeting_date']?>"><span class="add-on"><i class="icon-time"></i></span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Meeting Topic:</label>
<div class="col-sm-6">
<input name="bi[followup_Meeting_topic]"type="text" class="form-control" id="fdate" value="<?php echo $row['followup_Meeting_topic']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" >Sample App Name:</label>
<div class="col-sm-6">
<input name="bi[followup_Meeting_sample_app_name]"type="text" class="form-control" id="SAname" value="<?php echo $row['followup_Meeting_sample_app_name']?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="SAbuttons">Sample App Buttons:</label>
<div class="col-sm-6">
<input name="bi[followup_Meeting_sample_buttons]"type="text" class="form-control" id="SAbuttons" value="<?php echo $row['followup_Meeting_sample_buttons']?>">
</div>
</div>
<div class="form-group">
<label  class="control-label col-sm-2" for="Notes">Notes:</label>
<div class="col-sm-6">
<textarea name="bi[Notes]"class="form-control" rows="5" id="Notes" value="<?php echo $row['Notes']?>"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name ="submit" value="submit"class="btn btn-default">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-9 col-md-10 col-lg-5">
<h2>Information</h2>
<table class="table table-striped">
<tbody>
<tr><td> Website:</td><td> "<?php echo $row['Website'];?>"</td></tr>
<tr><td> Phone Number:</td><td> "<?php echo $row['Phone_Number'];?>"</td></tr>
<tr><td> Contact Name:</td><td> <?php echo $row['Contact_Name'];?></td></tr>
<tr><td>Email:</td><td><?php echo $row['Email'];?></td></tr>
<tr><td>Status:</td><td><?php echo $row['status'];?></td></tr>
<tr><td>Interested Package:</td><td><?php echo $row['Interesting_package'];?></td></tr>
<tr><td>Status Comment:</td><td><?php echo $row['committed_to_do'];?></td></tr>
<tr><td>Follow-up Date:</td><td> <?php echo $row['followup_date'];?></td></tr>
<tr><td>Follow-up Notes: </td><td><?php echo $row['followup_notes'];?></td></tr>
<tr><td>Meeting Date:</td><td> <?php echo $row['followup_Meeting_date'];?></td></tr>
<tr><td>Meeting Topic:</td><td> <?php echo $row['followup_Meeting_topic'];?></td></tr>
<tr><td>Sample App Name: </td><td><?php echo $row['followup_Meeting_sample_app_name'];?></td></tr>
<tr><td>Sample App Buttons: </td><td><?php echo $row['followup_Meeting_sample_buttons'];?></td></tr>

</tbody>
</table>
</div>
<div class="col-sm-9 col-md-10 col-lg-5" >
<a data-toggle="collapse" data-target="#demo"><h2>Communication Log</h2></a>
<table class="table table-striped" id="demo" class="collapse">
<tbody>

<?php
$sqlsss="insert into communication_log (businessName,logDate,content) value('".$row['Business_Name']."','".$_POST['bi']['followup_date']."','".$_POST['bi']['followup_notes']."')";
if($row['followup_notes']!=$_POST['bi']['followup_notes']){
	mysql_query($sqlsss);
}
$sqlSelectLog="select * from communication_log where businessName='".$row['Business_Name']."' order by logDate desc" ;
$logResults=mysql_query($sqlSelectLog);


while($newRow = mysql_fetch_assoc($logResults)){
	echo "<tr><td>";
	echo $newRow["logDate"];
	echo "</td><td>";
	echo $newRow["content"];
	echo "</td></tr>";

}
$conn-->close();
?>
</tbody>

</table>
</div>
</div>
</body>
</html>
