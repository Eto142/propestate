
// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btn2.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
span4.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it


var forgot = document.getElementById("forgotPas");
var btn1 = document.getElementById("myBtn1");
btn1.onclick = function() {
    forgot.style.display = "block";
}
span1.onclick = function() {
    forgot.style.display = "none";
}

var signup = document.getElementById("signupModal");
var signup1 = document.getElementById("signupModal1");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
btn3.onclick = function() {
    signup.style.display = "block";
}
btn4.onclick = function() {
    signup1.style.display = "block";
}
span2.onclick = function() {
    signup.style.display = "none";
}
span3.onclick = function() {
    signup1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    } else if (event.target == modal1) {
        modal1.style.display = "none";
    } else if (event.target == forgot) {
        forgot.style.display = "none";
    } else if (event.target == signup) {
        signup.style.display = "none";
    }
}