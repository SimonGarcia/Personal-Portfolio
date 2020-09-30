const btnSwitch = document.querySelector('#switch');
btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
})

function changeImage() {
    let image = document.getElementById('logo');
    if (image.src.match("black")) {
        image.src = "../images/logo/white.png";
    } else {
        image.src = "../images/logo/black.png";
    }
}