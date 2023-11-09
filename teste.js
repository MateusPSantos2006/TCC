var tam = 1.0
function mudaFonte(tipo,elemento) {

  
    if (tipo=="mais") {
        if(tam<1.5)tam+=0.1 
        createCookie("fonte",tam,365)
    } else if(tipo=="menos") {
        if(tam>0.5) tam -=0.1 
        createCookie("fonte",tam,365)
    } else {
        if(tam>0.95 || tam<1.1) tam = 1.0
        createCookie("fonte", tam,365)
    }

    
    var list = document.body.querySelectorAll(".txtFontC") 
	for (var i = 0; i < list.length; ++i) {
        var item = list[i]
        item.style.fontSize = tam+"rem"
	}
    
}


function mudaStyleSheet(sheet) {
    var baseUrl = window.location.origin + '/javascript/acessibilidade/css/' 
    var styleUrl = baseUrl + sheet
    document.getElementById("styleContraste").setAttribute('href', styleUrl)
}

function mudaContraste() {
    var btnStyle = document.getElementById('mudaEstilo') 
    var btnActive = btnStyle.classList.contains('active') 

    if (btnActive) {
       
        btnStyle.className = 'btn btn-dark btn-sm'
        btnStyle.innerHTML = 'PRETO'
        mudaStyleSheet('style.css')
        createCookie("styleSheet", 'style.css',365)
    } else {
       
        btnStyle.className = 'active btn btn-light btn-sm'
        btnStyle.innerHTML = 'BRANCO'
        mudaStyleSheet('contraste.css')
        createCookie("styleSheet", 'contraste.css',365)
    }

}


function createCookie(name,value,days){
    if (days) {
        var date = new Date()
        date.setTime(date.getTime()+(days*24*60*60*1000))
        var expires = "; expires=" + date.toGMTString()
    } else var expires = ""
    document.cookie = name+"="+value+expires+"; path=/"
}


function readCookie(name) {
    var nameEQ = name + "="
    var ca = document.cookie.split(";")
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==" ") c = c.substring(1,c.length)
        if(c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length)
    }
    return null
}


function checkCookie() {

    var fontC = readCookie("fonte");
    var list = document.body.querySelectorAll(".txtFontC")
    if (fontC != "") {
        for (var i = 0; i < list.length; ++i) {
            var item = list[i]
            item.style.fontSize = fontC+"rem"
        }
    }

    var contrasteCookie = readCookie('styleSheet')
    if (contrasteCookie != "") {
        var btnStyle = document.getElementById('mudaEstilo')
        var btnActive = btnStyle.classList.contains('active')

        if (contrasteCookie === 'contraste.css') {
            btnStyle.className = 'active btn btn-light btn-sm'
            btnStyle.innerHTML = 'BRANCO'
            mudaStyleSheet('contraste.css')
        } else if(contrasteCookie === 'style.css'){
            btnStyle.className = 'btn btn-dark btn-sm'
            btnStyle.innerHTML = 'PRETO'
        }else {
            console.log('nada')
        }
    }

}
