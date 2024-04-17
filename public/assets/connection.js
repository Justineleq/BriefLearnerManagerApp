const main = document.getElementById('mainContainer');
const email = document.getElementById('email');
const password = document.getElementById('inputPassword');
const connectBtn = document.getElementById('connectBtn');


if(connectBtn) {
    connectBtn.addEventListener("click", connectUser);
    document.getElementById("connectStatus").innerHTML = "Disconnect"
    console.log('connect button');
}

function connectUser(event) {
    event.preventDefault();

    const inputEmailValue = email.value;
    const inputPasswordValue = password.value;

    const url = '/';

    user = {
        email: inputEmailValue,
        password: inputPasswordValue,
    };
    fetch (url, {
        method: 'POST',
        headers: {"Content-Type": "application/json",},
        body: JSON.stringify(user),
    }) .then(response =>  response.text())
     .then(result => {
        // main.innerHTML = ''
        main.innerHTML = result;

        let scripts = main.querySelectorAll('script');
        for (let i = 0; i < scripts.length; i++) {
                
    
              // 3. On construit un nouvel élément script, auquel on donne la bonne source :
              let script = document.createElement('script');
              script.src = scripts[i].src;
    
              // 4. On enlève l'ancienne balise script et on ajoute la nouvelle :
              main.removeChild(scripts[i]);
              main.appendChild(script);
            
          }
        })

    }


