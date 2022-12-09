function nextPage(){
    if (numPag<7) {
        ++numPag;
        menuFood.src = 'images/menu/'+numPag+'.jpg';
        pageDisplay.value= numPag+'/7';
    }

    else{
        nextButton.classList.add('shaking');
        setTimeout(()=>{nextButton.classList.remove('shaking')}, 500);
    }
}

function prevPage(){
    if (numPag>1) {
        --numPag;
        menuFood.src = 'images/menu/'+numPag+'.jpg';
        pageDisplay.value= numPag+'/7';
    }

    else{
        prevButton.classList.add('shaking');
        setTimeout(()=>{prevButton.classList.remove('shaking')}, 500);
    }
}

botonNav.addEventListener('click', function () {
    console.log('botonNAv');
    if (header.style.left == '100%') {
        header.style.left = '50%';
        header.style.boxShadow = '0.5px 0 5px #171717';
        divEncima.style.display = 'block';
        navB.classList.toggle('menosOscuro');
    }

    else{
        header.style.left = '100%';
        header.style.boxShadow = '0 0 0 0';
        divEncima.style.display = 'none';
        navB.classList.toggle('menosOscuro');
        console.log('cerrando');
    }
});