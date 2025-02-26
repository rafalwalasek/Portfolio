const initSlider = () => {
    const slideIcons = document.querySelectorAll(".slider-wrapper i");
    const sliderCardList = document.querySelector(".slider-wrapper .cards-list");

    slideIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            const direction = icon.id === "prev-slide" ? -1 : 1;
            const scrollAmount = sliderCardList.offsetWidth * direction;
            sliderCardList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });
}

window.addEventListener("load", initSlider);