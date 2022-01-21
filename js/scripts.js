window.onload = () => {
    // burger
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });
    // DIAPORAMA 1
    let compteur = 0;
    let timer, elements, slides, slideWidth, speed, transition;

    const diapo = document.querySelector(".diapo");
    speed = diapo.dataset.speed;
    transition = diapo.dataset.transition;
    elements = document.querySelector(".elements");
    let firstImage = elements.firstElementChild.cloneNode(true);
    elements.appendChild(firstImage);
    slides = Array.from(elements.children);
    slideWidth = diapo.getBoundingClientRect().width;
    let next = document.querySelector("#droite");
    let prev = document.querySelector("#gauche");

    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slideprev);
    timer = setInterval(slideNext, speed);
    diapo.addEventListener("mouseover", stopTimer);
    diapo.addEventListener("mouseout", startTimer);

    function slideNext() {

        compteur++;
        elements.style.transition = transition + "ms linear";
        let decal = -slideWidth * compteur;
        elements.style.transform = `translateX(${decal}px)`;
        setTimeout(function () {
            if (compteur >= slides.length - 1) {
                compteur = 0;
                elements.style.transition = "unset";
                elements.style.transform = "translateX(0)";
            }
        }, transition);
    }

    function slideprev() {
        compteur--;
        elements.style.transition = transition + "ms linear";
        if (compteur < 0) {
            compteur = slides.length - 1
            let decal = -slideWidth * compteur;
            elements.style.transition = "unset";
            elements.style.transform = `translateX(${decal}px)`;
            setTimeout(slideprev, 1);
        }
        let decal = -slideWidth * compteur;
        elements.style.transform = `translateX(${decal}px)`;

    }

    function stopTimer() {
        clearInterval(timer);
    }

    function startTimer() {
        timer = setInterval(slideNext, speed);
    }
    // DIAPORAMA 2
    // let compteur2 = 0;
    // let timer2, elements2, slides2, slideWidth2, speed2, transition2;

    // function slideNext() {

    //     compteur2++;
    //     elements2.style.transition = transition2 + "ms linear";
    //     let decal = -slideWidth2 * compteur2;
    //     elements2.style.transform = `translateX(${decal}px)`;
    //     setTimeout(function () {
    //         if (compteur2 >= slides2.length - 1) {
    //             compteur2 = 0;
    //             elements2.style.transition = "unset";
    //             elements2.style.transform = "translateX(0)";
    //         }
    //     }, transition2);
    // }

    // function slideprev() {
    //     compteur2--;
    //     elements2.style.transition = transition2 + "ms linear";
    //     if (compteur2 < 0) {
    //         compteur2 = slides2.length - 1
    //         let decal = -slideWidth2 * compteur2;
    //         elements2.style.transition = "unset";
    //         elements2.style.transform = `translateX(${decal}px)`;
    //         setTimeout(slideprev, 1);
    //     }
    //     let decal = -slideWidth2 * compteur2;
    //     elements2.style.transform = `translateX(${decal}px)`;

    // }

    // function stopTimer() {
    //     clearInterval(timer2);
    // }

    // function startTimer() {
    //     timer2 = setInterval(slideNext, speed2);
    // }
    // const diapo2 = document.querySelector(".diapo2");
    // speed2 = diapo2.dataset.speed;
    // transition2 = diapo2.dataset.transition;
    // elements2 = document.querySelector(".elements2");
    // let firstImage2 = elements2.firstElementChild.cloneNode(true);
    // elements2.appendChild(firstImage2);
    // slides2 = Array.from(elements2.children);
    // slideWidth2 = diapo2.getBoundingClientRect().width;
    // let next2 = document.querySelector("#droite2");
    // let prev2 = document.querySelector("#gauche2");

    // next2.addEventListener("click", slideNext);
    // prev2.addEventListener("click", slideprev);
    // timer2 = setInterval(slideNext, speed2);
    // diapo2.addEventListener("mouseover", stopTimer);
    // diapo2.addEventListener("mouseout", startTimer);

    // MAP
    src = "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity = "sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin = ""
    var carte = L.map('carte').setView([47.98622964420287, 3.1468578252925234], 9);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYmFib3VuODkiLCJhIjoiY2t5MzA0aGxlMGZyaTJ2bDV4djc3MWpxdiJ9.kM_F2vUHBVcR9tPUZxIitw'
    }).addTo(carte);
    var marqueur = L.marker([47.98622964420287, 3.1468578252925234]).addTo(carte);
    marqueur.bindPopup("<b>Entreprise</b><br>SAS Vallee").openPopup();
    var circle = L.circle([47.98622964420287, 3.1468578252925234], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 10000
    }).addTo(carte);
    // MODE SOMBRE
    let themeLink = document.getElementById("theme-link")
    if (localStorage.theme != null) {
        themeLink.href = `css/styles_${localStorage.theme}.css`

    } else {
        themeLink = "css/styles_clair.css"
        localStorage.theme = "clair"
    }
    document.getElementById("theme").addEventListener("click", function () {
        if (localStorage.theme == "clair") {
            localStorage.theme = "sombre"
            this.innertext = "thème clair"
        } else {
            localStorage.theme = "clair"
            this.innertext = "thème sombre"
        }
        themeLink.href = `css/styles_${localStorage.theme}.css`

    })
}