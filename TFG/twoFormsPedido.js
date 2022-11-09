function printForm(option) {
    if (option=='home') {
        buttons.style.display="none";
        formHome.style.display="table";
    }
}

function hideUserPart(){

    if (nombreField.value.length == 0){
        nombreLabel.classList.add('shaking');
        setTimeout(()=>{nombreLabel.classList.remove('shaking')}, 500);
    }

    if (dirField.value.length == 0){
        dirLabel.classList.add('shaking');
        setTimeout(()=>{dirLabel.classList.remove('shaking')}, 500);
    }

    if (tlfField.value.length == 0){
        tlfLabel.classList.add('shaking');
        setTimeout(()=>{tlfLabel.classList.remove('shaking')}, 500);
    }

    if (nombreField.value.length != 0 && dirField.value.length != 0 && tlfField.value.length != 0) {
        userPart.style.display='none';
        pedidoPart.style.display='block';
    }        
    
}