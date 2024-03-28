const linksId = document.querySelector(".links")
const barId = document.getElementById("bar")

barId.addEventListener("click", ()=> {
    if (linksId.style.display !== "flex") {
        linksId.style.display = "flex"
        
        } else {
        linksId.style.display = "none"

        }
})