const monthsTab = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const date = new Date();
const month = document.getElementById("months");
const year = document.getElementById("years");
const dayToday = date.getDay();

month.innerHTML = monthsTab[date.getMonth()];
year.innerHTML = date.getFullYear();

function generateDays(month, year) {
    const daysDiv = document.getElementById("days");
    daysDiv.innerHTML = "";

    const firstDay = new Date(year, month - 1, 1).getDay();
    const daysInMonth = new Date(year, month, 0).getDate();

    for(let i = 1; i < firstDay; i++) {
        const emptyDiv = document.createElement("div");
        emptyDiv.classList.add("empty-day");
        daysDiv.appendChild(emptyDiv);
    }

    for(let day = 1; day <= daysInMonth; day++) {
        const dayElement = document.createElement("div");
        dayElement.classList.add("day");
        dayElement.textContent = day;
        daysDiv.appendChild(dayElement);
    }
}
generateDays(3, 2025);