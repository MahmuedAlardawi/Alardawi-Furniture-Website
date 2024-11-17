/*
  CPC-403_Final Project
  Mahmued Alardawi - 213529 - CS1 
*/

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.signup_form'); // Ensure this class matches your form
    form.addEventListener('submit', function(event) {
        let isValid = true; // Flag to determine if the form should submit

        // Clear all previous errors
        document.querySelectorAll('.error_message').forEach(function(element) {
            element.textContent = '';
        });

        // Validation checks
        const firstName = document.getElementById('first_name');
        const lastName = document.getElementById('last_name');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');

        if (firstName.value.trim() === "") {
            displayError('first_name_error', "First name is required.");
            isValid = false;
        }
        if (lastName.value.trim() === "") {
            displayError('last_name_error', "Last name is required.");
            isValid = false;
        }
        if (!validateEmail(email.value)) {
            displayError('email_error', "Invalid email address.");
            isValid = false;
        }
        if (password.value.length < 8) {
            displayError('password_error', "Password must be at least 8 characters long.");
            isValid = false;
        }
        if (password.value !== confirmPassword.value) {
            displayError('confirm_password_error', "Passwords do not match.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form from submitting
        }
    });

    function displayError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.textContent = message;
    }

    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});