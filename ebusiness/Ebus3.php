<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
      
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
        <div class="pagecontent">
        <div id="translate">
        <div id="receipt" style="text-align:center">
            <h2 style="background-color: grey; color: white">Cloud Services Receipt</h2>
         
            <?php
            //Echo session variables that were set on previous page
            echo "You have successfully purchased:" . $_SESSION["item"]; ?>
            <br/>
            <br/>
            <?php echo "Subtotal: &euro;". $_SESSION["subtotal"]; ?>
            <br/>
            <br/>
           <?php echo "Discount: &euro;". $_SESSION["discount"]; ?>
            <br/>
            <br/>
           <?php echo "VAT: &euro; ". $_SESSION["VAT"]; ?>
            <br/>
            <br/>
            <?php echo "Total: &euro;". $_SESSION["total"] . "."; ?>
            `
            <br/>
            <br/>
            <button onclick="printReceipt()">Print receipt</button>

            <script>
            function printReceipt() {
            window.print();
            }
            </script>

         </div> 
         </div>
         </div>
    </body>
    
      <footer align="center">
        <a id="f1" href="https://ucc.ie">
            <img src="uccLogo.png"/>
        </a>
        <p id="f2">Copyright &copy; Caoimhe McCarthy, 2018</p>
        <a id="f3" href="https://www.cubsucc.com/">
            <img src="cubsLogo.png"/>
        </a>
    </footer>
    
</html>