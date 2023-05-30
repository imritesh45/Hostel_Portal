<!DOCTYPE html>
<html>

<head>
	<title>PORTAL :: STUDENT DASHBOARD</title>
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style type="text/css">
		.sidebar-nav {
			padding: 90px 0;
		}
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
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
	<?php
	require_once('auth.php');
	?>
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
		// End 
		-->
	</SCRIPT>
</head>

<body style=" background:url(img/stdash5.jpg); background-size:cover;">
	<?php include('navfixed1.php'); ?>
	<?php
	$position = $_SESSION['SESS_EMAIL'];
	if ($position == 'tony') {
	?>

		<a href="../index.php">Logout</a>
	<?php
	}
	?>

	</div>
	<div>
		<div class="contentheader">
			<i class="icon-dashboard"></i> MENU
		</div>
		<ul class="breadcrumb">
			<li class="active"></li>
		</ul>
		<font style=" font:bold 44px 'Aleo'; color:#fff;">
			<center>STUDENT'S DASHBOARD</center>
		</font>
		<div id="mainmain">

			<a href="userstudents.php"><i class="icon-group icon-2x"></i><br><br> Students Info.</a>
			<a href="usermess.php"><i class="icon-group icon-2x"></i><br><br> Mess</a>
			<a href="userstaff.php"><i class="icon-group icon-2x"></i><br><br> Hostel Staffs</a><br>
			<a href="userleave.php"><i class="icon-group icon-2x"></i><br><br> Leave Form</a>
			<a href="usercomplaint.php"><i class="icon-group icon-2x"></i><br><br> Complaint Form</a>

			<div class="clearfix"></div>
		</div>
	</div>
	</div>
	</div>
</body>
<?php include('footer.php'); ?>

</html>