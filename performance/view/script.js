const form = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', e=> {
 e.preventDefault();
 validateInputs();
});

const validateInputs=() => {
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
if(name == ""){  
}
}