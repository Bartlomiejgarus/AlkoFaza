const favoriteButtons = document.querySelectorAll(".heart-button");

function makefavorite() {
    const button = this;
    const container = button.parentElement.parentElement;
    const favoriteNumber = container.querySelector(".heart-number");
    const id = container.getAttribute("id");

    fetch(`/favorite/${id}`)
        .then(function () {
            favoriteNumber.innerHTML = parseInt(favoriteNumber.innerHTML) + 1;
        });
}

favoriteButtons.forEach(button => button.addEventListener("click", makefavorite));