document.getElementById('next1').setAttribute("disabled", null); // next1 is the first Next button on the survey, DISABLE it

var nrAttendJs = document.getElementById("nrAttend");
var show;
var show2;

document.getElementById("nrHosts").addEventListener('click', (event) => {       //so it fires up on the first one too
var n = document.getElementById("nrHosts").value;
var number1 = parseInt(n, 10);
if (isNaN(number1) ){
    document.getElementById("hostError").innerHTML = "It is not a number!";
}else document.getElementById("hostError").innerHTML = "";
   
})

nrAttendJs.addEventListener('click', (event) => {
    var number2 = parseInt(nrAttendJs.value, 10);
    if (isNaN(number2)){
        document.getElementById("attendError").innerHTML = "It is not a number!";
    }else document.getElementById("attendError").innerHTML = "";
    
})

document.getElementById("nrHosts").addEventListener('change', (event) => { //on change of the nrHosts field
    if (document.getElementById("nrHosts").value.length != 0) { //check if its not empty
       show = true;
    } else {
        show = false;
         document.getElementsByClassName("formError").innerHTML = "It is not a number!";

    }

var n = document.getElementById("nrHosts").value;
var number1 = parseInt(n, 10);
if (isNaN(number1) ){
    document.getElementById("hostError").innerHTML = "It is not a number!";
}else document.getElementById("hostError").innerHTML = "";
   
})

document.getElementById("nrAttend").addEventListener('change', (event) => {
    if (document.getElementById("nrAttend").value.length != 0) {
        show2 = true;
    } else {
        show2 = false;
        document.getElementsByClassName("formError").innerHTML = "It is not a number!";

    }
    var number2 = parseInt(nrAttendJs.value, 10);
    if (isNaN(number2)){
        document.getElementById("attendError").innerHTML = "It is not a number!";
    }else document.getElementById("attendError").innerHTML = "";
})

document.getElementById("nrAttend").addEventListener('change', (event) => {
    if (show && show2) {

        document.getElementById('next1').removeAttribute("disabled");
    } else {
        document.getElementById('next1').setAttribute("disabled", null);
    }
})

document.getElementById("nrHosts").addEventListener('change', (event) => {
    if (show && show2) {

        document.getElementById('next1').removeAttribute("disabled");
    } else {
        document.getElementById('next1').setAttribute("disabled", null);
    }
})