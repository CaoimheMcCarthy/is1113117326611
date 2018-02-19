<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
    
      <footer>
        <a href="https://ucc.ie">
            <img position ="static" src="https://www.cubsucc.com/images/layout/uccLogo.png"/>
        </a>
        <a id="cubs" href="https://www.cubsucc.com/">
            <img position = "absolute" src="https://www.cubsucc.com/images/layout/logo.png"/>
        </a>
    </footer>
    
</html>