let compteur2 = 0;
let timer2, elements2, slides2, slideWidth2, speed2, transition2;

window.onload = () => {
    const diapo2 = document.querySelector(".diapo2");
    speed2 = diapo2.dataset.speed;
    transition2 = diapo2.dataset.transition;
    elements2 = document.querySelector(".elements2");
    let firstImage = elements2.firstElementChild.cloneNode(true);
    elements2.appendChild(firstImage);
    slides2 = Array.from(elements2.children);
    slideWidth2 = diapo2.getBoundingClientRect().width;
    let next = document.querySelector("#droite2");
    let prev = document.querySelector("#gauche2");

    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slideprev);
    timer2 = setInterval(slideNext, speed2);
    diapo2.addEventListener("mouseover", stopTimer);
    diapo2.addEventListener("mouseout", startTimer);

}

function slideNext() {

    compteur2++;
    elements2.style.transition = transition2 + "ms linear";
    let decal = -slideWidth2 * compteur2;
    elements2.style.transform = `translateX(${decal}px)`;
    setTimeout(function () {
        if (compteur2 >= slides2.length - 1) {
            compteur2 = 0;
            elements2.style.transition = "unset";
            elements2.style.transform = "translateX(0)";
        }
    }, transition2);
}

function slideprev() {
    compteur2--;
    elements2.style.transition = transition2 + "ms linear";
    if (compteur2 < 0) {
        compteur2 = slides2.length - 1
        let decal = -slideWidth2 * compteur2;
        elements2.style.transition = "unset";
        elements2.style.transform = `translateX(${decal}px)`;
        setTimeout(slideprev, 1);
    }
    let decal = -slideWidth2 * compteur2;
    elements2.style.transform = `translateX(${decal}px)`;

}

function stopTimer() {
    clearInterval(timer2);
}

function startTimer() {
    timer2 = setInterval(slideNext, speed2);
}