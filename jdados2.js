document.addEventListener('DOMContentLoaded', function() {
    fetch('vchamaProdutosAPI.php')
      .then(response => response.json())
      .then(data => {
        
        console.log(data);

        // PRODUTO 2 -- inter x palmeiras (2 tipos de ingresso e 2 preços)
        document.getElementById('descricao4').textContent = data.apre4;
        document.getElementById('dtini4').textContent = data.dataInicio4;
        document.getElementById('dtfim4').textContent = data.dataFim4;
        document.getElementById('ingresso4').textContent = data.ingresso4;
        document.getElementById('preco4').textContent = data.preco4;
        document.getElementById('ingresso5').textContent = data.ingresso5;
        document.getElementById('preco5').textContent = data.preco5;  // nao esta sendo usado ainda

       
      })
      .catch(error => {
        console.error('Erro ao buscar os dados:', error);
      });
  });