// window.addEventListener("DOMContentLoaded", init);

// function init() {

// let formBtn1 = document.getElementById("formBtn1");
// let formBtn2 = document.getElementById("formBtn2");
// let formBtn3 = document.getElementById("formBtn3");
// let formBtn4 = document.getElementById("formBtn4");

let tickIcon1 = document.getElementById("tickIcon1");
let tickIcon2 = document.getElementById("tickIcon2");
let tickIcon3 = document.getElementById("tickIcon3");
let tickIcon4 = document.getElementById("tickIcon4");

// formBtn1.addEventListener("click", addTickIcon);
// formBtn2.addEventListener("click", addTickIcon);
// formBtn3.addEventListener("click", addTickIcon);
// formBtn4.addEventListener("click", addTickIcon);

// Using switch statement to change the fieldsets and showing the progress on the info bar
function addTickIcon(event) {
  let clickedElement = event.target.dataset.icon;
  if (clickedElement === "tickIcon1") {
    document.getElementById("tickIcon1").innerHTML =
      "<img src='./img/tick-icon.png'>";
  } else if (clickedElement === "tickIcon2") {
    document.getElementById("tickIcon2").innerHTML =
      "<img src='./img/tick-icon.png'>";
  } else if (clickedElement === "tickIcon3") {
    document.getElementById("tickIcon3").innerHTML =
      "<img src='./img/tick-icon.png'>";
  } else if (clickedElement === "tickIcon4") {
    document.getElementById("tickIcon4").innerHTML =
      "<img src='./img/tick-icon.png'>";
  } else if (clickedElement === "tickIcon5") {
    document.getElementById("tickIcon5").innerHTML =
      "<img src='./img/tick-icon.png'>";
  } else if (clickedElement === "tickIcon6") {
    document.getElementById("tickIcon6").innerHTML =
      "<img src='./img/tick-icon.png'>";
  }
}
