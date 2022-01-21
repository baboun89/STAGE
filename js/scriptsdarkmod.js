window.onload = () => {
    let themeLink = document.getElementById("theme-link")
    if (localStorage.theme != null) {
        themeLink.href = `css/styles_${localStorage.theme}.css`

    } else {
        themeLink = "css/styles_clair.css"
        localStorage.theme = "clair"
    }
    // document.getElementById("theme").addEventListener("click", function(){
    //     if (localStorage.theme == "clair") {
    //         localStorage.theme = "sombre"
    //         this.innertext = "thème clair"
    //     } else {
    //         localStorage.theme = "clair"
    //         this.innertext = "thème sombre"
    //     }
    // })
}