/*
  CPC-403_Final Project
  Mahmued Alardawi - 213529 - CS1 
*/

document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector('.feedback_form'); // Ensure this class matches your form
  form.addEventListener('submit', function(event) {
      let isValid = true; // Flag to determine if the form should submit

      // Clear all previous errors
      document.querySelectorAll('.error_message').forEach(function(element) {
          element.textContent = '';
      });

      // Validation checks
      const name = document.getElementById('name');
      const email = document.getElementById('email');
      const phone = document.getElementById('phone');
      const address = document.getElementById('address');
      const product = document.getElementById('product');
      const serviceRating = document.querySelector('input[name="service_rating"]:checked');
      const features = document.querySelectorAll('input[name="features[]"]:checked');

      if (name.value.trim() === "") {
          displayError('name_error', "Name is required.");
          isValid = false;
      }

      if (email.value.trim() === "" || !validateEmail(email.value)) {
          displayError('email_error', "Valid email is required.");
          isValid = false;
      }

      if (phone.value.trim() !== "" && !validatePhone(phone.value)) {
          displayError('phone_error', "Valid phone number is required.");
          isValid = false;
      }

      if (address.value.trim() === "") {
          displayError('address_error', "Address is required.");
          isValid = false;
      }

      if (product.value === "") {
          displayError('product_error', "Please select a favorite product.");
          isValid = false;
      }

      if (!serviceRating) {
          displayError('service_rating_error', "Please rate our service.");
          isValid = false;
      }

      if (features.length === 0) {
          displayError('features_error', "Please select at least one feature.");
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

function validatePhone(phone) {
    const re = /^\d{10}$/; // Assumes a 10-digit phone number
    return re.test(String(phone));
}
});