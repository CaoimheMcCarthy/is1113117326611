/* global $ */

function calcSub(){
    
    var argSubTotal;
    var item;
    
    if(document.getElementById('salesforce').checked){
      argSubTotal = 100;
      item = "Salesforce";
    }
    
    else if(document.getElementById('gmail').checked){
        argSubTotal = 400;
        item = "Gmail";
    }
    
    else if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
        item = "Cloud 9";
    }
    
    else{
        argSubTotal = 300;
        item = "Amazon Web Services"
    }

    display(argSubTotal, item);
    calcDisVatTotal(argSubTotal, item);
}
   
   function calcDisVatTotal(parmSubTotal, item){
       
       var SubTotal;
       var discountAmt;
       var vatAmt;
       var totalAmt;
     
       SubTotal = parmSubTotal;
       
       discountAmt = SubTotal * 0.05;
       
       vatAmt = (SubTotal - discountAmt) * 0.1;
       
       totalAmt = (SubTotal + vatAmt) - discountAmt;
       
       item = item;
       
       display(SubTotal, discountAmt, vatAmt, totalAmt, item);
   }
   
   
  
    function display(parm1, parm2, parm3, parm4, parm5){
        
        document.getElementById("subtotal").value =  parm1;
        document.getElementById("discount").value = parm2;
        document.getElementById("VAT").value =  parm3;
        document.getElementById("total").value = parm4;
        document.getElementById("item").value = parm5;
        
        
        enablebtnProceed();
    }
    
    
    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }