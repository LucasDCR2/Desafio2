document.addEventListener('DOMContentLoaded', function() {


document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar o envio padrão do formulário
    const cpf = document.getElementById('cpf').value;
    const email = document.getElementById('email').value;
  
    fetch('validacao.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `cpf=${cpf}&email=${email}`
    })
    .then(response => response.text())
    .then(data => {
      if (data == 'Insira um email válido' || data == 'Por favor, preencha o campo email') {
        document.getElementById('erro-email').textContent = data;
        setTimeout(function() {
          document.getElementById('erro-email').textContent = '';
        }, 3000);
      } 
      if (data === 'Por favor, preencha o campo CPF' || data === 'Insira um CPF existente') {
        document.getElementById('erro-cpf').textContent = data;
        setTimeout(function() {
          document.getElementById('erro-cpf').textContent = '';
        }, 3000);
      }
      if (data == 'Acesso negado') {
        document.getElementById('acesso').textContent = data;
        document.getElementById('acesso').style.color = 'red';
        setTimeout(function() {
          document.getElementById('acesso').textContent = '';
        }, 3000);
        // reiniciar a pagina e os campos
      }
      if(data == "Acesso permitido") {
        window.location.href = "hprodutos.html";
        // ir para a proxima pagina
        
      }
    })
    .catch(error => {
      console.error('Erro:', error);
    });
  });
});