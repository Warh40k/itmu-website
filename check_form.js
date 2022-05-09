function checkIt(){
    let inputs = document.getElementsByTagName('input');
    
    for (var i=0; i<inputs.length - 1;i++ ) {
        if (inputs[i].type == "radio" || inputs[i].type == "checkbox") {
            ischecked = false;
            radios = document.getElementsByName(inputs[i].name)
            for (var j=0; j< radios.length; j++) {
                if (radios[j].checked)
                    ischecked = true;
            }
            if (ischecked == false) {
                alert("Ошибка: не все поля были заполнены");
                return false;
            }
        }
        if (inputs[i].value == ""){
            alert("Ошибка: не все поля были заполнены");
            return false;
        }
    }
    return true;
}
    
    
    