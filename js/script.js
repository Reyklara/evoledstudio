let menuH = document.querySelector(".menuH")
const menus = document.querySelector("#menus")
let clicou = false

menuH.addEventListener("click", () => {
    if (!clicou) {
        menus.style.display = 'block'
        clicou = true
    } else {
        menus.style.display = 'none'
        clicou = false
    }
})