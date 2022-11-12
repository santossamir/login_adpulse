async function handleSubmitForm(e){
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    let xhr = new XMLHttpRequest();
    xhr.overrideMimeType('text/xml');
    
    xhr.onload = () => {
        if(xhr.readyState === 4){
            if(xhr.status === 200){
                console.log(xhr);
                window.location.href = xhr.responseURL; 
            }else{
                console.log(xhr.responseText);
            }
        }
    }
    xhr.open('post', 'user_controller.php?acao=login', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(`username=${username}&password=${password}`)
}