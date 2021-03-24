<?php   

require 'includes/conexion.inc.php';

echo "Holaaaaaa";

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <!--META-->
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Gustavo Jaen Vidal">
        <meta name="copyright" content="Alma Ventures LLC">
        <meta name="contact" content="gustavojaen@almaventures.com"> 
        <meta name="description" content=""> 
        <meta name="keywords" content=""> 
        <meta name="robots" content="NoIndex, NoFollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">

        <!-- ESTILOS -->
        
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!-- Favicon -->
        <link rel="icon" tyoe="icon/png" href="favicon.png"> 


        
        <title>Alma Living | App Form</title>
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
    </head>
    <body>

        <div class="appContainer">
            <div class="contenidoForm">
                <div class="logoAppForm">
                    <img src="assets/rsc/img/alma-living-logo.png" alt="">
                </div>
               <div class="appFormContent">
                        <h1>MAINTENANCE REQUEST FORM</h1>
                        <p>We are sorry you are currently experiencing some issues at your rental. Please help us out by filling out the following form so that we can succesfully address your problem as fast as possible.</p>
                    </div>

               <div class="appFormContent ">
                  
                    <h2>CONTACT INFORMATION</h2>
                    <p>Please provide us with your contact information as estated in your lease.</p>
                    <form action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST" id="regForm">  
                    <input type=hidden name="orgid" value="00D3t000001Maf4">
                <input type=hidden name="retURL" value="http://">
                        <div class="formfield full">
                            <label for="name"><span>*</span>
                                <input type="text" placeholder="Contact Name..." oninput="this.className = ''" class="nameLastName" required id="name" name="name"maxlength="80" class="formFieldInput">

                            </label>
                 
                        </div>

                        <div class="formfield full">
                            <label for="email"><span>*</span>
                                <input type="email" placeholder="Email..." oninput="this.className = ''" required id="email" name="email" maxlength="80" class="formFieldInput">
                            </label>
                        </div>

                        <div class="formfield full">
                            <label for="phone"><span>*</span>
                                <input type="tel" placeholder="Mobile Number..." oninput="this.className = ''" required id="phone" name="phone" maxlength="40" class="formFieldInput">
                            </label>
                        </div>

                        <div class="formfield full">
                            <label for=""><span>*</span>
                                <input type="text" placeholder="Street Address & Unit..." id="00N3t00000GCGiK" maxlength="255" name="00N3t00000GCGiK" class="formFieldInput">
                               
                            </label>
                        </div>
                    

                </div>

               <div class="appFormContent appCheckContent">
                    <h2>CHOOSE A CATEGORY</h2>
                    <p>Please provide us with accurate information regarding the issue encountered so we can correctly address your problem.</p>

                    <p>You’re able to report more than one request if necessary.</p>

                    <select  id="00N3t00000GC44w" name="00N3t00000GC44w" title="Category">
                        <option value="">--None--</option><option value="Appliances">Appliances</option>
                        <option value="Cleaning Services">Cleaning Services</option>
                        <option value="Electric Maintenance">Electric Maintenance</option>
                        <option value="General Maintenance">General Maintenance</option>
                        <option value="Lawn">Lawn</option>
                        <option value="Lead Repair">Lead Repair</option>
                        <option value="License Violation">License Violation</option>
                        <option value="Mechanical Maintenance">Mechanical Maintenance</option>
                        <option value="Plumbing Maintenance">Plumbing Maintenance</option>
                        <option value="Technology Maintenance">Technology Maintenance</option>
                    </select>
                </div> 

                <div class="appFormContent fileUploader" id="fileUploader">
                    <h1>UPLOAD AN IMAGE/VIDEO</h1>
                    <p>Please upload a clear video or photo of the issue being reported.</p>
                    <div class="box">
                        <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-5" class="labelforFile-5">
                            <figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file</span>
                        </label>
                    </div> 
                </div> 

                <div class="appFormContent textAreaContent">
                    <h1>GIVE US MORE</h1>

                    <textarea name="caseDescription" id="" placeholder="Please enter a description of your request..."></textarea>

                    <p>Please click in the authorization button in orther to carry out the repair mentioned in case your not home.</p>

                    <input type="checkbox" id="authorization" hidden required> <label for="authorization" class="authorizationButton"><p class="authorizationButtonP">I accept</p></label>
                </div>




                    <div class="appformButton">
                        <div class="nextButton" id="prevBtn" onclick="nextPrev(-1)">
                            <h3>PREV</h3>
                        </div>
                        <div class="nextButton" id="nextBtn" onclick="nextPrev(1)">
                            <h3>NEXT</h3>
                        </div>
                    </div>
                </div>
                </form>
           <div class="contenidoForm right">
                <img src="assets/rsc/img/almaPestControl.jpg" alt="pest control service" class="imgForm">
            </div>
             <div class="contenidoForm right">
                <img src="assets/rsc/img/alma-repairs.jpg" alt="pest control service" class="imgForm">
            </div>
              <div class="contenidoForm right">
                <img src="assets/rsc/img/alma-repair-category.jpg" alt="pest control service" class="imgForm">
            </div>
            <div class="contenidoForm right">
                <img src="assets/rsc/img/repairs-and-maintenance.jpg" alt="pest control service" class="imgForm">
            </div>
            <div class="contenidoForm right">
                <img src="assets/rsc/img/alma-repair-appform.jpg" alt="pest control service" class="imgForm">
            </div>
        </div><!--Fin App Container-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



<script src="assets/js/script.js"></script>
<script src="assets/js/custom-file-input.js"></script>



<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    var currentRight = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
     showTab(currentRight); // Display the current tab

    function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("appFormContent");
  var y = document.getElementsByClassName("right");
  x[n].style.display = "flex";
  y[n].style.display = "flex";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "flex";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "<h3>SEND</h3>";
  } else {
    document.getElementById("nextBtn").innerHTML = "<h3>NEXT</h3>";
  }
  //... and run a function that will display the correct step indicator:
 
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("appFormContent");
  var y = document.getElementsByClassName("right");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  y[currentRight].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  currentRight = currentRight +n;
  // if you have reached the end of the form...
  if (currentTab >= x.length && currentRight>= y.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }

  // Otherwise, display the correct tab:
  showTab(currentTab);
}



function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


function validatePhone(phone) {
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var phone = document.getElementById("phone");
        if(phone.value.match(phoneno)) {
            return true;
        }else {
            return false;
        }            
}

var email = document.getElementById("email");
var phone = document.getElementById("phone");
var phoneValidation = validatePhone(phone.value);

function validateForm() {
  // This function deals with validation of the form fields
  var emailValidation = validateEmail(email.value);
  var phoneValidation = validatePhone(phone.value);
  var x, y, i, valid = true;
  x = document.getElementsByClassName("appFormContent");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 2; i < y.length; i++) {

    if (!emailValidation) {
       y[3].className += " invalid"; 
       valid = false;
    }

    if(!phoneValidation){
        y[4].className += " invalid"; 
        valid = false;
    }
    // If a field is empty...
    if (y[i].value == "") {

      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
      
    }


  }
  // If the valid status is true, mark the step as finished and valid:
  return valid; // return the valid status
}


/*****************************/


</script>

    </body>
</html>