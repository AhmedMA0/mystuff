function printForm(option) {
    if (option=='home') {
        buttons.style.display="none";
        formHome.style.display="table";
    }
}

function hideUserPart(){

    if (!nombreField.value.match(nombreRegex)){
        nombreLabel.classList.add('shaking');
        setTimeout(()=>{nombreLabel.classList.remove('shaking')}, 500);
    }

    if (!tlfField.value.match(tlfRegex)){
        tlfLabel.classList.add('shaking');
        setTimeout(()=>{tlfLabel.classList.remove('shaking')}, 500);
    }

    if (dirField.value.length <= 9){
        dirLabel.classList.add('shaking');
        setTimeout(()=>{dirLabel.classList.remove('shaking')}, 500);
    }

    if (nombreField.value.match(nombreRegex) && tlfField.value.match(tlfRegex) && dirField.value.length > 9) {
        userPart.style.display='none';
        pedidoPart.style.display='block';
    }        
}