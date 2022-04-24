let navContent = document.getElementsByClassName("nav_home"); //this will return an array of html element eg nav_home nav_home so on
let logoName = document.getElementById("logo_title"); //sweat arena
let logOut = document.getElementById("log_out"); //slidebar icon
let logIn = document.getElementById("log_in");
let sideBar = document.getElementById("showSidebar");

function smooth_transition() {
  for (var i = 0; i < navContent.length; i++) {
    // to access every element of array we use loop
    navContent[i].style.display = "inline-block"; // inline block is used to inline image with text
    logoName.style.display = "block"; // it show the hidden element of logoName i.e sweat arena
  }
}
// function for open the navbar
logOut.onclick = function () {
  sideBar.style.width = "290px";
  sideBar.style.transition = "0.3s ease";
  logOut.style.display = "none";
  logIn.style.display = "block";
  setTimeout(smooth_transition, 300); //setTimeout func runs a code after certain time in millisecond
};
// function for close the navbar
logIn.onclick = function () {
  sideBar.style.width = "90px";
  sideBar.style.transition = "0.8s ease";
  logOut.style.display = "block";
  logoName.style.display = "none";
  logIn.style.display = "none";
  for (var i = 0; i < navContent.length; i += 1) {
    navContent[i].style.display = "none";
  }
};
