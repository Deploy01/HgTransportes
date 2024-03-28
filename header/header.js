const linksId = document.querySelector(".links")
const barId = document.getElementById("bar")
const menu = document.getElementById("menu")
const displayMenu = document.getElementById("display_menu")
let check = 0

barId.style.cursor = "pointer"

barId.addEventListener("click", ()=> {
    if (linksId.style.display !== "flex") {
        linksId.style.display = "flex"
        } else {
        linksId.style.display = "none"

        }
})

displayMenu.style.display = "none"

menu.addEventListener("click", ()=> {
    if(displayMenu.style.display === "none") {
        displayMenu.style.display = "flex"

    } else {
        displayMenu.style.display = "none"
    }

})