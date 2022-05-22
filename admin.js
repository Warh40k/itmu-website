function login_prompt()
{
    var login = window.prompt("Введите имя пользователя базы данных");
    var password = window.prompt("Введите пароль базы данных");
    if(login != "" && password != "")
        window.location.href = 'admin.php?login=' + login + '&password=' + password;
    else
        window.alert("Не все поля были заполнены")
}