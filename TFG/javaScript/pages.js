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

function nextPageB(){
    if (numPag<7) {
        ++numPag;
        menuFoodB.src = 'images/menu/'+numPag+'.jpg';
        pageDisplayB.value= numPag+'/7';
    }

    else{
        nextButtonB.classList.add('shaking');
        setTimeout(()=>{nextButtonB.classList.remove('shaking')}, 500);
    }
}

function prevPageB(){
    if (numPag>1) {
        --numPag;
        menuFoodB.src = 'images/menu/'+numPag+'.jpg';
        pageDisplayB.value= numPag+'/7';
    }

    else{
        prevButtonB.classList.add('shaking');
        setTimeout(()=>{prevButtonB.classList.remove('shaking')}, 500);
    }
}

function showMenuB() {
    console.log(menuBigDiv);
    if (menuBigDiv.style.display == 'none') {
        menuBigDiv.style.display = 'flex';
        console.log('abriendo');
    }

    else{
        menuBigDiv.style.display = 'none';
    }
}

botonNav.addEventListener('click', function () {
    if (header.style.left == '100%') {
        header.style.left = '50%';
        header.style.boxShadow = '0.5px 0 5px #171717';
        divEncima.style.display = 'block';
        navB.classList.toggle('open');
    }

    else{
        header.style.left = '100%';
        header.style.boxShadow = '0 0 0 0';
        divEncima.style.display = 'none';
        navB.classList.toggle('open');
        console.log('cerrando');
    }
});

