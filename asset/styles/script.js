let index = 1;
slider(index);

function slider(i) {
    let x;
    let carousel = document.getElementsByClassName("slider");
    if (i > carousel.length) {
        index = 1;
    } else if (i < 1) {
        index = carousel.length
    }
    for (let i = 0; i < carousel.length; i++) {
        carousel[i].style.display = "none";
    }

    carousel[index - 1].style.display = "block";

}

function move(i) {
    slider(index += i);
}