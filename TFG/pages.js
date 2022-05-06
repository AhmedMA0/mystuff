function nextPage(){
    if (numPag<7) {
        ++numPag;
        menuFood.src = 'images/menu/'+numPag+'.jpg';
        console.log(menuFood);
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
        console.log(menuFood);
    }

    else{
        prevButton.classList.add('shaking');
        setTimeout(()=>{prevButton.classList.remove('shaking')}, 500);
    }
}