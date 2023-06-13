const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="confirmedPassword"]');
const birthDateInput = form.querySelector('input[name="birthDate"]');

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

function checkUserAge(dateBirth) {
    const birthDate = new Date(dateBirth);

    const ageDiffMilliseconds = Date.now() - birthDate.getTime();
    const ageDate = new Date(ageDiffMilliseconds);
    const userAge = Math.abs(ageDate.getUTCFullYear() - 1970);

    return userAge >= 18;
}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid')
}

emailInput.addEventListener('keyup', function () {
    setTimeout(function () {
        markValidation(emailInput, isEmail(emailInput.value));
    }, 1000);
});


confirmedPasswordInput.addEventListener('keyup', function () {
    setTimeout(function () {
        const condition = arePasswordsSame(
            confirmedPasswordInput.previousElementSibling.value,
            confirmedPasswordInput.value
        );
        markValidation(confirmedPasswordInput, condition);
    }, 1000);
});


birthDateInput.addEventListener('change', function () {
    setTimeout(function () {
        markValidation(birthDateInput, checkUserAge(birthDateInput.value));
    }, 1000);
});

/*
form.addEventListener("submit", e => {
    e.preventDefault();

    //TODO check again if form is valid after submitting it
});
*/