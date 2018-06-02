window.onload = function () {
	
	function showName(str) {
  		var xhttp;
  		if (str.length == 0) { 
    		document.getElementById("error").innerHTML = "";
    		return;
  		}
	  	xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    	 	 document.getElementById("error").innerHTML = this.responseText;
    		}
  		};
  		xhttp.open("GET", "testajax.php?name="+str, true);
 		 xhttp.send();   
	}

	function showEmail(str) {
  		var xhttp;
  		if (str.length == 0) { 
    		document.getElementsByTagName("span")[1].innerHTML = "";
    		return;
  		}
	  	xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    	 	 document.getElementsByTagName("span")[1].innerHTML = this.responseText;
    		}
  		};
  		xhttp.open("GET", "testemail.php?email="+str, true);
 		 xhttp.send();   
	}

	function showMobile(str) {
  		var xhttp;
  		if (str.length == 0) { 
    		document.getElementsByTagName("span")[2].innerHTML = "";
    		return;
  		}
	  	xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    	 	 document.getElementsByTagName("span")[2].innerHTML = this.responseText;
    		}
  		};
  		xhttp.open("GET", "testmobile.php?mobile="+str, true);
 		 xhttp.send();   
	}

	function showPassword(str) {
  		var xhttp;
  		if (str.length == 0) { 
    		document.getElementsByTagName("span")[3].innerHTML = "";
    		return;
  		}
	  	xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    	 	 document.getElementsByTagName("span")[4].innerHTML = this.responseText;
    		}
  		};
  		xhttp.open("GET", "testpassword.php?password="+str, true);
 		 xhttp.send();   
	}

  function showUser(str){
      var xhttp;
      if (str.length == 0) { 
        document.getElementsByTagName("span")[4].innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         document.getElementsByTagName("span")[3].innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "testusername.php?uname="+str, true);
     xhttp.send();
  }

  function changeSrc()
  {
    var logo = document.getElementById('img');
    var female = document.getElementById('gender0');
     if (female.checked) {
      logo.src="user-f.png";
    }
    var male = document.getElementById('gender1');
    if (male.checked){
      logo.src="user_m.png";
    } 
  }


	var inputs = document.getElementsByTagName('input');

	inputs[0].onkeyup = function(){
		showName(this.value);
	}

	inputs[1].onkeyup = function(){
		showEmail(this.value);
	}

	inputs[2].onkeyup = function(){
		showMobile(this.value);
	}

  var female = document.getElementById('gender0');
  female.onclick = function(){
    changeSrc();
  }
  var male = document.getElementById('gender1');
  male.onclick = function(){
    changeSrc();
  }

inputs[5].onkeyup = function(){
  showUser(this.value);
}

	inputs[6].onkeyup = function(){
		showPassword(this.value);
	}			

}