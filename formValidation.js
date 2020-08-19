document.getElementById('next1').setAttribute("disabled", null);        // next1 is the first Next button on the survey, DISABLE it

var nrAttendJs = document.getElementById("nrAttend");

document.getElementById("nrHosts").addEventListener('change', (event)=> {       //on change of the nrHosts field
   if (document.getElementById("nrHosts").value.length != 0 ){                  //check if its not empty

    document.getElementById('next1').removeAttribute("disabled");                  // enable button
    console.log("here");
    document.getElementById("hostError").innerHTML= "";
    
   } else {document.getElementById('next1').setAttribute("disabled", null);         //disable button (in case we change it and its not a number anymore after first check)
    document.getElementById("hostError").innerHTML= "It is not a number!";
   }

   if (typeof document.getElementById("nrHosts").value == 'number '){
    document.getElementById("hostError").innerHTML= "It is not a number!";          // why does it work??????????

   }

   console.log(typeof document.getElementById("nrHosts").value);

})


// nrAttendJs.addEventListener('change', (event) => {
//     if(nrAttendJs.length != 0 ){

//     }
// })

