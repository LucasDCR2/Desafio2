
document.addEventListener('DOMContentLoaded', function() {
    fetch('vsessao.php')
      .then(response => response.json())
      .then(data => {
        
       if (data.status == 'sucesso') {
            console.log(data.mensagem);

       } else if(data.status == 'erro') {
            console.log(data.mensagem);
            window.location.href = "hindex.php";
       } 
      })
      .catch(error => {
            console.error('Erro ao buscar os dados:', error);
      });
  });