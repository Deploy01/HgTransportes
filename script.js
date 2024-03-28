const carrossel = document.getElementById("carrossel");
const btnLeft= document.getElementById("left")
const btnRight= document.getElementById("right")
const widthCard = carrossel.querySelector(".card").offsetWidth



let usingMouse = false, startX, startScrollLeft



btnRight.addEventListener("click", () => {
    carrossel.scrollLeft += widthCard
})

btnLeft.addEventListener("click", () => {
    carrossel.scrollLeft -= widthCard
})

carrossel.addEventListener("mousemove", (e) => {
    if (!usingMouse) return
    carrossel.scrollLeft = startScrollLeft - (e.pageX - startX)
})

carrossel.addEventListener("mousedown", (e) => {
    usingMouse = true
    carrossel.classList.add("dragging")
    startX = e.pageX
    startScrollLeft = carrossel.scrollLeft
})
document.addEventListener("mouseup", ()=> {
    usingMouse = false
    carrossel.classList.remove("dragging")
})

