//aplica comum config a todos elementos comumConfig (requisicao)
let feedbackElements = document.getElementsByClassName('feedback')
for (let i = 0; i < feedbackElements.length; i++) {
	feedbackElements[i].addEventListener('click', comumConfig)
}

//comum config
function comumConfig() {
	feedback = ''

	requisicao(this.id)
}

//funcao que faz a requisicao de fato, onde recebe do servidor informacao sobre o feedback
function requisicao(id) {
	let xmlRequest = new XMLHttpRequest()
	let fid = id


	xmlRequest.open('GET', 'confirma_feedback.php?id=' + fid)


	xmlRequest.onreadystatechange = () => {
		if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
			response = xmlRequest.responseText
			response = JSON.parse(response)
			let feedback = response.feedback
			respostaVisual(feedback)
		}
	}

	xmlRequest.send()
}

//aplica requisicao no body
let body = document.getElementsByTagName('body')[0]
body.onload = () => {
	requisicao('null')
}

function respostaVisual(id) {
	let fid = id

	if (fid == 'null') {
		superSadIcon.addEventListener('mouseover', superSad)
		sadIcon.addEventListener('mouseover', sad)
		mehIcon.addEventListener('mouseover', meh)
		goodIcon.addEventListener('mouseover', good)
		superGoodIcon.addEventListener('mouseover', superGood)
		for (let i = 1; i < 6; i++) {
			document.getElementById('f' + i).addEventListener('mouseleave', turnBlack)
		}
	} else if (fid == 'f1') {
		superSad()
		removeConfigs()
	} else if (fid == 'f2') {
		sad()
		removeConfigs()
	} else if (fid == 'f3') {
		meh()
		removeConfigs()
	} else if (fid == 'f4') {
		good()
		removeConfigs()
	} else if (fid == 'f5') {
		superGood()
		removeConfigs()
	}

}

//transforma objetos dom em variáveis a serem manipuladas
let superSadIcon = document.getElementById('f1')
let sadIcon = document.getElementById('f2')
let mehIcon = document.getElementById('f3')
let goodIcon = document.getElementById('f4')
let superGoodIcon = document.getElementById('f5')

//normal config onmouseleave /--/ volta ao preto depois de passar mouse por cima
function turnBlack() {
	for (let i = 1; i < 6; i++) {
		document.getElementById('f' + i).style.color = 'black'
	}
}

//onmouseover
//superSad config /--/ cor vermelha 
function superSad() {
	superSadIcon.style.color = 'red'
}

//sad config /--/ cor laranja
function sad() {
	superSad()
	sadIcon.style.color = 'orange'
}

//meh config /--/ cor amarela
function meh() {
	sad()
	mehIcon.style.color = 'yellow'
}

//good config /--/ cor verde claro
function good() {
	meh()
	goodIcon.style.color = 'lightgreen'
}

//superGood config /--/ cor verde escuro
function superGood() {
	good()
	superGoodIcon.style.color = 'darkgreen'
}

//remove todas as configs (normal e personalizadas) dos feedback icons se algum deles é clicado
function removeConfigs() {
	for (let i = 1; i < 6; i++) {
		document.getElementById('f' + i).removeEventListener('mouseleave', turnBlack)
	}
	superSadIcon.removeEventListener('mouseover', superSad)
	sadIcon.removeEventListener('mouseover', sad)
	mehIcon.removeEventListener('mouseover', meh)
	goodIcon.removeEventListener('mouseover', good)
	superGoodIcon.removeEventListener('mouseover', superGood)
}