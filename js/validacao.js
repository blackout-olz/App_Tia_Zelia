function validacao() {
				let xmlRequest = new XMLHttpRequest()
				let usuario = document.getElementById('usuario').value
				let senha = document.getElementById('senha').value

				xmlRequest.open('GET', `validacao.php?usuario=${usuario}&senha=${senha}`)

				xmlRequest.onreadystatechange = () => {
					if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
						if (xmlRequest.responseURL.search('login=erro') != -1) {
							if (document.getElementById('divErro')) {
								document.getElementById('divErro').remove()
							}
							if (document.getElementsByClassName('divErro')) {
								let divErro = document.getElementsByClassName('divErro')
								for (let i = 0; i < divErro.length; i + 1) {
									divErro[i].remove()
								}
							}
							let div = document.createElement('div')
							div.id = 'divErro'
							div.className = 'text-danger ms-3'
							div.textContent = 'Usuário e/ou senha inválidos'
							document.getElementById('form').appendChild(div)
							document.getElementById('usuario').focus()
						} else {
							window.location = xmlRequest.responseURL
						}
					}
				}

				xmlRequest.send()
			}