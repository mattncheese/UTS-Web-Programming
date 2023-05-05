const handleClickDetail = (e) => {
    const id = e.target.innerHTML;
    document.getElementById("coffeeInput").value = id;
    unhideModal();
};

const coffess = document.getElementsByClassName("coffeeContainer");

if (coffess.length > 0) {
    console.log(coffess[0]);
    for (let i = 0; i < coffess.length; i++) {
        coffess[i].addEventListener("click", handleClickDetail);
    }
}

const hideModal = () =>
    (document.getElementById("modal").style.display = "none");
const unhideModal = () =>
    (document.getElementById("modal").style.display = "block");

const handleNoButton = () => {
    hideModal();
};

const noBtn = document.getElementById("noBtn");
if (noBtn) {
    noBtn.addEventListener("click", hideModal);
}
