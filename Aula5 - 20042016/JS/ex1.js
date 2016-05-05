/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
    greeting = 'Good evening!';
} else if (hourNow > 12) {
    greeting = 'Good afternoon!';
} else if (hourNow > 6) {
    greeting = 'Good morning!';
} else {
    greeting = 'Welcome!';
}

document.write
('<h3>' + greeting + '</h3>');

function sayHello(teste){
    window.alert("Testando " + teste);
    
}
