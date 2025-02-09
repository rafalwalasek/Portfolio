const startTime = 1;
let time = startTime * 60;

function countdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    seconds = seconds < 10 ? '0' + seconds : seconds;
 
    const countdownElements = document.querySelectorAll('.countdown');
    countdownElements.forEach(element => {
        element.innerHTML = `${minutes}:${seconds}`;
    });

    if(time <= 0) {
        countdownElements.forEach(element => {
            element.innerHTML = 'Czas upłynął, wynik: 0 / 20';
        });
        clearInterval(intervalId);
    }

    time--;
}
let intervalId = setInterval(countdown, 1000);

// document.querySelectorAll('.btn-exit').forEach(button => {
//     button.addEventListener('click', () => {
//         clearInterval(intervalId);
//         const countdownElements = document.querySelectorAll('.countdown');
//         countdownElements.forEach(element => {
//             element.innerHTML = 'Odliczanie zatrzymane';
//         });
//     });
// });