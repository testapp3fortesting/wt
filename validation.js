document.getElementById('myForm').addEventListener('submit', function(event) {
    const form = event.target;
    const name = form.name.value.trim();
    const email = form.email.value.trim();

    if (!name) {
        return showError(event, 'Please enter your name.');
    }

    if (!email) {
        return showError(event, 'Please enter your email.');
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        return showError(event, 'Please enter a valid email address.');
    }
});

function showError(event, message) {
    alert(message);
    event.preventDefault();
}

