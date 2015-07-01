<?php include 'nav.php';?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $Business_name=test_input($_POST["Bname"]);
 $Website=test_input($_POST["Web"]);
 $Phone_Number= test_input($_POST["Pnum"]);
 $Contact_Name=test_input($_POST["Cname"]);
 $Email=test_input($_POST["Email"]);
 $Requested_Follow_up= test_input($_POST["Rfollow"]);
 $Requested_Meeting= test_input($_POST["Rmeeting"]);
 $Requested_Sample= test_input($_POST["Rsample"]);
 $Notes= test_input($_POST["Notes"]);
 $followup_date= test_input($_POST["Fdate"]);
 $followup_notes= test_input($_POST["Fnotes"]);
 $followup_Meeting_date= test_input($_POST["FMdate"]);
 $followup_Meeting_topic= test_input($_POST["Ftopic"]);
 $followup_Meeting_sample_app_name= test_input($_POST["SAname"]);
 $followup_Meeting_sample_buttons= test_input($_POST["Sbuttons"]);
 $followup_Meeting_sample_notes= test_input($_POST["Snotes"]);}
function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "opportunity_db";
$conn = mysql_connect($servername,$username,$password,$dbname);
$dbname = mysql_select_db("opportunity_db",$conn);
$status = "Interested";
if($conn->connect_error){
  die("Connection failed:".$conn->connect_error);
}
if($Business_name!=null&&$Website!=null){
$sql=" INSERT INTO opportunity(Business_name, Website, Phone_Number, Contact_Name, Email, Requested_Follow_up, Requested_Meeting, Requested_Sample, Notes, followup_date, followup_notes, followup_Meeting_date, followup_Meeting_topic, followup_Meeting_sample_app_name, followup_Meeting_sample_buttons, followup_Meeting_sample_notes,status) VALUES( '$Business_name', '$Website',
 '$Phone_Number',
 '$Contact_Name',
 '$Email',
 '$Requested_Follow_up',
 '$Requested_Meeting',
 '$Requested_Sample',
 '$Notes',
 '$followup_date',
 '$followup_notes',
 '$followup_Meeting_date',
 '$followup_Meeting_topic',
 '$followup_Meeting_sample_app_name',
 '$followup_Meeting_sample_buttons',
 '$followup_Meeting_sample_notes',
 '$status'
)";
 mysql_query($sql,$conn);
header("Location: opportunities.php");
}
?>

<div class="container">
  <h2 style ="text-align:center">Create new opportunity</h2>
  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label for="usr">Bussiness Name:</label>
      <input type="text" class="form-control" name="Bname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Website:</label>
      <input type="text" class="form-control" name="Web" required>
    </div>
 <div class="form-group">
      <label for="usr">Phone Number:</label>
      <input type="text" class="form-control" name="Pnum">
    </div>
 <div class="form-group">
      <label for="usr">Contact Name:</label>
      <input type="text" class="form-control" name="Cname">
    </div>
 <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" name="Email">
    </div>
 <div class="form-group">
      <label for="usr">Requested Follow-up?:</label>
      <input type="text" class="form-control" name="Rfollow">
    </div>
 <div class="form-group">
      <label for="usr">Requested Meeting?:</label>
      <input type="text" class="form-control" name="Rmeeting">
    </div>

 <div class="form-group">
      <label for="usr">Requested Sample?</label>
      <input type="text" class="form-control" name="Rsample">
    </div>
<div class="form-group">
      <label for="usr">Notes</label>
      <input type="text" class="form-control" name="Notes">
    </div>
<div class="form-group">
      <label for="usr">Follow-up Date</label>
      <input type="text" class="form-control" name="Fdate" value="<?php echo date(" Y-m-d H-i-s "); ?>">
    </div>
<div class="form-group">
      <label for="usr">Follow-up Notes</label>
      <input type="text" class="form-control" name="Fnotes">
    </div>
<div class="form-group">
      <label for="usr">Follow-up Meeting Date</label>
      <input type="text" class="form-control" name="FMdate" value="<?php echo date(" Y-m-d H-i-s "); ?>">
    </div>
<div class="form-group">
      <label for="usr">Follow-up Topic</label>
      <input type="text" class="form-control" name="Ftopic">
    </div>
<div class="form-group">
      <label for="usr">Sample App Name</label>
      <input type="text" class="form-control" name="SAname">
    </div>
<div class="form-group">
      <label for="usr">Sample Buttons</label>
      <input type="text" class="form-control" name="Sbuttons">
    </div>
<div class="form-group">
      <label for="usr">Sample Notes</label>
      <input type="text" class="form-control" name="Snotes">
    </div>
<button type="submit" class="btn btn-success"name="submit" value="submit" >submit</button>


  </form>
</div>

</body>
</html>


