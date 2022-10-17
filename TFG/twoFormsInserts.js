function printForm(option) {
    if (option=='prod') {
        prodButton.style.display="none";
        catButton.style.display="inline-flex";
        prodForm.style.display="block";
        catForm.style.display="none";
    }

    else{
        catButton.style.display="none";
        catForm.style.display="block";
        prodButton.style.display="inline-flex";
        prodForm.style.display="none";
    }
}