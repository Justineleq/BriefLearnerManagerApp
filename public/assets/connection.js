const main = document.getElementById('mainContainer');
const email = document.getElementById('email');
const password = document.getElementById('inputPassword');
const connectBtn = document.getElementById('connectBtn');


if(connectBtn) {
    connectBtn.addEventListener("click", connectUser);
    document.getElementById("connectStatus").innerHTML = "Disconnect"
}

function connectUser(event) {
    event.preventDefault();

    const inputEmailValue = email.value;
    const inputPasswordValue = password.value;

    const url = '/teacher';

    connection = {
        email: inputEmailValue,
        password: inputPasswordValue,
    };
    fetch (url, {
        method: 'POST',
        headers: {"Content-Type": "application/json",},
        body: JSON.stringify(connection),
    }) .then((response) => {
        return response.text();
    }) .then((result) => {
        main.innerHTML = ''
        main.innerHTML = result
    }).catch(console.error());

}