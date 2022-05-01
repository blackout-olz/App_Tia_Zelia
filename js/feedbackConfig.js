//aplica comum config a todos elementos feedback
let feedbackElements = document.getElementsByClassName('feedback')
for (let i = 0; i < feedbackElements.length; i++) {
	feedbackElements[i].addEventListener('click', comumConfig)
}

//comum config
function comumConfig() {
	feedback = ''

	let xmlRequest = new XMLHttpRequest()

	xmlRequest.open('GET', 'confirma_feedback.php?id=' + this.id)

	xmlRequest.onreadystatechange = () => {
		if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
			response = xmlRequest.responseText
			response = JSON.parse(response)
			feedback = response.feedback
			console.log(feedback)
		}
	}

	xmlRequest.send()
}
