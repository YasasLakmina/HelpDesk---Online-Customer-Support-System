function validateForm() {
  var nameInput = document.getElementById('cname');
  var cardNumberInput = document.getElementById('no');
  var expiresDateInput = document.getElementById('date');
  var securityCodeInput = document.getElementById('code');


  var name = nameInput.value.trim();
  var cardNumber = cardNumberInput.value.trim();
  var expiresDate = expiresDateInput.value.trim();
  var securityCode = securityCodeInput.value.trim();

  if (name === '') {
    alert('Please enter a name on the card');
    return false;
  }
  
    if (!/^[A-Za-z\s]+$/.test(name)) {
        alert('Invalid name on the card. Only alphabetic characters and spaces are allowed.');
        return false;
    }
	
	
 
  if (cardNumber === '') {
    alert('Please enter a card number');
    return false;
  }
  
  if (!/^\d{16}$/.test(cardNumber)) {
  alert('Card number should be a 16-digit number');
  return false;
}

  if (expiresDate === '') {
    alert('Please enter an expiration date');
    return false;
  }
  
  if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiresDate)) {
  alert('Invalid Date');
  return false;
}
 

  if (securityCode === '') {
    alert('Please enter a security code');
    return false;
  }

  if (!/^\d{3}$/.test(securityCode)) {
    alert('Security code should be a 3-digit number');
    return false;
  }

  return true;
}


