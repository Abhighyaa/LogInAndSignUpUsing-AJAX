function getURLParameter(url) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}
var url = window.location.href;

var ch = getUrlParameters(url);

var hint = "";

if(ch !== ""){

	    var pat=/^[a-zA-Z]+$/;
        var check = (pat.test(name) && (name.length>3 && name.length<15));
        if(check==true)
            hint = "goog going";
        else 
            hint = "Only letters and white space allowed";

document.write(hint);
}