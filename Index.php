
<!DOCTYPE html>
<html>
    <head>
        <title>| Wunderground API |</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 60px;
            padding-bottom: 40px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    
    </head>
    
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="./">Aplikasi Perkiraan Cuaca</a>
                    <div class="nav-collapse collapse">
                    </div>
                </div>
            </div>
        </div>
        <div align=center>
            <form action="GetWeather.php" method="get">
            <input class="btnForm" type="submit" name="submit" value="Perkiraan Cuaca Saat Ini"/>
            </form>
        </div>
    </body>
</html>

<?php
date_default_timezone_set("Asia/Jakarta");

?>
<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 
<div style="text-align:center;">
    <b>Waktu :</b>
    <h2 id="clock">
</div>
</html>