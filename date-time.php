<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DATE TIME MANUPILATION</title>
</head>
<body>
   <h1>LEarning  Date & Time Manupilation</h1>
   <?php date_default_timezone_set('Africa/Na irobi'); ?>
   <?php
    $datenow = getdate();
    //mday  to print day 
    //mon to print mon
    //year to print year
    echo "Toady's Date: " .$datenow['mday']."th-".$datenow['mon']."-".$datenow['year']. "<br/>";
 
    print date("d-m-y")."<br>";
    print date( "G.i:s a",time()) ."<br/>";

    print date("j  of  F Y, \a\\t g.i a",time());


    
    ?>
    
</body>
</html>