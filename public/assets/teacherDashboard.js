const codeBtn = document.getElementById('codeBtnMorning');
const codeResult = document.getElementById('displayCode');

codeBtn.addEventListener("click", function() {

  
        // Generate a 5-digit random number
        const randomNumber = Math.floor(10000 + Math.random() * 90000);

        // Display the random number
        codeResult.textContent = randomNumber;
        codeBtn.style.color = 'black';
        codeBtn.style.border = '#FFFF00';
        codeBtn.style.backgroundColor = '#FFFF00';
        codeBtn.textContent = 'Signature in progress';

        // AJAX call to send the random number to the server
        const xhr = new XMLHttpRequest();
        const url = '/teacher'; // Replace with your server endpoint

        xhr.open('POST', url);
        xhr.setRequestHeader('Content-Type', 'application/json');

        // Send the random number to the server
        xhr.send(JSON.stringify({ randomNumber }));

        // Handle response from the server
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Server response is successful
                console.log('Server response:', xhr.responseText);
            } else {
                // Server response failed
                console.error('Error:', xhr.statusText);
            }
        };

        // Handle network errors
        xhr.onerror = function() {
            console.error('Network Error');
        };
    });



