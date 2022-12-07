desplegables.forEach(element => {
    element.addEventListener('click', function () {
        Array.from(element.parentElement.childNodes).forEach(hijo =>{
            console.log(hijo);
            if (hijo.tagName == 'UL') {
                hijo.classList.toggle('abierto');
            }

            if (hijo.tagName == 'I') {
                hijo.classList.toggle('fa-chevron-down');
                hijo.classList.toggle('fa-chevron-up');
            }
        });
    });
});

desplegables2.forEach(element => {
    element.addEventListener('click', function () {
        Array.from(element.parentElement.childNodes).forEach(hijo =>{
            console.log(hijo);
            if (hijo.tagName == 'UL') {
                hijo.classList.toggle('abierto');
            }

            if (hijo.tagName == 'I') {
                hijo.classList.toggle('fa-chevron-down');
                hijo.classList.toggle('fa-chevron-up');
            }
        });
    });
});