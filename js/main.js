let navContent = document.getElementsByClassName("nav_home");//this will return an array of html element eg nav_home nav_home so on 
let logoName = document.getElementById("logo_title");//sweat arena
let logOut = document.getElementById("log_out");//slidebar icon
let sideBar =document.getElementById("showSidebar");
var clicked=true;
logOut.onclick = function(){
    if(clicked==true){  
        clicked=false;
        sideBar.style.width = "290px";
        sideBar.style.transition = "0.8s ease";
        logOut.style.transform= "rotate(180deg)";
        logoName.style.display = "block";
        for (var i = 0; i < navContent.length; i++){     // to access every element of array we use loop
            navContent[i].style.display = 'inline-block';
          }
    }
    else{
        clicked=true;
        sideBar.style.width = "90px";
        sideBar.style.transition = "0.8s ease";
        logOut.style.transform= "rotate(360deg)";
        logOut.style.right= "0";
        logoName.style.display = "none";
        for (var i = 0; i < navContent.length; i += 1){
            navContent[i].style.display = 'none';
    }
}
}