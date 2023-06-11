const signinButton = document.getElementById("signinButton");
const signupButton = document.getElementById("signupButton");
const logoutButton = document.getElementById("logoutButton");

function toggleButtons() {
    signinButton.classList.toggle("hidden");
    signupButton.classList.toggle("hidden");
    logoutButton.classList.toggle("hidden");
}

logoutButton.addEventListener("click", toggleButtons);
signinButton.addEventListener("click", toggleButtons);
signupButton.addEventListener("click", toggleButtons);
