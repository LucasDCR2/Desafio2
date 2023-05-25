document.addEventListener('DOMContentLoaded', function() {
    fetch('vchamaProdutosAPI.php')
      .then(response => response.json())
      .then(data => {

        // Preenchendo as divs com os dados -- ESPECIFICO

        // PRODUTO 1 -- inter x imply (1 tipo de ingresso e 1 preço)
        document.getElementById('descricao0').textContent = data.apre0;
        document.getElementById('dtini0').textContent = data.dataInicio0;
        document.getElementById('dtfim0').textContent = data.dataFim0;
        document.getElementById('ingresso0').textContent = data.ingresso0;
        document.getElementById('preco0').textContent = data.preco0;


      })
      .catch(error => {
        console.error('Erro ao buscar os dados:', error);
      });
  });

  