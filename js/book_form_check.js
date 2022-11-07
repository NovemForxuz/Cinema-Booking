// job_form_val.js
    // Function called when the form is submitted.


function validateForm() {
    'use strict';
    /*  
        using trigger onsubmit in HTML using
        <form ... onsubmit="return valFunctHere()" ... >
        valFunctHere() returns false if fail, true if pass
        false prevents .php from launching 
    */

    // Get references to the form elements:
    var name = document.getElementByName("nameBox").value;
    var email = document.getElementByName('emailBox').value;
    var phone = document.getElementByName('phoneBox').value;
    var seats = document.getElementByName("seating[]")
    num_seats = seats.length

    // RegEx: name, email input
    var name_regex = /^[a-z ]+$/i;
    var email_regex = /^[\w-.]+@[\w-]+(\.[\w]+){1,3}$/
    var phone_regex = /^\d+$/

    // Validation
    var isValid = true;
    if (!name_regex.test(name)) {
        isValid = false;
    }
    if (!email_regex.test(email)) {
        isValid = false;
    }
    if (!phone_regex.test(phone)) {
        isValid = false;
        document.getElementsByName("phoneBox").focus();
    }
    if (num_seats < 1) {
        isValid = false;
    }
    return isValid;
} 

function valName(ele) {
    //var name = document.getElementById("name").value;
    var name = ele.value
    var name_regex = /^[a-z ]+$/i
    if (!name_regex.test(name)) {
        //alert('Name - invalid entry! \n\nOnly alphabets and space allowed');
        document.getElementById("name_alert").innerHTML = "*Name - alphabetical characters only."
    }
    if (name_regex.test(name)) {
        document.getElementById("name_alert").innerHTML = "";
    }
}

function valEmail(ele) {
    //var email = document.getElementById('email').value;
    var email = ele.value
    var email_regex = /^[\w-.]+@[\w-]+(\.[\w]+){1,3}$/
    if (!email_regex.test(email)) {
        //alert('E-mail - invalid format!');
        document.getElementById("email_alert").innerHTML = "*Email - please enter a valid email address.";
    }
    if (email_regex.test(email)) {
        document.getElementById("email_alert").innerHTML = "";
    }
}

function valPhone(ele) {
    //var email = document.getElementById('email').value;
    var phone = ele.value
    var phone_regex = /^\d+$/
    if (!phone_regex.test(phone)) {
        //alert('E-mail - invalid format!');
        document.getElementById("phone_alert").innerHTML = "*Phone - numbers only without spacing."
    }
    if (phone_regex.test(phone)) {
        document.getElementById("phone_alert").innerHTML = "";
    }
}
