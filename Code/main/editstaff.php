<html>

<head>
  <title>
    HOSTEL :: STAFFS
  </title>

  <?php
  require_once('auth.php');
  ?>
  <link href="css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
      background-color: #DDC6B6;
    }

    .sidebar-nav {
      padding: 90px 10px;
    }
  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

  <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>
</head>
<?php
function createRandomPassword()
{
  $chars = "003232303232023232023456789";
  srand((float)microtime() * 1000000);
  $i = 0;
  $pass = '';
  while ($i <= 7) {

    $num = rand() % 33;

    $tmp = substr($chars, $num, 1);

    $pass = $pass . $tmp;

    $i++;
  }
  return $pass;
}
$finalcode = 'RS-' . createRandomPassword();
?>

<script>
  function sum() {
    var txtFirstNumberValue = document.getElementById('txt1').value;
    var txtSecondNumberValue = document.getElementById('txt2').value;
    var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
      document.getElementById('txt3').value = result;

    }

    var txtFirstNumberValue = document.getElementById('txt11').value;
    var result = parseInt(txtFirstNumberValue);
    if (!isNaN(result)) {
      document.getElementById('txt22').value = result;
    }

    var txtFirstNumberValue = document.getElementById('txt11').value;
    var txtSecondNumberValue = document.getElementById('txt33').value;
    var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
      document.getElementById('txt55').value = result;

    }

    var txtFirstNumberValue = document.getElementById('txt4').value;
    var result = parseInt(txtFirstNumberValue);
    if (!isNaN(result)) {
      document.getElementById('txt5').value = result;
    }

  }
</script>


<script language="javascript" type="text/javascript">
  <!-- Begin
  var timerID = null;
  var timerRunning = false;

  function stopclock() {
    if (timerRunning)
      clearTimeout(timerID);
    timerRunning = false;
  }

  function showtime() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds()
    var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
    if (timeValue == "0") timeValue = 12;
    timeValue += ((minutes < 10) ? ":0" : ":") + minutes
    timeValue += ((seconds < 10) ? ":0" : ":") + seconds
    timeValue += (hours >= 12) ? " P.M." : " A.M."
    document.clock.face.value = timeValue;
    timerID = setTimeout("showtime()", 1000);
    timerRunning = true;
  }

  function startclock() {
    stopclock();
    showtime();
  }
  window.onload = startclock;
 
  -->
</SCRIPT>

<body>
  <?php include('navfixed.php'); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
        <div class="well sidebar-nav">

          <ul class="nav nav-list">
            <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
            <li class="active"><a href="staff.php"><i class="icon-group icon-2x"></i>Manage Staffs</a> </li>
            <li><a href="addstaff.php"><i class="icon-group icon-2x"></i> Add Staff</a> </li>
            <br><br>
          </ul>

        </div>
      </div>
      <div class="span10">
        <div class="contentheader">
          <i class="icon-table"></i> Edit Staff Information
        </div>
        <ul class="breadcrumb">
          <li><a href="staff.php">Dashboard</a></li> /
          <li>Hostel Staffs</li> /
          <li>Manage Staffs</li> /
          <li class="active">Edit Staff</li>
        </ul>


        <div style="margin-top: -19px; margin-bottom: 21px;">
          <a href="staff.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
          <center><?php
                  include('../connect.php');
                  $id = $_GET['id'];
                  $result = $db->prepare("SELECT * FROM staff WHERE id= :staffid");
                  $result->bindParam(':staffid', $id);
                  $result->execute();
                  for ($i = 0; $row = $result->fetch(); $i++) {
                  ?>
              <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
              <form action="saveeditstaff.php" method="post" enctype="multipart/form-data">
                <center>
                  <h4><i class="icon-edit icon-large"></i> Edit Staff </h4>
                </center>
                <hr>
                <div id="ac">
                  <input type="hidden" name="memi" value="<?php echo $id; ?>" />

                  <span>Staff ID : </span><input type="text" style="width:265px; height:30px;" name="id" value="<?php echo $row['id']; ?>" Readonly Required /><br>
                  <span>Staff Name : </span><input type="text" style="width:265px; height:30px;" name="staffname" value="<?php echo $row['staffname']; ?>" Required /><br>
                  <span>Work : </span><input type="text" style="width:265px; height:30px;" name="work" value="<?php echo $row['work']; ?>" Required /><br>
                  <span>Date Of Joining : </span><input type="date" style="width:265px; height:30px;" name="doj" value="<?php echo $row['doj']; ?>" required /><br>
                  <span>Mobile No. : </span><input type="text" style="width:265px; height:30px;" name="mobile" value="<?php echo $row['mobile']; ?>" Required /><br>
                  <span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" value="<?php echo $row['address']; ?>" Required /><br>


                  <div>

                    <button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
                  </div>
                </div>
              </form>
            <?php
                  }
            ?>
          </center>

          <script src="js/jquery.js"></script>

</body>
<?php include('footer.php'); ?>

</html>