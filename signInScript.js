function test() {

	function checkName(str) {
  		
       // if (str.length==1) {
  		var xhttp;
  		
	  	xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
				document.getElementById("img").src=this.responseText;
				document.getElementsByTagName('p')[0].innerHTML=this.responseText;
    		}
  		};
  		xhttp.open("GET", "checkname.php?name="+str, true);
 		xhttp.send();  
 	//}
 
	}	

	var inputs = document.getElementsByTagName('input');

	//inputs[0].onkeyup = function(){
		checkName(inputs[0].value);
	//}
}
