var form = document.querySelector('#notebook-form');
var button = document.querySelector('#cart-button');
var cartBlock = document.querySelector('#cart-block');

function addItem(event){
    event.preventDefault();
    var data = document.getElementById('cartItem');
    cartBlock.innerHTML+=data;
}
button.addEventListener('click', addItem);