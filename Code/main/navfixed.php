 <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container-fluid">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="#"><b>HOSTEL PORTAL</b></a>
       <div class="nav-collapse collapse">
         <ul class="nav pull-right">
           <li><a>
               <font color="#57bc90"><i class="icon-user icon-large"></i></font> Welcome : <strong> <?php echo $_SESSION['SESS_LAST_NAME']; ?></strong>
             </a></li>
           <li><a>
               <font color="orange"><i class="icon-calendar icon-large"></i></font>
               <?php
                $Today = date('y:m:d', time());
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>

             </a></li>
           <li><a href="../index.php">
               <font color="red"><i class="icon-off icon-large"></i></font> Log Out
             </a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>