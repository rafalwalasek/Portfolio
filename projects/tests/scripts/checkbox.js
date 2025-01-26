//pobieranie z konkretnego formularza
const form = document.getElementById('update-question-form');
//pobieranie checkboxow
const checkboxes = form.querySelectorAll('.update-checkbox');
//pobieranie przycisku
const submitButton = form.querySelector('button[type="submit"]');

//sprawdzanie stanu pol
function checkFields() {
    //spr czy jakies pole jest aktywne
    const isAnyFieldEnabled = Array.from(checkboxes).some(checkbox => {
        const targetElement = form.querySelector(`[name="${checkbox.dataset.target}"]`);
        return !targetElement.disabled;
    });

    //aktywacja lub dezaktywacja przycisku
    submitButton.disabled = !isAnyFieldEnabled;
    return !isAnyFieldEnabled;
}

//nasluchiwanie zdarzen checkboxow
checkboxes.forEach(checkbox => {

    checkbox.addEventListener('change', function() {
        //pobieranie celu na podstawie data-target
        const targetName = this.dataset.target;
        const targetElement = form.querySelector(`[name="${targetName}"]`);

        //wlaczenie lub wylaczenie pola
        targetElement.disabled = !this.checked;

        //spr pol i ustawienie przycisku
        checkFields();
    });

});

//zdarzenia formularza
form.addEventListener('submit', function(event) {
    if(!checkFields()) {
        event.preventDefault(); //zatrzymanie wysylania formularza
        alert('Przynajmniej jedno pole musi być aktywne.');
    }
});

//poczatkowa weryfikacja stanu pol
checkFields();