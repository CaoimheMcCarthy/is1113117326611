<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
         <link rel="stylesheet" href="ebus_pages.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  
<style>
    .pagecontent{
        padding-top: 200px;
       margin-left: 40%;
    }
    
    img{
        height: 50px;
        width: auto
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
        <h4>Select a Product</h4>
 
        
        <form method ="POST" action ="Ebus2.php">
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              <img src="https://c1.sfdcstatic.com/content/dam/web/en_is/www/images/logo/logo-company.png"/>  SalesForce @ &euro;100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
             <img src="data:image/png;base64,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"/>   AWS @ &euro;300 
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
               <img src="data:image/jpeg;base64,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"/> Gmail @ &euro;400
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnVNz3XvBSbEc3byf6a5BDd4R1b8qkmbTSHHfdqkveLqrp9PDd"/> Cloud 9 @ &euro;200
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
    
    <footer>
        <a href="https://ucc.ie">
            <img src="uccLogo.png"/>
        </a>
        <a href="https://www.cubsucc.com/">
            <img src="cubsLogo.png"/>
        </a>
    </footer>
    
</html>