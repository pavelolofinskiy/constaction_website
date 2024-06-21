document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var form = this

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    var waitingIcon = document.getElementById('waiting-icon');
    var formResponce = document.getElementById('form-response');


    waitingIcon.style.display = 'block';

    formResponce.innerHTML = ''

    xhr.open('POST', this.action, true);
    xhr.onload = function() {

        waitingIcon.style.display = 'none';

        if (xhr.status === 200) {
            formResponce.innerHTML = 'Message has been sent';
            form.reset()
        } else {
            console.error('An error occurred');
        }
        
    };

    xhr.send(formData);
});