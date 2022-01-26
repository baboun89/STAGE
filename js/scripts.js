window.onload = () => {
    // burger
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });
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
    circle = L.circle([47.98622964420287, 3.1468578252925234], {
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