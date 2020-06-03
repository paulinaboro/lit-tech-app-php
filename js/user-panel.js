window.addEventListener("DOMContentLoaded", init);

function init() {
  removeHiddenClass();
  // remove class hidden from the first fieldset
  function removeHiddenClass() {
    var removeHidden = document.querySelector("#mainForm #fieldset1");
    // console.log(removeHidden);
    removeHidden.classList.remove("hidden");
  }

  // Variables for the progress bar to change color when clicking "continue"
  const continueBtn1 = document.querySelector("[data-field=continueBtn1]");
  const continueBtn2 = document.querySelector("[data-field=continueBtn2]");
  const continueBtn3 = document.querySelector("[data-field=continueBtn3]");
  const continueBtn4 = document.querySelector("[data-field=continueBtn4]");
  const continueBtn5 = document.querySelector("[data-field=continueBtn5]");
  const continueBtn6 = document.querySelector("[data-field=continueBtn6]");
  const continueBtn7 = document.querySelector("[data-field=continueBtn7]");

  // const progressInfo = document.querySelector("[data-field=progress]");
  // const progressPay = document.querySelector("[data-field=progress1]");

  // variables for changing the form to the next fieldset
  const fieldset1 = document.getElementById("fieldset1");
  const fieldset2 = document.getElementById("fieldset2");
  const fieldset3 = document.getElementById("fieldset3");
  const fieldset4 = document.getElementById("fieldset4");
  const fieldset5 = document.getElementById("fieldset5");
  const fieldset6 = document.getElementById("fieldset6");
  const fieldset7 = document.getElementById("fieldset7");

  // Variables for the progress bar to go to the page back when clicking "go back"
  // const goBackBtn1 = document.querySelector("[data-field=goBackBtn1]");
  // const goBackBtn2 = document.querySelector("[data-field=goBackBtn2]");

  // const gobackfieldset1 = document.querySelector("#mainForm #goBackBtn1");
  // const gobackfieldset2 = document.querySelector("#mainForm #goBackBtn2");

  // variables for showing the second product on the product page, after choosing the delivery form
  // const deliveryChoice1 = document.querySelector(
  //   "[data-field=deliveryChoice1]"
  // );
  // const deliveryChoice2 = document.querySelector(
  //   "[data-field=deliveryChoice2]"
  // );
  // const secondProduct = document.querySelector("[data-field=secondProduct]");
  // const secondProduct2 = document.querySelector("[data-field=secondProduct2]");

  // Functions for the progress bar to change color when clicking "continue"
  continueBtn1.addEventListener("click", switchFieldset);
  continueBtn2.addEventListener("click", switchFieldset);
  continueBtn3.addEventListener("click", switchFieldset);
  continueBtn4.addEventListener("click", switchFieldset);
  continueBtn5.addEventListener("click", switchFieldset);
  continueBtn6.addEventListener("click", switchFieldset);
  // continueBtn7.addEventListener("click", switchFieldset);

  // Using switch statement to change the fieldsets and showing the progress on the info bar
  function switchFieldset(event) {
    switch (event.target) {
      case continueBtn1:
        // progressInfo.classList.add("active");
        fieldset1.classList.add("hidden");
        fieldset2.classList.remove("hidden");
        break;
      case continueBtn2:
        // progressPay.classList.add("active");
        fieldset2.classList.add("hidden");
        fieldset3.classList.remove("hidden");
        break;
      case continueBtn3:
        fieldset3.classList.add("hidden");
        fieldset4.classList.remove("hidden");
        break;
      case continueBtn4:
        fieldset4.classList.add("hidden");
        fieldset5.classList.remove("hidden");
        break;
      case continueBtn5:
        fieldset5.classList.add("hidden");
        fieldset6.classList.remove("hidden");
        break;
      case continueBtn6:
        fieldset6.classList.add("hidden");
        fieldset7.classList.remove("hidden");
        break;
      case continueBtn7:
        fieldset7.classList.add("hidden");
        fieldset8.classList.remove("hidden");
        break;
      default:
        console.log("error");
    }
  }

  // Function for showing the second product when choosing the delivery
  // deliveryChoice1.addEventListener("click", showProduct);
  // deliveryChoice2.addEventListener("click", showProduct);

  // function showProduct(event) {
  //   if (event.target === deliveryChoice1) {
  //     secondProduct.classList.toggle("hidden");
  //   } else if (event.target === deliveryChoice2) {
  //     secondProduct2.classList.toggle("hidden");
  //   }
  // }
}
