const productAmt = document.getElementById('product_total_amt');
const itemAmt = document.getElementById('itemval');
const itemAmt1 = document.getElementById('itemval1');
const shippingCharge = document.getElementById('shipping_charge');
const total_cart_amt = document.getElementById('total_cart_amt');
const error_trw = document.getElementById('error_trw');


console.log(itemAmt.innerHTML);
productAmt.innerHTML = parseInt(itemAmt.innerHTML) + parseInt(itemAmt1.innerHTML);
total_cart_amt.innerHTML = parseInt(productAmt.innerHTML) + parseInt(shippingCharge.innerHTML);


const decreaseNumber = (incdec, itemPrice1) =>{
    const itemVal = document.getElementById(incdec);
    const itemPrice = document.getElementById(itemPrice1);

    // console.log(itemVal.value);

    if(itemVal.value<=0){
        itemVal.value=0;
        alert("Negative value not allowed")
    }
    else{   
        itemVal.value = parseInt(itemVal.value) - 1;
        itemPrice.innerHTML = parseInt(itemPrice.innerHTML) - 15;
        productAmt.innerHTML = parseInt(productAmt.innerHTML) - 15;
        total_cart_amt.innerHTML = parseInt(productAmt.innerHTML) + parseInt(shippingCharge.innerHTML);
        itemVal.style.backgroundColor = 'white';
        itemVal.style.color = 'black';
    }
}

const increaseNumber = (incdec, itemPrice1) =>{
    const itemVal = document.getElementById(incdec);
    const itemPrice = document.getElementById(itemPrice1);

    // console.log(itemVal.value);

    if(itemVal.value>=5){
        itemVal.value=5;
        alert("Max 5 allowed");
        itemVal.style.backgroundColor = 'red';
        itemVal.style.color = 'white';

    }
    else{
        itemVal.value = parseInt(itemVal.value) + 1;
        itemPrice.innerHTML = parseInt(itemPrice.innerHTML) + 15;
        productAmt.innerHTML = parseInt(productAmt.innerHTML) + 15;

        total_cart_amt.innerHTML = parseInt(productAmt.innerHTML) + parseInt(shippingCharge.innerHTML);

    }
}

const discount_code = () =>{
    const discount_code1 = document.getElementById('discount_code1');
    
    if(discount_code1.value === 'abhi'){
        total_cart_amt.innerHTML = parseInt(total_cart_amt.innerHTML) - 15;
        error_trw.innerHTML = "Code applied successfully";
        error_trw.style.color = 'green';
    }
    else{
        error_trw.innerHTML = "Invalid code! Try again";
        error_trw.style.color = 'red';
    }
}