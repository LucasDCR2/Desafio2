var dado = localStorage.getItem("array")
dado = JSON.parse(dado)

const url = dado[0].src
const item = dado[0].item
const preco = dado[0].preco
const quantidade = dado.length

document.getElementById('resumo').textContent = url;



