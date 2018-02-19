<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />s
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
       
       <style type="text/css">
           
       </style>
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method ="POST" action ="Ebus2.php">
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro;100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ &euro;300 
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ &euro;400
            </label>
            
            <br/>
            
            <label for="cloud9">
                <inpt type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ &euro;200
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            
            <label for="VAT">
                VAT: 
                <input type="text" id="VAT" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="discount">
                Discount: 
                <input type="text" id="discount" value="0.00" readonly/>
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
       
        
    </body>
    
    <footer>
        <a href="https://ucc.ie">
            <img position ="static" src="https://www.cubsucc.com/images/layout/uccLogo.png"/>
        </a>
        <a href="https://www.cubsucc.com/">
            <img position = "absolute" src="https://www.cubsucc.com/images/layout/logo.png"/>
        </a>
    </footer>
    
</html>