document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', this.action, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('form-response').innerHTML = 'Message has been sent';
        } else {
            console.error('An error occurred');
        }
    };
    xhr.send(formData);
});