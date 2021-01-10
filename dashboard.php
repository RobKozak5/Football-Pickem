<?php
// Includes & Requires
    require './View/header.php';
    
    require './View/side-nav.php';
// /Includes & Requires
?>
</div>

<!-- Page Center  -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <center><h3>Welcome to Football Pickem!</h3></center>
                <center><h1> The current server time is 
                    <?php
                        date_default_timezone_set('America/New_York');
                        $info = getdate();
                        $date = $info['mday'];
                        $month = $info['mon'];
                        $year = $info['year'];
                        $hour = $info['hours'];
                        $min = $info['minutes'];
                        $sec = $info['seconds'];

                        $current_date = "$date/$month/$year $hour:$min:$sec";
                        echo $current_date;
                    ?>
                </h1></center>
                <div class="ecommerce-widget">
                    <div id="rowGrid">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /Page Center  -->

<!-- Footer -->
    <?php require './View/footer.php';?>
<!-- /Footer -->

<?php require './Controller/dashboard-row-display.php';?>
</body>
</html>