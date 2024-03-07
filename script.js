function validateEmail(event) {
    event.preventDefault();
  
    var emailInput = document.getElementById('email');
    var errorMessageElement = document.getElementById('error-message');
    var successMessageElement = document.getElementById('correct-message');
    var emailRegex = /^[a-zA-Z0-9._-]+@bisu\.edu\.ph$/;
  
    if (emailRegex.test(emailInput.value)) {
      successMessageElement.textContent = '✓';
      errorMessageElement.textContent = '';
      
      validateEmailInput();
    } else {
      errorMessageElement.textContent = 'Please enter a valid email address.';
      successMessageElement.textContent = '';
    }
  }
  
  function validateEmailInput() {
    const emailInput = document.getElementById("email");
    const rememberCheckbox = document.getElementById("remember-checkbox");
  
    if (rememberCheckbox.checked) {
      storeEmailInLocalStorage(emailInput.value);
    } else {
      clearEmailFromLocalStorage();
    }
  
    const savedEmail = getEmailFromLocalStorage();
    if (savedEmail) {
      emailInput.value = savedEmail;
    }
  }
  
  function storeEmailInLocalStorage(email) {
    localStorage.setItem("email", email);
  }
  
  function clearEmailFromLocalStorage() {
    localStorage.removeItem("email");
  }
  
  function getEmailFromLocalStorage() {
    return localStorage.getItem("email");
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    // Call the validateEmailInput function after defining it
    validateEmailInput();
  
    // ... (rest of the code)
  });
