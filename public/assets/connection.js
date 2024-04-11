const main = document.getElementById('mainContainer');
const email = document.getElementById('email');
const password = document.getElementById('inputPassword');
const connectBtn = document.getElementById('connectBtn');

if(connectBtn) {
    connectBtn.addEventListener("click", connectUser)
}

function connectUser(event) {
    event.preventDefault();

    const inputEmailValue = email.value;
    const inputPasswordValue = password.value;

    const url = ''
}