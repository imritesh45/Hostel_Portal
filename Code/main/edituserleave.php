<html>

<head>
    <title>
        HOSTEL :: EDIT LEAVE
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
    <!--sa poip up-->
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
    <?php include('navfixed1.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        <li><a href="user.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
                        <li class="active"><a href="userleave.php"><i class="icon-group icon-2x"></i> Manage Leave</a></li>
                        <li><a href="adduserleave.php"><i class="icon-user icon-2x"></i> Add Leave</a></li>

                        <br><br>


                    </ul>
                </div>
                
            </div>
        
            <div class="span10">
                <div class="contentheader">
                    <i class="icon-table"></i> Edit Leave
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li> /
                    <li>Leave Form</li> /
                    <li>Manage Leave</li>/
                    <li><a class="active">Edit Leave</a></li>
                </ul>


                <div style="margin-top: -19px; margin-bottom: 21px;">
                    <a href="userleave.php"><button class="btn btn-default btn-large" style=" margin-top: 19px;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
                    <center><?php
                            include('../connect.php');
                            $usn = $_GET['id'];
                            $result = $db->prepare("SELECT * FROM sleave WHERE usn= :leaveid");
                            $result->bindParam(':leaveid', $usn);
                            $result->execute();
                            for ($i = 0; $row = $result->fetch(); $i++) {
                            ?>
                            <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
                            <form action="saveedituserleave.php" method="post" enctype="multipart/form-data">

                                <hr>
                                <div id="ac">
                                    <input type="hidden" name="memi" value="<?php echo $usn; ?>" />
                                    <span>Student Name: </span><input type="text" style="width:265px; height:30px;" name="sname" value="<?php echo $row['sname']; ?>" Required /><br>
                                    <span>Student USN : </span><input type="text" style="width:265px; height:30px;" name="usn" value="<?php echo $row['usn']; ?>" readonly /><br>
                                    <span>Mobile No. : </span><input type="mobile" style="width:265px; height:30px;" name="mobile" value="<?php echo $row['mobile']; ?>" Required /><br>
                                    <span>Floor No. : </span><input type="number" style="width:265px; height:30px;" name="floor" value="<?php echo $row['floor']; ?>" Required /><br>
                                    <span>Room No. : </span><input type="number" style="width:265px; height:30px;" name="room" value="<?php echo $row['room']; ?>" Required /><br>
                                    <span>Departure Date : </span><input type="date" style="width:265px; height:30px;" name="departuredate" value="<?php echo $row['departuredate']; ?>" Required /><br>
                                    <span>Arrival Date : </span><input type="date" style="width:265px; height:30px;" name="arrivaldate" value="<?php echo $row['arrivaldate']; ?>" /><br>
                                    <span>Place Of Visiting : </span><input type="text" style="width:265px; height:30px;" name="place" value="<?php echo $row['place']; ?>" Required /><br>
                                    <span>Reason : </span><input type="text" style="width:265px; height:30px;" name="reason" value="<?php echo $row['reason']; ?>" Required /><br>


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
                    <script type="text/javascript">
                        $(function() {


                            $(".delbutton").click(function() {

                                var element = $(this);

                                var del_id = element.attr("id");

                                var info = 'id=' + del_id;
                                if (confirm("Sure you want to delete this Admin? There is NO undo!")) {

                                    $.ajax({
                                        type: "GET",
                                        url: "deleteadmin.php",
                                        data: info,
                                        success: function() {

                                        }
                                    });
                                    $(this).parents(".record").animate({
                                            backgroundColor: "#fbc7c7"
                                        }, "fast")
                                        .animate({
                                            opacity: "hide"
                                        }, "slow");

                                }

                                return false;

                            });

                        });
                    </script>
</body>
<?php include('footer.php'); ?>

</html>