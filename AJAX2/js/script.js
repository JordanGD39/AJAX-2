let submit = document.getElementById('submit');
let response = document.getElementById('response');

submit.addEventListener('click', Ajax);

let kg = document.getElementById('kg');
let cm = document.getElementById('cm');
let m = 0;
let bmi = 0;
let p = 0;
let message = "";

function Ajax() {
  let xml = new XMLHttpRequest();
  xml.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      response.innerHTML = this.responseText;
    }
  }
  let httpString = "BMI.php?kg=" + kg.value + "&cm=" + cm.value;
  console.log(httpString);
  xml.open("GET", httpString, true);
  xml.send();
}
