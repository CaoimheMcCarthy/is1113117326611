/* global $ */

function validateDetails(){
    
    var pin;
    var name;

    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    
    if (pin==""||name==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
  
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}