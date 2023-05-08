const formInputs = document.querySelectorAll('.form-floating input, .form-floating textarea, .form-floating select');

formInputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.parentElement.querySelector('label').classList.add('active');
    });
    input.addEventListener('blur', () => {
        if (!input.value) {
        input.parentElement.querySelector('label').classList.remove('active');
        }
    });
});