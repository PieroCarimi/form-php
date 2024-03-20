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
    
        if (phone.trim() === "" || !isValidPhone(phone)) {
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

    function isValidPhone(phone) {
        var phoneRegex = /^\d+$/;
        return phoneRegex.test(phone);
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

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            var messageDiv = document.createElement('div');
            messageDiv.innerHTML = `
                <h2>${data.message}</h2>
                <p>Company Name: ${data.companyName}</p>
                <p>Full Name: ${data.fullName}</p>
                <p>Email: ${data.email}</p>
                <p>Phone: ${data.phone}</p>
                <p>Service: ${data.service}</p>
            `;
            formContainer.innerHTML = '';
            message.innerHTML = '';
            formContainer.appendChild(messageDiv);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});