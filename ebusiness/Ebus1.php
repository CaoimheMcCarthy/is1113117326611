<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Select Product</title>
        
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  
<style>
    .pagecontent{
       
       margin-left: 40%;
    }
    
    img{
        height: 50px;
        width: auto
    }
    
    .navbar{
       padding-top:0;
    }
    
</style>  
  
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
    <div class="navbtns">   
    <a href="../homepage.html" class="btn">Home</a>
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
            <a href="../interests/sports.html">Sports/Music</a>
            <a href="../interests/travel.html">Travel</a>
            <a href="../interests/cloudservices.html">Cloud Services</a>
        </div>
    </div> 
     <a href="ebushomepage.html" class="btn">E-Business</a>
    </div> 
    </div>
    <div class="pagecontent">
        <div id="translate"> 
        <h4>Select a Product</h4>
 
        
        <form method ="POST" action ="Ebus2.php">
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              <img src="../images/salesforce.png"/>  SalesForce @ &euro;100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
             <img src="../images/aws.png"/>   AWS @ &euro;300 
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
               <img src="../images/gmail.png"/> Gmail @ &euro;400
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               <img src="../images/cloud9.png"/> Cloud 9 @ &euro;200
            </label>
            
            <br/>
            <br/>
            
            <label for="item">
                Product Selected:
                <input type="text" id="item" name="item" value="please select" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            
            <label for="VAT">
                VAT: 
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="discount">
                Discount: 
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="total">
                Total: 
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
        
            <br/>
            <br/>
            
            <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        <br/>
       </div>
      </div>
      <br/>
      <br/>
      
    </body>
    
    <footer align="center">
        <a id="f1" href="https://ucc.ie">
            <img src="../images/uccLogo.png"/>
        </a>
        <p id="f2">Copyright &copy; Caoimhe McCarthy, 2018</p>
        <a id="f3" href="https://www.cubsucc.com/">
            <img src="../images/cubsLogo.png"/>
        </a>
    </footer>
    
</html>