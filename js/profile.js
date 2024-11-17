/*
  CPC-403_Final Project
  Mahmued Alardawi - 213529 - CS1 
*/

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('deleteProfileLink');
    form.addEventListener('click', function(event) {
        let isValid = true;

        var password = prompt('Please enter your password to confirm deletion:');

        if (password) {
            document.getElementById('deletePassword').value = password;
            document.getElementById('deleteProfileForm').submit();
        }
    });
});