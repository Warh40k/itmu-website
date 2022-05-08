function checkIt(){
    let inputs = document.getElementsByTagName('input');
    let selects = document.getElementsByTagName('select');
    
    for (var i=0; i<inputs.length - 1;i++ ) {
        if (inputs[i].value == ""){
            alert("Ошибка: не все поля были заполнены");
            return false;
        }
        
    }
    
return true;}