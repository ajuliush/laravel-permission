import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
function handleCheckboxChange(email, password) {
    var autoFillFields = document.getElementById('autoFillFields');
    var emailInput = document.getElementById('email');
    var passwordInput = document.getElementById('password');

    if (emailInput && passwordInput) {
        if (email && password) {
            // Set the desired email and password values
            if (!emailInput.checked) {
                emailInput.value = email;
            }
            if (!passwordInput.checked) {
                passwordInput.value = password;
            }

            // Optionally, you can disable the email and password fields
            // emailInput.setAttribute('disabled', true);
            // passwordInput.setAttribute('disabled', true);
        } else {
            // Clear the email and password fields
            emailInput.value = '';
            passwordInput.value = '';

            // Enable the email and password fields
            emailInput.removeAttribute('disabled');
            passwordInput.removeAttribute('disabled');
        }
    }
}

document.getElementById('super_admin').addEventListener('change', function () {
    handleCheckboxChange('superadmin@example.com', 'password');
});

document.getElementById('admin').addEventListener('change', function () {
    handleCheckboxChange('admin@example.com', 'password');
});

document.getElementById('user').addEventListener('change', function () {
    handleCheckboxChange('test@example.com', 'password');
});


