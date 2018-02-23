<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <a href="cv/cv_page1.html" class="btn">Curriculum Vitae</a>
        <br/>
          <div class="dropdown-content">
            <a href="cv/cv_page1.html">Personal Details</a>
            <a href="cv/cv_page2.html">Education</a>
            <a href="cv/cv_page3.html">Work</a>
         </div>
   </div>  
      	
        	
    <div class="dropdown">
        <a href="interests/sports.html" class="btn">Interests</a>
        <br/>
         <div class="dropdown-content">
            <a href="interests/sports.html.html">Sports</a>
            <a href="interests/music.html">Music</a>
            <a href="interests/travel.html">Travel</a>
            <a href="interests/cloudservices.html">Cloud Services</a>
        </div>
    </div>    
        	 
      	   
        	    
    <a href="ebusiness/ebushomepage.html" class="btn">E-Business</a>
       </div>
        
        <div id="translate">
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4" required>
                <br/>
                <br/>
                <label for="user_name">
                    Name:
                </label>
                    
                <input type="text" id="user_name" placeholder="Name" required>
                <br/>
                <br/>
                <label for="user_email">
                    Email:
                </label>
                
                <input type="text" id="user_email" placeholder="email" required>
                <br/>
                <br/> 
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["subtotal"] = $_POST["subotal"];
        $_SESSION["VAT"] = $_POST["VAT"];
        $_SESSION["discount"] = $_POST["discount"];
        $_SESSION["total"] = $_POST["total"];
        ?>
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