document.addEventListener("DOMContentLoaded", function() {
    // Select form and input elements
    const loginForm = document.getElementById("loginForm");
    const usernameField = document.getElementById("username");
    const passwordField = document.getElementById("password");
    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");

    // Add event listener for form submission
    loginForm.addEventListener("submit", function(event) {
        let formIsValid = true;

        // Reset error messages
        usernameError.textContent = "";
        passwordError.textContent = "";

        // Username validation
        if (usernameField.value.trim() === "") {
            usernameError.textContent = "Username is required.";
            formIsValid = false;
        }

        // Password validation
        if (passwordField.value.trim() === "") {
            passwordError.textContent = "Password is required.";
            formIsValid = false;
        } else if (passwordField.value.length < 6) {
            passwordError.textContent = "Password must be at least 6 characters long.";
            formIsValid = false;
        }

        // If form is invalid, prevent submission
        if (!formIsValid) {
            event.preventDefault(); // Prevent form submission
        }
    });
});
