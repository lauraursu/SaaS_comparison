document.getElementById('next1').setAttribute("disabled", null); // next1 is the first Next button on the survey, DISABLE it

var nrAttendJs = document.getElementById("nrAttend");
var show;
var show2;

document.getElementById("nrHosts").addEventListener('change', (event) => { //on change of the nrHosts field
    if (document.getElementById("nrHosts").value.length != 0) { //check if its not empty

       // document.getElementById('next1').removeAttribute("disabled"); // enable button
       show=true;
       console.log(show);
        console.log("here");
        document.getElementById("hostError").innerHTML = "";

    } else {
       // document.getElementById('next1').setAttribute("disabled", null); //disable button (in case we change it and its not a number anymore after first check)
        show=false;
        console.log(show);
       document.getElementById("hostError").innerHTML = "It is not a number!";
    }

    if (typeof document.getElementById("nrHosts").value == 'number ') {
        document.getElementById("hostError").innerHTML = "It is not a number!"; // why does it work??????????

    }

    // console.log(typeof document.getElementById("nrHosts").value);

})


document.getElementById("nrAttend").addEventListener('change', (event) => {
if ( document.getElementById("nrAttend").value.length != 0 ) {
    show2 = true; 
    console.log(show2);

} else {
    show2 = false;
    console.log(show2);

}
})

document.getElementById("nrAttend").addEventListener('change', (event) => {
if (show && show2 ){
    console.log("here4");

    document.getElementById('next1').removeAttribute("disabled");
} else {
    document.getElementById('next1').setAttribute("disabled", null);
}
})

document.getElementById("nrHosts").addEventListener('change', (event) => {
    if (show && show2 ){
        console.log("here7");
    
        document.getElementById('next1').removeAttribute("disabled");
    } else {
        document.getElementById('next1').setAttribute("disabled", null);
    }
    })