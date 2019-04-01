/* TopNav
Toggle between adding and removing the "responsive" class to topnav when
the user clicks on the icon */
function navonoff() {
    var x = document.getElementById("myTopnav");
    var i = document.getElementById("menuicon");
    if (x.className === "topnav") {
        x.className += " responsive";
        i.className += " change";
    } else {
        x.className = "topnav";
        i.className = "container";
    }
}

function myFunction(x) {
    x.classList.toggle("change");
}

function ValidateEmail(mail)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
//Countdown {
// Set the date we're counting down to
var countDownDate = new Date("Mar 7, 2019 14:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("teaser").innerHTML = days + " Tage " + hours + " Stunden "
  + minutes + " Minuten " + seconds + " Sekunden <br> bis zum Wettbewerb";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("teaser").innerHTML = "Der Wettbewerb hat gestartet";
  }
}, 1000);

// Countdown }
