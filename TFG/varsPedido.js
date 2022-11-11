let buttons = document.getElementById('buttonsM');
let formHome = document.getElementById('formHome');
let userPart = document.getElementById('userPart');
let pedidoPart = document.getElementById('pedidoPart');

let nombreField = document.getElementById('nombre');
let tlfField = document.getElementById('tlf');
let dirField = document.getElementById('dir');

let nombreLabel = document.getElementById('nombreLabel');
let tlfLabel = document.getElementById('tlfLabel');
let dirLabel = document.getElementById('dirLabel');

let nombreRegex = /^[a-zA-Z]{4,10}$/;
let tlfRegex = /^(\+[\d]{1,5})?[\d]{4,15}$/;

