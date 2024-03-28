const orcamento = document.getElementById("orcamento")
const orcamento2 = document.getElementById("orcamento2")
const orcamento3 = document.getElementById("orcamento3")
const orcamento4 = document.getElementById("orcamento4")
const orcamento5 = document.getElementById("orcamento5")
const orcamento6 = document.getElementById("orcamento6")
const orcamento7 = document.getElementById("orcamento7")
const opacityDisplay = document.getElementById("containerServicos")
const Body = document.getElementById("body-test")
const Header = document.getElementById("header")
const Banner = document.getElementById("banner")
const orcamentoDisplay = document.getElementById("orcamento-display")

const exitId = document.getElementById("exit-icon-id")

const barId = document.getElementById("bar")

const linksId = document.querySelector(".links")
// botao sair
exitId.addEventListener("click", () => {
  if (orcamentoDisplay.style.display === "flex") {
    orcamentoDisplay.style.display = "none"
  }
  opacityDisplay.style.opacity = "100%"
  Header.style.opacity = "100%"
  Banner.style.opacity = "100%"
  Body.style.overflow = "scroll"
  Body.style.overflowX = "hidden"
});

// botoes
orcamento.addEventListener("click", () => {
  if (orcamentoDisplay.style.display !== "flex") {
    orcamentoDisplay.style.display = "flex"
    }
    opacityDisplay.style.opacity = "10%"
    Header.style.opacity = "10%"
    Banner.style.opacity = "40%"
    Body.style.overflow = "hidden"

});

orcamento2.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Header.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

orcamento3.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Header.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

orcamento4.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Header.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

orcamento5.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Header.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

orcamento6.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Header.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

orcamento7.addEventListener("click", () => {
    if (orcamentoDisplay.style.display !== "flex") {
        orcamentoDisplay.style.display = "flex"
        }
        opacityDisplay.style.opacity = "10%"
        Banner.style.opacity = "10%"
        Header.style.opacity = "10%"
        Body.style.overflow = "hidden"
        
});

barId.addEventListener("click", ()=> {
    if (linksId.style.display !== "flex") {
        linksId.style.display = "flex"
        
        } else {
        linksId.style.display = "none"

        }
})