document.addEventListener('DOMContentLoaded', function () {
    var form = document.forms['Contact_form'];

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(form);

        fetch('php/contactEmail.html', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Handle the response data here
            console.log(data);

            // Redirect to the same page after a successful submission
            window.location.href = window.location.href;
        })
        .catch(error => {
            // Handle errors
            console.error('Error:', error);

            // Example: Display an error message
            alert('Error submitting form. Please try again.');
        });
    });
});
