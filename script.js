document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".image");
    const imageTexts = document.querySelectorAll(".image-text");

    images.forEach((image, index) => {
        image.addEventListener("click", () => {
            imageTexts.forEach(text => {
                text.style.display = "none";
            });
            imageTexts[index].style.display = "block";
        });
    });
});
