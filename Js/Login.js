

function validateForm() {
	
  var username = document.forms['loginForm']['uname'].value;
  var password = document.forms['loginForm']['psw'].value;

  if (username === '' || password === '') {
    alert('Please enter both username and password');
    return false;
  }


  return true;
}





