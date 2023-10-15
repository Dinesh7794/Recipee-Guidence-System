function validatePassword() {
    const passwordInput = document.getElementById("password");
    const password = passwordInput.value;
    const passwordWarning = document.getElementById("passwordWarning");
      const passwordPattern = /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{10,}$/;
  
    if (!passwordPattern.test(password)) {
      passwordWarning.style.display = "block"; 
      window.alert("1. Password must be at least 10 characters long,\n2. and contain at least one uppercase letter,\n3. one lowercase letter,\n4. and one special character.");
      return false;
    } else {
      passwordWarning.style.display = "none"; 
    }
  
  }