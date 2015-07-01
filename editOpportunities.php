<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" 
href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
$(function() {
    $("#close_button").click(function(e){
      if(!confirm("are you sure")) e.preventDefault();
      })
});
    </script>
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
var_dump($_POST['bi']);//test for the bi array;
//Mysql syntax for update data.
$sqls="update opportunity set Website='".$_POST[bi][Website]."', Phone_Number='".$_POST[bi][Phone_Number]."',Contact_Name='".$_POST[bi][Contact_Name]."', Email='".$_POST[bi][Email]."',status='".$_POST[bi][status]."', final_package='".$_POST[bi][final_package]."', followup_date='".$_POST[bi][followup_date]."',followup_notes ='".$_POST[bi][followup_notes]."', followup_Meeting_date='".$_POST[bi][followup_Meeting_date]."',followup_Meeting_topic ='".$_POST[bi][followup_Meeting_topic]."', followup_Meeting_sample_app_name='".$_POST[bi][followup_Meeting_sample_app_name]."', followup_Meeting_sample_buttons='".$_POST[bi][followup_Meeting_sample_buttons]."', followup_Meeting_sample_notes='".$_POST[bi][followup_Meeting_sample_notes]."', Notes='".$_POST[bi][Notes]."', where id=".$id;
$sqlCommunicationLog="add column communication_log".$lognumber." text not null";
$sqlUpdateCommunicationLog="update opportunity set communication_log".$lognumber;
if($row!=$_POST[bi]){
  mysql_query($sqlCreateCommunicationLog);
  mysql_query($sql);
}
mysql_query($sqls);

var_dump($row);
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
                        <button type="button" clas="close"
                                data-dismiss="modal"style="float:right">&times;</button>
                        <div class="container">
                        <h2>Edit <?php echo $row['Business_Name'];?></h2>
                            <form class="form-horizontal" role="form" action="editOpportunities.php?new=<?php echo $_GET['new']?>" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="website">Website:</label>
                                    <div class="col-sm-6">
                                        <input name="bi[Website]" type="text" class="form-control"
                                               id="website"value="<?php echo $row['Website']?>">
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
                                <label><input type="radio" name="bi[status]" value="Lead"
 <?php if ($row['status']== 'Lead') echo 'checked'?> >Lead</label>
                                    <label><input type="radio" name="bi[status]" value="Interested" <?php if ($row['status']== 'Interested') echo 'checked'?>>Interested</label>
                                    <label><input type="radio" name="bi[status]" value="Not this time">Not this time</label>
                                    <label><input type="radio" id="close_button" name="bi[status]" value="Closed">Closed</label>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2"for="IPackname" >Interested Package Name:</label>
                                    <div class="col-sm-6">
                                        <select name="bi[Interesting_package]"type="text" class="form-control" id="IPackname">
    <option name="bi[Interesting_package]" value="Package 1">Package 1</option>
    <option name="bi[Interesting_package]" value="Package 2">Package 2</option>
    <option name="bi[Interesting_package]" value="Package 3">Package 3</option>
    <option name="bi[Interesting_package]" value="Package 4">Package 4</option>
                                    </select>
                                </div>
</div>
                                <div class="form-group">
                                <label class="control-label col-sm-2" >Comments:</label>
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
                                    <div class="col-sm-6">
                                        <input name="bi[followup_Meeting_date]"type="text" class="form-control" id="fMdate" value="<?php echo $row['followup_Meeting_date']?>">
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
                                        <textarea class="form-control" rows="5" id="Notes" value="<?php echo $row['Notes']?>"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name ="submit" value="submit"class="btn btn-default" onclick="for(var i=0;i<4;i++)
                                    {
                                      if (document.all.status[i].checked){alert( document.all.number1[i].value); 
                                      if(document.all.I)
                                    }}">Submit</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            </div>
<div class="row">
<div class="col-sm-4 col-md-6 col-lg-5" style="background-color:#CCFFCC;">
      <div class="panel-group" id="accordion">
<?php
echo "Website: " .$row['Website'];
echo "<br></br>";
echo "Phone Number: " .$row['Phone_Number'];
echo "<br></br>";
echo "Contact Name: " .$row['Contact_Name'];
echo "<br></br>";
echo "Email: " .$row['Email'];
echo "<br></br>";
echo "Status:" .$row['status'];
echo "<br></br>";
echo "Status Comment:" .$row['final_package'];
echo "<br></br>";
echo "Follow-up Date: " .$row['followup_date'];
echo "<br></br>";
echo "Follow-up Notes: " .$row['followup_notes'];
echo "<br></br>";
echo "Meeting Date: " .$row['followup_Meeting_date'];
echo "<br></br>";
echo "Meeting Topic: " .$row['followup_Meeting_topic'];
echo "<br></br>";
echo "Sample App Name: " .$row['followup_Meeting_sample_app_name'];
echo "<br></br>";
echo "Sample App Buttons: " .$row['followup_Meeting_sample_buttons'];
echo "<br></br>";
echo "Sample Notes: " .$row['followup_Meeting_sample_notes'];
echo "<br></br>";
echo "content: " .$row['Notes'];


?>
</div>
</div><div class="col-sm-9 col-md-10 col-lg-5" style="background-color:lavenderblush;">
<h2>Communication Log</h2>
<table class="table-striped">
<thead>
<tr>
<?php
mysql_select_db($conn,$database);
$sqlselect = "SELECT * FROM opportunity where id ='.$id.'order by followup_date desc";
$result = mysql_query($sqlselect);
// output data of each row
$var=$row["id"];
echo "<tr>";
echo "<td>";
echo  $row["followup_Meeting_date"]. "</td><td> " . $row["Status"]. "</td><td>  ". $row["followup_notes"]."</a></td>";
echo "</tr>";

$conn->close();
?>

</table>

</div>
<!--Apply bootstrap modal to displaay edit screen-->

</div>
          </body>
</html>
