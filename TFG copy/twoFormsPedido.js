function printForm(option) {
    formsDiv.style.display="block";

    if (option=='home') {
        buttons.style.display="none";
        formHome.style.display="table";
    }

    else{
        buttons.style.display="none";
        formPick.style.display="table";
    }
}

function hideUserPart(){

    if (!nombreField.value.match(nombreRegex)){
        nombreField.classList.add('shaking');
        setTimeout(()=>{nombreField.classList.remove('shaking')}, 500);
    }

    if (!tlfField.value.match(tlfRegex)){
        tlfField.classList.add('shaking');
        setTimeout(()=>{tlfField.classList.remove('shaking')}, 500);
    }

    if (dirField.value.length <= 9){
        dirField.classList.add('shaking');
        setTimeout(()=>{dirField.classList.remove('shaking')}, 500);
    }

    if (nombreField.value.match(nombreRegex) && tlfField.value.match(tlfRegex) && dirField.value.length > 9) {
        userPart.style.display='none';
        pedidoPart.style.display='block';
    }        
}

function hideUserPartPick(){

    if (!nombreFieldPick.value.match(nombreRegex)){
        nombreFieldPick.classList.add('shaking');
        setTimeout(()=>{nombreFieldPick.classList.remove('shaking')}, 500);
    }

    if (!tlfFieldPick.value.match(tlfRegex)){
        tlfFieldPick.classList.add('shaking');
        setTimeout(()=>{tlfFieldPick.classList.remove('shaking')}, 500);
    }

    if (nombreFieldPick.value.match(nombreRegex) && tlfFieldPick.value.match(tlfRegex)) {
        userPartPick.style.display='none';
        prodPartPick.style.display='block';
    }        
}

function showUserPart() {
    userPart.style.display='block';
    pedidoPart.style.display='none';
}

function showUserPartPick() {
    userPartPick.style.display='block';
    prodPartPick.style.display='none';
}

/*cardCB.addEventListener('change', function checkEnable() {
    if (this.checked) {
        cambCB.disabled = false;
        console.log('enabling');
    }

    else{
        cambCB.disabled= true;
        if (cambCB.checked) {
            cambCB.checked = false;
        }
        console.log('disabling');

    }
}); */

cardCB.addEventListener('change', function () {
    if (this.checked) {
        cambCB.checked = false;
    }
});

cambCB.addEventListener('change', function () {
    if (this.checked) {
        cardCB.checked = false;
    }
});

function hidePedPart() {
    pedidoPart.style.display='none';
    prodPart.style.display='block';
}

function showPedPart() {
    pedidoPart.style.display='block';
    prodPart.style.display='none';
}

checkBoxes.forEach(cb => {
    cb.addEventListener('change', function () {
        if (document.getElementById(cb.name.replace('Prod','Cant')).disabled == false) {    
            document.getElementById(cb.name.replace('Prod','Cant')).disabled = true;
            document.getElementById(cb.name.replace('Prod','CantPick')).disabled = true;
        }

        else{
            document.getElementById(cb.name.replace('Prod','')+'Cant').disabled = false;
            document.getElementById(cb.name.replace('Prod','')+'CantPick').disabled = false;
        }


    })
});


