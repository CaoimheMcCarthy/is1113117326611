<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="ebus_pages.css" type="text/css"/>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
    </head>
    <body>
        <div id="receipt">
            <h4>Receipt</h4>
         
            <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "VAT is " . $_SESSION["VAT"]; ?>
            <br/>
           <?php echo "Discount is " . $_SESSION["discount"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
         </div>   
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