const clickDiv = document.getElementById("sobreNos")
const clickDiv2 = document.getElementById("sobreNos2")
const clickDiv3 = document.getElementById("sobreNos3")
const clickDiv4 = document.getElementById("sobreNos4")
const containerPages = document.getElementById("containerPages")
const containerPages2 = document.getElementById("containerPages2")
const containerPages4 = document.getElementById("containerPages4")

const containerPagesHidden = document.getElementById("containerPagesHidden")

clickDiv.addEventListener('click', ()=> {
    if(containerPages.style.display !== "flex"){
        containerPages.style.display = "flex"
        containerPages2.style.display = "none"
        containerPages3.style.display = "none"
        containerPages4.style.display = "none"
    }
})

clickDiv2.addEventListener('click', ()=> {


    if(containerPages2.style.display !== "flex"){
        containerPages.style.display = "none"
        containerPages2.style.display = "flex"
        containerPages3.style.display = "none"
        containerPages4.style.display = "none"
    } 
})

clickDiv3.addEventListener('click', ()=> {


    if(containerPages3.style.display !== "flex"){
        containerPages.style.display = "none"
        containerPages2.style.display = "none"
        containerPages3.style.display = "flex"
        containerPages4.style.display = "none"
    } 
})

clickDiv4.addEventListener('click', ()=> {


    if(containerPages4.style.display !== "flex"){
        containerPages.style.display = "none"
        containerPages2.style.display = "none"
        containerPages3.style.display = "none"
        containerPages4.style.display = "flex"
    } 
})

// responsividade 748


// fixar tela

const pontoFixo = 180

window.addEventListener('scroll', ()=> {

    if (window.pageYOffset >= pontoFixo) {
        containerPages.style.position = 'sticky'
        containerPages.style.top = '0'
        containerPages.style.right = '0'
        containerPages.style.marginTop = '0px'
        containerPages.style.marginBottom = '0'
        containerPages.style.width = '58.150294117647064vw'

    } else {
        containerPages.style.position = 'sticky'
        containerPages.style.marginTop = '30px'

    }
})

window.addEventListener('scroll', ()=> {
    if (window.pageYOffset >= pontoFixo) {
        containerPages2.style.position = 'sticky'
        containerPages2.style.top = '0'
        containerPages2.style.right = '0'
        containerPages2.style.marginTop = '0px'
        containerPages2.style.marginBottom = '0'
        containerPages2.style.width = '58.150294117647064vw'

    } else {
        containerPages2.style.position = 'sticky'
        containerPages2.style.marginTop = '30px'

    }
})

window.addEventListener('scroll', ()=> {
    if (window.pageYOffset >= pontoFixo) {
        containerPages3.style.position = 'sticky'
        containerPages3.style.top = '0'
        containerPages3.style.right = '0'
        containerPages3.style.marginTop = '0px'
        containerPages3.style.marginBottom = '0'
        containerPages3.style.width = '58.150294117647064vw'

    } else {
        containerPages3.style.position = 'sticky'
        containerPages3.style.marginTop = '30px'

    }
})

window.addEventListener('scroll', ()=> {
    if (window.pageYOffset >= pontoFixo) {
        containerPages4.style.position = 'sticky'
        containerPages4.style.top = '0'
        containerPages4.style.right = '0'
        containerPages4.style.marginTop = '0px'
        containerPages4.style.marginBottom = '0'
        containerPages4.style.width = '58.150294117647064vw'

    } else {
        containerPages4.style.position = 'sticky'
        containerPages4.style.marginTop = '30px'

    }
})
