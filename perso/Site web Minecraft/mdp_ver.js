function checkPasswordStrength() {
    var password = document.getElementById('passeword').value;
    var strengthMeter = document.getElementById('strength');
    var strength = 0;
    
    if (password.length == 0) {
      strengthMeter.style.width = '0%';
      strengthMeter.style.backgroundColor = 'black';
      return;
    }
    
    if (password.length < 6) {
      strength = 25;
    } else if (password.length < 10) {
      strength = 50;
    } else if (password.length >= 10) {
      strength = 75;
    }
    
    if (password.match(/[a-z]/)) {
      strength += 5;
    }
    
    if (password.match(/[A-Z]/)) {
      strength += 10;
    }
    
    if (password.match(/[0-9]/)) {
      strength += 10;
    }
    
    if (password.match(/[$@#&!]/)) {
      strength += 10;
    }
    
    if (strength > 100) {
      strength = 100;
    }
    
    strengthMeter.style.width = strength + '%';
    
    if (strength < 50) {
      strengthMeter.style.backgroundColor = 'red';
      strengthMeter.style.width = '33.33%';
    } else if (strength < 75) {
      strengthMeter.style.backgroundColor = 'orange';
      strengthMeter.style.width = '66.66%';
    } else {
      strengthMeter.style.backgroundColor= 'green';
      strengthMeter.style.width = '100%';
    }
  }