const passwordInput = document.querySelector('.in6');
const passwordLabel = document.querySelector('#s7');

passwordInput.addEventListener('input', () => {
  const password = passwordInput.value;
  let hasCapitalLetters = false;
  let hasSymbols = false;

  // Check if password contains capital letters and symbols
  for (let i = 0; i < password.length; i++) {
    const charCode = password.charCodeAt(i);
    if (charCode >= 65 && charCode <= 90) {
      hasCapitalLetters = true;
    } else if ((charCode >= 33 && charCode <= 47) || (charCode >= 58 && charCode <= 64)) {
      hasSymbols = true;
    }
  }

  // Check if password meets length requirement
  if(password.length < 4 && hasCapitalLetters && hasSymbols ){
    passwordLabel.textContent = ' Weak password';
    passwordLabel.style.color = 'red';
  }
  else if (password.length >= 8 && hasCapitalLetters && hasSymbols) {
    passwordLabel.textContent = 'Strong password';
    passwordLabel.style.color = 'green';
  } else {
    passwordLabel.textContent = 'Weak Password';
    passwordLabel.style.color = 'red';
  }
});