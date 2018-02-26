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
        
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'translate');
    }
    </script>
        
         <div class="navbar"> 
        <h1 class="mainheading">IS1113 Project: 117326611</h1>
        <br/>
        <br/>
          <div class="dropdown">
        <a href="../cv/cv_page1.html" class="btn">Curriculum Vitae</a>
        <br/>
          <div class="dropdown-content">
            <a href="../cv/cv_page1.html">Personal Details</a>
            <a href="../cv/cv_page2.html">Education</a>
            <a href="../cv/cv_page3.html">Work</a>
         </div>
   </div>  
      	
        	
    <div class="dropdown">
        <a href="../interests/sports.html" class="btn">Interests</a>
        <br/>
         <div class="dropdown-content">
            <a href="../interests/sports.html.html">Sports</a>
            <a href="../interests/music.html">Music</a>
            <a href="../interests/travel.html">Travel</a>
            <a href="../interests/cloudservices.html">Cloud Services</a>
        </div>
    </div>    
        	 
      	   
        	    
    <a href="ebushomepage.html" class="btn">E-Business</a>
       </div>
        
        <div id="translate">
        <div id="receipt">
            <h4>Receipt</h4>
         
            <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "VAT is " . $_SESSION["vat"]; ?>
            <br/>
           <?php echo "Discount is " . $_SESSION["discount"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
         </div> 
         </div>
    </body>
    
      <footer>
        <a href="https://ucc.ie">
            <img src="uccLogo.png"/>
        </a>
        <a id="cubs" href="https://www.cubsucc.com/">
            <img src="cubsLogo.png"/>
        </a>
    </footer>
    
</html>