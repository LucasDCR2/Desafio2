document.addEventListener('DOMContentLoaded', function() {
    fetch('vchamaProdutosAPI.php')
      .then(response => response.json())
      .then(data => {

        // PRODUTO 3 -- bruno e marrone (2 tipos de ingresso e 2 preços)
        document.getElementById('descricao6').textContent = data.apre6;
        document.getElementById('dtini6').textContent = data.dataInicio6;
        document.getElementById('dtfim6').textContent = data.dataFim6;
        document.getElementById('ingresso6').textContent = data.ingresso6;
        document.getElementById('preco6').textContent = data.preco6;
        document.getElementById('ingresso7').textContent = data.ingresso7;
        document.getElementById('preco7').textContent = data.preco7;
       
      })
      .catch(error => {
        console.error('Erro ao buscar os dados:', error);
      });
  });
