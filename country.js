function getState(country){

var xmlhttp = new XMLHttpRequest();
//var country = document.getElementsByTagName('input')[0].value;
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var countries = JSON.parse(this.responseText);
         // datalist2 = document.getElementById('state');
        for(var i in countries){
          if(i==country){
            //document.write(countries[i][j]);
            for(var j in countries[i]){
              //document.write(countries[i][j]+"<br>");
              states = countries[i][j];
              stateOption = '<option value="'+states+'"/>';
             document.getElementById('state').innerHTML += stateOption;     
                }
          }
        }
}
      
};
xmlhttp.open("GET", "countries.json", true);
xmlhttp.send();


}

function getCountry(){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var country = JSON.parse(this.responseText);

          var datalist = document.getElementById('country');
                     /*for (i = 0; i < country.length; i++) {
          //x += country[i];obj[Object.keys(obj)[0]];
          document.write(country[Object.getOwnPropertyNames(country)[i]]+"<br>");
          //countryOption = "<option value=\"" + this.id + "\">" + country[i].name + "</option>";
          //countryOption = '<option value="'+country[i]+'" />';

      
            //datalist.innerHTML += countryOption;
        }*/

        var keys = [];
        for(var k in country) 
          keys.push(k);
        x = keys;
        for (var i = 0; i < keys.length; i++) {
          //document.write(keys[i]+"<br>");
          countryOption = '<option value="'+keys[i]+'" />';
          datalist.innerHTML += countryOption;
        }



    }
};
xmlhttp.open("GET", "countries.json", true);
xmlhttp.send();
}
getCountry();
document.getElementById('countr').onchange= function(){
var country = document.getElementById('countr').value;
getState(country);
};
