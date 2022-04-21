//transforma objetos dom em variáveis a serem manipuladas
let superSadIcon = document.getElementById('f1')
let sadIcon = document.getElementById('f2')
let mehIcon = document.getElementById('f3')
let goodIcon = document.getElementById('f4')
let superGoodIcon = document.getElementById('f5')

//normal config onmouseleave /--/ volta ao preto depois de passar mouse por cima
function comumConfig() {
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
		document.getElementById('f' + i).removeEventListener('mouseleave', comumConfig)
		window.location.href = 'confirma_feedback.php?id=' + this.id
	}
	superSadIcon.removeEventListener('mouseover', superSad)
	sadIcon.removeEventListener('mouseover', sad)
	mehIcon.removeEventListener('mouseover', meh)
	goodIcon.removeEventListener('mouseover', good)
	superGoodIcon.removeEventListener('mouseover', superGood)
}

// adiciona logica dinamica de animacao do feedback dado pelo usuario apos processa-lo
let feedback = window.location.search.replace('?id=', '')

if (feedback == 'f1') {
	superSad()
} else if (feedback == 'f2') {
	sad()
} else if (feedback == 'f3') {
	meh()
} else if (feedback == 'f4') {
	good()
} else if (feedback == 'f5') {
	superGood()
} else {
	superSadIcon.addEventListener('mouseover', superSad)
	sadIcon.addEventListener('mouseover', sad)
	mehIcon.addEventListener('mouseover', meh)
	goodIcon.addEventListener('mouseover', good)
	superGoodIcon.addEventListener('mouseover', superGood)
	for (let i = 1; i < 6; i++) {
		document.getElementById('f' + i).addEventListener('mouseleave', comumConfig)
	}
	for (let i = 1; i < 6; i++) {
		document.getElementById('f' + i).addEventListener('click', removeConfigs)
	}
}
