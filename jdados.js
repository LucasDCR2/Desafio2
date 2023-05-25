document.addEventListener('DOMContentLoaded', function() {
    fetch('vchamaProdutosAPI.php')
      .then(response => response.json())
      .then(data => {
        
        // Preenchendo as divs com os dados -- PAGINA GERAL DE PRODUTOS
        document.getElementById('apre0').textContent = data.apre0;
        document.getElementById('data0').textContent = data.data0;

        document.getElementById('apre4').textContent = data.apre4;
        document.getElementById('data4').textContent = data.data4;

        document.getElementById('apre6').textContent = data.apre6;
        document.getElementById('data6').textContent = data.data6;

       
      })
      .catch(error => {
        console.error('Erro ao buscar os dados:', error);
      });
  });

  