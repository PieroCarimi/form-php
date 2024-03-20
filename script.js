document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contact-form');
    var submitButton = document.getElementById('submitButton');
    
    function validateForm() {
        var companyName = document.getElementById('companyName').value;
        var fullName = document.getElementById('fullName').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var service = document.getElementById('service').value;

        var isValid = true;

        if (companyName.trim() === "") {
            isValid = false;
        }
    
        if (fullName.trim() === "") {
            isValid = false;
        }
    
        if (email.trim() === "" || !isValidEmail(email)) {
            isValid = false;
        }
    
        if (phone.trim() === "") {
            isValid = false;
        }
    
        if (service === "") {
            isValid = false;
        }

        return isValid;
    }

    function isValidEmail(email) {
        var emailRegex = /\S+@\S+\.\S+/;
        return emailRegex.test(email);
    }

    function updateSubmitButtonState() {
        if (validateForm()) {
            submitButton.removeAttribute('disabled');
        } else {
            submitButton.setAttribute('disabled', 'disabled');
        }
    }

    form.addEventListener('input', updateSubmitButtonState);

    updateSubmitButtonState();
});