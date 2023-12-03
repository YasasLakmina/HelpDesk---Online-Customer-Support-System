
function redirectToOnline() {
  window.location.href = "Online1.php";
}

function redirectToBank() {
  window.location.href = "Withdraw1.php";
}

function redirectToPaypal() {
  window.location.href = "Paypal1.php";
}




function passValue(value) {
  localStorage.packagePrice = value;
}

window.addEventListener('DOMContentLoaded', function() {
  var packagePrice = localStorage.packagePrice;
  
  if (packagePrice) {
    var packagePriceLabel = document.getElementById('totalAmount');
    packagePriceLabel.innerText = '$' + packagePrice + '.00';
  }
});



window.addEventListener('DOMContentLoaded', function() {
  var packagePrice = localStorage.getItem('packagePrice');
  var packagePriceLabel = document.getElementById('totalAmount');
  
  var submitButton = document.getElementById('sumbit');

  if (packagePrice) {
    packagePriceLabel.innerText = '$' + packagePrice + '.00';
  }

  submitButton.disabled = true; // Disable the submit button initially

  document.getElementById('amount').addEventListener('input', function() {
    var inputAmount = this.value;

    if (inputAmount === packagePrice) {
      submitButton.disabled = false; // Enable the submit button if the amount matches
    } else {
      submitButton.disabled = true; // Disable the submit button if the amount doesn't match
    }
  });

  submitButton.addEventListener('click', function() {
    var inputAmount = document.getElementById('amount').value;

    if (inputAmount === packagePrice) {
      alert('Amount matches!');
      // Perform additional actions or submit the form here
    } else {
      alert('Amount doesn\'t match!');
    }
  });
});