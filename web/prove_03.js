function revealMessage(theClass){
document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
}

function hideMessage(theClass){
document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
}

function validateInput(input, theClass){
var pattern = /\w|\d/;
var result = pattern.test(input);
if(result)
  document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
else 
  document.getElementsByClassName(theClass)[0].style.visibility = "visible";
}

function validateState(state, stateClass){
var pattern = /^\s*(A[KLRZ]|C[AOT]|D[E]|F[L]|G[A]|H[I]|I[ADLN]|K[SY]|L[A]|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[A]|R[I]|S[CD]|T[NX]|U[T]|V[AT]|W[AIVY])\s*$/;
var result = pattern.test(state);
if (result)
    document.getElementsByClassName(stateClass)[0].style.visibility = 'hidden';
else
    document.getElementsByClassName(stateClass)[0].style.visibility = "visible";
}

function validateZip(zip, zipClass){
var pattern = /^\d{5}$/;
var result = pattern.test(zip);
if (result)
    document.getElementsByClassName(zipClass)[0].style.visibility = 'hidden';
else
    document.getElementsByClassName(zipClass)[0].style.visibility = "visible";
}

function submitForm(){
alert("Your order has be submitted, thank you for your business")
}

function clearForm(form){
var form_elements = form.elements;
for(i=0; i<frm_elements.length; i++)
{
  field_type = frm_elements[i].type.toLowerCase();
  switch(field_type)
  {
    case "text" :
    frm_elements[i].value = "";
    break;
    case "checkbox":
    if (frm_elements[i].checked)
    {
    frm_elements[i].checked = false;
    }
    break;
  }
  
}
}

function addCart(itemName, itemPrice, itemNum) { 
    var formData = {itemName:itemName,itemPrice:itemPrice, itemNum:itemNum, itemQty:1};  
 
    $.post({ 
        url : "fillCart.php",
        data : formData,
    }).done(function(data) { 
        //cartCount = data;
        //$('#counter').html(cartCount);
        console.log('Cart item posted');
    }).fail(function(data) { 
        console.log('Cart item post failure');
    }).always(function(data) { 
        console.log('always');
    });
}

function emptyCart(num){
    var formData = {num:num};


    $.post({
        url : "emptyCart.php",
        data : formData,
    }).done(function(data) { 
        console.log('item number to be deleted posted');
        console.log(formData);
    }).fail(function(data) { 
        console.log('Cart item delete post failure');
    }).always(function(data) { 
        console.log('always');
    });
}

