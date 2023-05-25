if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
  } else {
    ready()
  }
  
  
  function ready() {
  
    // const removeProduto = document.getElementsByClassName("removeBTN");
    // console.log(removeProduto)
    // for (var i = 0; i < removeProduto.length; i++) {
    //   removeProduto[i].addEventListener("click", removerProduto)
    // }
    
  
    // o erro é nessa parte
    const quantidadeInputs = document.getElementsByClassName("carrinho-qdt-input")
    for (var i = 0; i < quantidadeInputs.length; i++) {
      quantidadeInputs[i].addEventListener("change", checkIfInputIsNull)
  }
  
    const addCarrinhoBTN = document.getElementsByClassName("quantidade")
    for (var i = 0; i < addCarrinhoBTN.length; i++) {
      addCarrinhoBTN[i].addEventListener("click", addProduto)
    }
  
    const attButtons = document.getElementsByClassName("att");
    for (var i = 0; i < attButtons.length; i++) {
      attButtons[i].addEventListener("click", atualizarTotal);
      
    }
  
    function addProduto(event){
      const button = event.target;
      const infoProduto = button.parentElement.parentElement.parentElement;
      const itemProduto = infoProduto.getElementsByClassName("ingresso")[0].innerText;
      const precoProduto = infoProduto.getElementsByClassName("preco")[0].innerText;
      const imagem = "./images/brunoEMarrone.jpg"
      
  
      let newNovoCarrinho = document.createElement("div");
      newNovoCarrinho.classList.add("itemCarrinho"); //mudei
  
      newNovoCarrinho.innerHTML = 
      `
      <img class="imgCarrinho" src=${imagem} alt="Product 1">
                  <h2 class="prodCarrinhoItem">${itemProduto}</h2>
                  <h2 class="prodCarrinhoPreco">${precoProduto}</h2>
                  <div>
                    <input type="number" value="1" min="0" class="carrinho-qtd-input">
                    <button type="button" class="removeBTN">Remover</button>
                  </div>
      
      `
      const div = document.getElementsByClassName("carrinhoPAG1")[0]; //mudei
      div.append(newNovoCarrinho);
      atualizarTotal()
  
      newNovoCarrinho.getElementsByClassName("removeBTN")[0].addEventListener("click", removerProduto)
      // newNovoCarrinho.getElementsByClassName("produto-qtd-input")[0].addEventListener("change", atualizarTotal)
  
  
    const arrayDados = []
    const quantidadeDivs = document.getElementsByClassName("removeBTN")
    for (var i = 0; i < quantidadeDivs.length; i++) {
      arrayDados[i] = {
        item: itemProduto,
        preco: precoProduto,
        src: imagem 
      }
      
      localStorage.setItem("array", JSON.stringify(arrayDados))
    }
  }
   
    
  function removerProduto(event) {
    event.target.parentElement.parentElement.remove()
    atualizarTotal()
  }
  
  
  // window.addEventListener("load", atualizarTotal);
  
  function atualizarTotal(){ 
  let totalPreco = 0;
  const produtosCarrinho = document.getElementsByClassName("itemCarrinho");
  for (var i = 0; i < produtosCarrinho.length; i++) {
    const produtoPreco = produtosCarrinho[i].getElementsByClassName("prodCarrinhoPreco")[0].innerText.replace("R$", "").replace(",", ".");
    const produtoQuantidade = produtosCarrinho[i].getElementsByClassName("carrinho-qtd-input")[0].value;
  
    totalPreco += produtoPreco * produtoQuantidade;
  }
  
  totalPreco = totalPreco.toFixed(2);
  totalPreco = totalPreco.replace(".", ",");
  document.querySelector(".total span").innerText = "R$" + totalPreco;
  }
  }