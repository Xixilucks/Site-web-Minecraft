const navbar = document.querySelector('.navbar');

navbar.addEventListener('mouseenter', () => {
  navbar.style.width = '200px';
});

navbar.addEventListener('mouseleave', () => {
  navbar.style.width = '60px';
});

const passwordInput = document.getElementById("password");
const weakBar = document.getElementById("weak");
const mediumBar = document.getElementById("medium");
const strongBar = document.getElementById("strong");

passwordInput.addEventListener("input", () => {
  const password = passwordInput.value;
  const strength = checkPasswordStrength(password);
  switch (strength) {
    case "weak":
      weakBar.style.width = "100%";
      mediumBar.style.width = "0%";
      strongBar.style.width = "0%";
      break;
    case "medium":
      weakBar.style.width = "33.33%";
      mediumBar.style.width = "33.33%";
      strongBar.style.width = "0%";
      break;
    case "strong":
      weakBar.style.width = "33.33%";
      mediumBar.style.width = "33.33%";
      strongBar.style.width = "33.33%";
      break;
    default:
      weakBar.style.width = "0%";
      mediumBar.style.width = "0%";
      strongBar.style.width = "0%";
      break;
  }
});

function checkPasswordStrength(password) {
  if (password.length < 8) {
    return "weak";
  } else if (password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/)) {
    return "strong";
  } else {
    return "medium";
  }
}