

function login_user(){


var inp1 = document.getElementById("email");
var inp2 =  document.getElementById("password");
var view =  document.getElementById("alert");
var loader =document.getElementById("login_loader"); 
loader.style.display = "block";

var email = inp1.value;
var pass = inp2.value;

    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {

      loader.style.display = "none";
      Materialize.toast(xmlhttp.responseText, 5000 );

    }
  }
  xmlhttp.open("POST","include/process_login.php?email="+ email +"&pass="+pass,true);
  xmlhttp.send();



}
