function login_prompt()
{
    var login = window.prompt("Введите имя пользователя базы данных");
    var password = window.prompt("Введите пароль базы данных");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "admin.php")
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    
    let data = `{
        "login": ${login},
        "password": ${password}, 
    }`;

    xhr.send(data)
}