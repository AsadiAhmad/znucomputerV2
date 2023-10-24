function onClickModal(element) {
    document.getElementById("image-modal").src = element.src;
    document.getElementById("Modal").style.display = "block";
    document.getElementById("caption").innerHTML = element.alt;
}

function modalExit() {
    document.getElementById("Modal").style.display = "none";
}