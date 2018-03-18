

function search_lodge(){


var preview = document.getElementById("preview"); 
var loader = document.getElementById("preloader"); 
var campus = document.getElementById("campus").value; 
var price = document.getElementById("price").value; 
var light = document.getElementById("light").value; 
var within_school = document.getElementById("within_school").value; 
var near_school = document.getElementById("near_school").value; 
var water = document.getElementById("water").value;
loader.style.display = "inline-block";


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
      preview.innerHTML = xmlhttp.responseText;

    }
  }
  xmlhttp.open("POST","include/search_lodge.php?campus="+ campus +"&price=" + price +
   "&light=" + light + "&within_school=" + within_school + "&near_school=" + near_school + "&water=" + water,true);
  xmlhttp.send();



}

