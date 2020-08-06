<?php
   session_start();
   require("connect.php");

   if(isset($_POST['announcementButton'])){
       $announcement = mysqli_real_escape_string($conn, $_POST['announcement']);
       $today = date("Y-m-d h:i:sa");
       $sql = "INSERT INTO home( home_announcement, home_announcement_datetime) VALUES ('$announcement','$today')";
       mysqli_query($conn,$sql);
   }

   if(isset($_POST['delete'])){
       $sql = "DELETE FROM home ORDER BY home_announcement_datetime ASC LIMIT 1";
       mysqli_query($conn,$sql);
   }
    if(isset($_POST['programupdate'])){

        for($x=1;$x<6;$x++){

       $sql = "UPDATE program SET program_day1 = '".mysqli_real_escape_string($conn, $_POST['bulking_day1_'.$x.''])."',program_day2='".mysqli_real_escape_string($conn, $_POST['bulking_day2_'.$x.''])."',program_day3='".mysqli_real_escape_string($conn, $_POST['bulking_day4_'.$x.''])."',program_day4='".mysqli_real_escape_string($conn, $_POST['bulking_day4_'.$x.''])."',program_day5='".mysqli_real_escape_string($conn, $_POST['bulking_day5_'.$x.''])."' WHERE program_number = {$x}";
       mysqli_query($conn,$sql);
        }

        for($x=1;$x<6;$x++){
       $sql = "UPDATE program SET program_day1 = '".mysqli_real_escape_string($conn, $_POST['cutting_day1_'.$x.''])."',program_day2='".mysqli_real_escape_string($conn, $_POST['cutting_day2_'.$x.''])."',program_day3='".mysqli_real_escape_string($conn, $_POST['cutting_day4_'.$x.''])."',program_day4='".mysqli_real_escape_string($conn, $_POST['cutting_day4_'.$x.''])."',program_day5='".mysqli_real_escape_string($conn, $_POST['cutting_day5_'.$x.''])."' WHERE program_number = {$x} + 5";
       mysqli_query($conn,$sql);
        }

        for($x=1;$x<6;$x++){
       $sql = "UPDATE program SET program_day1 = '".mysqli_real_escape_string($conn, $_POST['cardio_day1_'.$x.''])."',program_day2='".mysqli_real_escape_string($conn, $_POST['cardio_day2_'.$x.''])."',program_day3='".mysqli_real_escape_string($conn, $_POST['cardio_day4_'.$x.''])."',program_day4='".mysqli_real_escape_string($conn, $_POST['cardio_day4_'.$x.''])."',program_day5='".mysqli_real_escape_string($conn, $_POST['cardio_day5_'.$x.''])."' WHERE program_number = {$x} + 10";
       mysqli_query($conn,$sql);
        }

        for($x=1;$x<6;$x++){
       $sql = "UPDATE program SET program_day1 = '".mysqli_real_escape_string($conn, $_POST['closecombat_day1_'.$x.''])."',program_day2='".mysqli_real_escape_string($conn, $_POST['closecombat_day2_'.$x.''])."',program_day3='".mysqli_real_escape_string($conn, $_POST['closecombat_day4_'.$x.''])."',program_day4='".mysqli_real_escape_string($conn, $_POST['closecombat_day4_'.$x.''])."',program_day5='".mysqli_real_escape_string($conn, $_POST['closecombat_day5_'.$x.''])."' WHERE program_number = {$x} + 15";
       mysqli_query($conn,$sql);
        }
   }

   ?>
    <html>

    <head>
        <title>Admin Home | NIM</title>
        <link rel="icon" href="images/logo_icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/w3.css" rel="stylesheet">
        <link href="fonts/Montserrat-Regular.otf" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Montserrat", sans-serif
            }
            
            .w3-row-padding img {
                margin-bottom: 12px
            }
            
            .w3-sidebar {
                width: 120px;
                background: #222;
            }
            
            #main {
                margin-left: 120px
            }
        </style>
    </head>

    <body class="w3-yellow">
        <nav class="w3-sidebar w3-bar-block w3-small w3-center">
            <img style="width:100%" src="images/nrm.png">
            <a class="w3-bar-item w3-button w3-padding-large w3-yellow" href="#">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>HOME</p>
            </a>
            <a class="w3-bar-item w3-button w3-padding-large w3-yellow" href="registrars1.php">
                <i class="fa fa-users w3-xxlarge"></i>
                <p>MANAGE
                    <br>REGISTRARS</p></a>
                    <a class="w3-bar-item w3-button w3-padding-large w3-hover-black" href="registrar.php">
                <i class="fa fa-user w3-xxlarge"></i>
                <p>PROFILE</p>
            </a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hover-black" href="program.html">
                <i class="fa fa-th-list w3-xxlarge"></i>
                <p>PROGRAMS</p>
            </a>
            <a class="w3-bar-item w3-button w3-padding-large w3-hover-black" href="contact.html">
                <i class="fa fa-envelope w3-xxlarge"></i>
                <p>CONTACT</p>
            </a>
  
            <a class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="document.getElementById('logout').style.display='block';">
                <i class="fa fa-sign-out-alt w3-xxlarge"></i>
                <p>LOG OUT</p>
            </a>
        </nav>
        <div class="w3-padding-large" id="main">
            <header class="w3-container w3-padding-32 w3-center w3-yellow" id="home">
                <h1 class="w3-jumbo"><strong>NIM</strong><i>S</i></h1>
                <h1 style='color:grey'>NRM INFORMATION MANAGEMENT SYSTEM</h1>
                <p> stable release 1.0.00 | Developed by <b>Toskin Gregory &&  Mwebaze Norbert</b></p>
            </header>
            <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
                <div class="w3-section w3-third">
                    <span class="w3-xlarge"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-yellow w3-section w3-padding" ><span class = 'fa fa-plus'></span><strong> Post Results</strong></button>
                    </span>
                    <br>Post Parish Declaration of Results.
                </div>
                <div class="w3-section w3-third">
                    <span class="w3-xlarge"><button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-yellow w3-section w3-padding" ><span class = 'fa fa-th-list'></span><strong> Edit Registrars</strong></button>
                    </span>
                    <br> Edit Registrars in your Parish.
                </div>
                <div id="id01" class="w3-modal ">
                    <div class="w3-modal-content w3-animate-top" style="max-width:600px">
                        <div class="w3-center">
                            <br>
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-black w3-display-topright" style='color:black'>&times;</span>
                        </div>
                        <div class="w3-container" style="color:black">
                            <h1><strong>Post Declaration of Results</strong></h1>
                            <form method="POST" action="admin_home.html">
                                <input class="w3-input w3-border" type="text" placeholder="Enter new announcement" name="announcement" required>
                                <button class="w3-button w3-yellow w3-section w3-padding" name='announcementButton'>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="id03" class="w3-modal ">
                    <div class="w3-modal-content w3-animate-top" style="max-width:600px">
                        <div class="w3-center">
                            <br>
                            <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-black w3-display-topright" style='color:black'>&times;</span>
                        </div>
                        <div class="w3-container" style="color:black">
                            <h2>Remove the oldest announcement?</h2>
                            <form method="POST" action="admin_home.html">
                                <button class="w3-button w3-yellow w3-section w3-padding" name='delete'>Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="id02" class="w3-modal ">
                    <div class="w3-modal-content w3-animate-top" style="max-width:600px">
                        <div class="w3-center">
                            <br>
                            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-black w3-display-topright" style='color:black'>&times;</span>
                        </div>
                        <div class="w3-container" style="color:black">
                            <h2><strong>Edit Registrars</strong></h2>
                            <div class="w3-bar w3-yellow">
                               
                                
                                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Cardio')">Village</button>
                            </div>
                            <form method="POST" action="admin_home.html">

                                <div id="Bulking" class="w3-container w3-border city">
                                    <h2>Nakaseke North County</h2>
                                    <p>Kikamulo</p>
                                    <?php

                              $ctr = 1;

                              $query = "SELECT program_day1 FROM program WHERE program_name = 'bulking'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day1'].'" name="bulking_day1_'.$ctr++.'" required>');
                              }

                            ?>
                                        <p>Kinoni</p>
                                        <?php 

                              $ctr = 1;

                              $query = "SELECT program_day2 FROM program WHERE program_name = 'bulking'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day2'].'" name="bulking_day2_'.$ctr++.'" required>');
                              }

                            ?>
                                            <p>Kinyogoga</p>
                                            <?php 

                              $ctr = 1;

                              $query = "SELECT program_day3 FROM program WHERE program_name = 'bulking'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day3'].'" name="bulking_day3_'.$ctr++.'"  required>');
                              }

                            ?>
                                                <p>Kitto</p>
                                                <?php 

                              $ctr = 1;

                              $query = "SELECT program_day4 FROM program WHERE program_name = 'bulking'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day4'].'" name="bulking_day4_'.$ctr++.'"  required>');
                              }

                            ?>
                                                    <p>KIWOKO TOWN COUNCIL
</p>
                                                    <?php 

                              $ctr = 1;

                              $query = "SELECT program_day5 FROM program WHERE program_name = 'bulking'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day5'].'" name="bulking_day5_'.$ctr++.'" required>');
                              }

                            ?>
                                </div>

                                <div id="Cutting" class="w3-container w3-border city" style="display:none">
                                    <h2>Nakaseke North County</h2>
                                    <p>Kamuli (Musale)</p>
                                    <?php

                              $ctr = 1;

                              $query = "SELECT program_day1 FROM program WHERE program_name = 'cutting'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day1'].'" name="cutting_day1_'.$ctr++.'" required>');
                              }

                            ?>
                                        <p>Kapeke</p>
                                        <?php 

                              $ctr = 1;

                              $query = "SELECT program_day2 FROM program WHERE program_name = 'cutting'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day2'].'" name="cutting_day2_'.$ctr++.'" required>');
                              }

                            ?>
                                            <p>Kibosse</p>
                                            <?php 

                              $ctr = 1;

                              $query = "SELECT program_day3 FROM program WHERE program_name = 'cutting'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day3'].'" name="cutting_day3_'.$ctr++.'"  required>');
                              }

                            ?>
                                                <p>Luteete</p>
                                                <?php 

                              $ctr = 1;

                              $query = "SELECT program_day4 FROM program WHERE program_name = 'cutting'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day4'].'" name="cutting_day4_'.$ctr++.'"  required>');
                              }

                            ?>
                                                    <p>Magoma</p>
                                                    <?php 

                              $ctr = 1;

                              $query = "SELECT program_day5 FROM program WHERE program_name = 'cutting'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day5'].'" name="cutting_day5_'.$ctr++.'" required>');
                              }

                            ?>
                                </div>

                                <div id="Cardio" class="w3-container w3-border city" style="display:none">
                                    <h2>Village Registrars</h2>
                                    <p>Kamuli (Musale)</p>
                                    <?php

                              $ctr = 1;

                              $query = "SELECT program_day1 FROM program WHERE program_name = 'cardio'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day1'].'" name="cardio_day1_'.$ctr++.'" required>');
                              }

                            ?>
                                        <p>Kapeke</p>
                                        <?php 

                              $ctr = 1;

                              $query = "SELECT program_day2 FROM program WHERE program_name = 'cardio'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day2'].'" name="cardio_day2_'.$ctr++.'" required>');
                              }

                            ?>
                                            <p>Kibosse</p>
                                            <?php 

                              $ctr = 1;

                              $query = "SELECT program_day3 FROM program WHERE program_name = 'cardio'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day3'].'" name="cardio_day3_'.$ctr++.'"  required>');
                              }

                            ?>
                                                <p>Luteete</p>
                                                <?php 

                              $ctr = 1;

                              $query = "SELECT program_day4 FROM program WHERE program_name = 'cardio'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day4'].'" name="cardio_day4_'.$ctr++.'"  required>');
                              }

                            ?>
                                                    <p>Magoma</p>
                                                    <?php 

                              $ctr = 1;

                              $query = "SELECT program_day5 FROM program WHERE program_name = 'cardio'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day5'].'" name="cardio_day5_'.$ctr++.'" required>');
                              }

                            ?>
                                </div>

                                <div id="Closecombat" class="w3-container w3-border city" style="display:none">
                                    <h2>Patroitism</h2>
                                    <p>Day 1</p>
                                    <?php

                              $ctr = 1;

                              $query = "SELECT program_day1 FROM program WHERE program_name = 'closecombat'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day1'].'" name="closecombat_day1_'.$ctr++.'" required>');
                              }

                            ?>
                                        <p>Day 2</p>
                                        <?php 

                              $ctr = 1;

                              $query = "SELECT program_day2 FROM program WHERE program_name = 'closecombat'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day2'].'" name="closecombat_day2_'.$ctr++.'" required>');
                              }

                            ?>
                                            <p>Day 3</p>
                                            <?php 

                              $ctr = 1;

                              $query = "SELECT program_day3 FROM program WHERE program_name = 'closecombat'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day3'].'" name="closecombat_day3_'.$ctr++.'"  required>');
                              }

                            ?>
                                                <p>Day 4</p>
                                                <?php 

                              $ctr = 1;

                              $query = "SELECT program_day4 FROM program WHERE program_name = 'closecombat'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day4'].'" name="closecombat_day4_'.$ctr++.'"  required>');
                              }

                            ?>
                                                    <p>Day 5</p>
                                                    <?php 

                              $ctr = 1;

                              $query = "SELECT program_day5 FROM program WHERE program_name = 'closecombat'";
                              $ret = mysqli_query($conn, $query);

                              while($row = mysqli_fetch_assoc($ret)){
                                  echo('<input class="w3-input w3-border" type="text" value="'.$row['program_day5'].'" name="closecombat_day5_'.$ctr++.'" required>');
                              }

                            ?>
                                </div>

                                <button class="w3-button w3-yellow w3-section w3-padding" name='programupdate'>Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <footer class="w3-center"> Copyright © 2013-2020 The  Nrm. All rights reserved.</footer>
        </div>
        <div id="logout" class="w3-modal w3-center">
            <div class="w3-modal-content w3-animate-top" style="max-width:600px">
                <div class="w3-center">
                    <br>
                    <span onclick="document.getElementById('logout').style.display='none'" class="w3-button w3-xlarge w3-hover-black w3-display-topright" style='color:black'>&times;</span>
                </div>
                <div class="w3-container" style="color:black">
                    <h2>Are you sure you want to logout?</h2>
                    <form method="POST" action="logout.php">
                        <button class="w3-button w3-yellow w3-section w3-padding" name='delete'>Log out</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-dark-grey";
        }
    </script>

    </html>