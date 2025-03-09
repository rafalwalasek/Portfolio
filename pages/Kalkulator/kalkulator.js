const inputField = document.getElementById("inputField");
const buttons = document.querySelectorAll(".btn-calc");

buttons.forEach(button => {

    button.addEventListener("click", function() {

        if(this.value === "=") {
            if(inputField.value.includes("/") && inputField.value.split("/")[1] == 0) {
                inputField.value = "Blad dzielenia przez 0";
            } else {
                inputField.value = eval(inputField.value);
            }
        } else if(this.value === "C") {
            inputField.value = "";
        } else if(this.value === "%") {
            inputField.value = (parseFloat(inputField.value) * 0.01).toString();
        } else {
            inputField.value += this.value;
        }

    });

});