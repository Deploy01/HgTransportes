const orcamentos = document.querySelectorAll("[id^='orcamento']")
const opacityDisplay = document.getElementById("containerServicos")
const Header = document.getElementById("header")
const Banner = document.getElementById("banner")
const orcamentoDisplay = document.getElementById("orcamento-display")
const exitId = document.getElementById("exit-icon-id")

// botoes
orcamentos.forEach(orcamento => {
    orcamento.addEventListener("click", () => {
        orcamentoDisplay.style.display = "flex"
        opacityDisplay.style.opacity = "10%"
        Header.style.opacity = "10%"
        Banner.style.opacity = "40%"
        document.body.style.overflow = "hidden"

    });
})


// botao sair
exitId.addEventListener("click", (event) => {
    orcamentoDisplay.style.display = "none"
    opacityDisplay.style.opacity = "100%"
    Header.style.opacity = "100%"
    Banner.style.opacity = "100%"
    document.body.style.overflow = "scroll"
    event.stopPropagation();
});
