
function addProduto(idProduto, recarregarPagina = true) {
    let message = 'Produto adicionado com sucesso';
    let messageType = 'success';
    let produto = 'true'
    let action = 'add';
    let quantidade = 1;
    let id = idProduto;
    const xhr = new XMLHttpRequest();
    let url = 'erp/api/carrinho.php?message=' + message + '&messageType=' + messageType + '&produto=' + produto + '&action=' + action + '&quantidade=' + quantidade + '&id=' + id;
    console.log(url);
    xhr.open('GET', url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = () => {

        if (xhr.readyState == 4) {

            if (xhr.status == 200) {

                if (recarregarPagina == true){
                    localStorage.setItem('controleMensagem', true);
                    // document.location.reload(true);
                    var url = window.location.href.toString();
                    window.location.href = url;
                }else{
                    let r = parseInt(document.getElementById(id).value);
                    let valorProduto = document.getElementById('valorProduto'+id).innerText;
                    valorProduto = valorProduto.replace('.', '');
                    valorProduto = valorProduto.replace(',', '.');
                    valorProduto = parseFloat(valorProduto);
                    let result = valorProduto / r;
                    let resultV = valorProduto + result;
                    // resultV = resultV.toFixed(2);
                    resultV = resultV.toLocaleString('pt-br', {minimumFractionDigits: 2})
                    console.log(resultV);
                    document.getElementById('valorProduto'+id).innerText = resultV;
                    r = r + 1;
                    document.getElementById(id).value = r;


                    let valorTotalCarrinho = document.getElementById('valorTotalCarrinho').innerText;
                    valorTotalCarrinho = valorTotalCarrinho.replace('.', '');
                    valorTotalCarrinho = valorTotalCarrinho.replace(',', '.');
                    // //com R$
                    // var f = atual.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
                    // //sem R$
                    // var f2 = atual.toLocaleString('pt-br', {minimumFractionDigits: 2});
                    document.getElementById('valorTotalCarrinho').innerText = (parseFloat(valorTotalCarrinho) + parseFloat(result)).toLocaleString('pt-br', {minimumFractionDigits: 2});
                }

            } else {
                console.log(xhr.responseText);
            }
        }
    }
    xhr.send();
}


function remProduto(idProduto, recarregarPagina = true) {
    let message = 'Produto reajustado com sucesso';
    let messageType = 'success';
    let carrinho = 'true'
    let action = 'rm';
    let id = idProduto;
    const xhr = new XMLHttpRequest();
    let url = 'erp/api/carrinho.php?message=' + message + '&messageType=' + messageType + '&carrinho=' + carrinho + '&action=' + action + '&id=' + id;
    console.log(url);
    xhr.open('GET', url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = () => {

        if (xhr.readyState == 4) {

            if (xhr.status == 200) {
                if (recarregarPagina == true){
                    document.location.reload(true);
                }else{
                    let r = parseInt(document.getElementById(id).value);
                    let valorProduto = document.getElementById('valorProduto'+id).innerText;
                    valorProduto = valorProduto.replace('.', '');
                    valorProduto = valorProduto.replace(',', '.');
                    valorProduto = parseFloat(valorProduto);
                    let result = valorProduto / r;


                    if (r > 1){
                        let resultV = valorProduto - result;
                        // resultV = resultV.toFixed(2);
                        resultV = resultV.toLocaleString('pt-br', {minimumFractionDigits: 2})
                        document.getElementById('valorProduto'+id).innerText = resultV;
                        r = r - 1;
                        document.getElementById(id).value = r;

                    }else{
                        excluirProduto(id, false);
                        var node = document.getElementById("boxCarrinho"+id);
                        if (node.parentNode) {
                            node.parentNode.removeChild(node);
                        }
                    }

                    let valorTotalCarrinho = document.getElementById('valorTotalCarrinho').innerText;
                    valorTotalCarrinho = valorTotalCarrinho.replace('.', '');
                    valorTotalCarrinho = valorTotalCarrinho.replace(',', '.');
                    document.getElementById('valorTotalCarrinho').innerText = (parseFloat(valorTotalCarrinho) - parseFloat(result)).toLocaleString('pt-br', {minimumFractionDigits: 2});

                }

            } else {
                console.log(xhr.responseText);
            }
        }
    }
    xhr.send();
}

function excluirProduto(idProduto, recarregarPagina = true) {
    let message = 'Produto removido com sucesso!';
    let messageType = 'success';
    let carrinho = 'true'
    let action = 'del';
    let id = idProduto;
    const xhr = new XMLHttpRequest();
    let url = 'erp/api/carrinho.php?message=' + message + '&messageType=' + messageType + '&carrinho=' + carrinho + '&action=' + action + '&id=' + id;
    console.log(url);
    xhr.open('GET', url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = () => {

        if (xhr.readyState == 4) {

            if (xhr.status == 200) {
                if (recarregarPagina == true){
                    document.location.reload(true);
                }else{
                    let qtd = document.getElementById('qtd').innerText;
                    qtd = parseInt(qtd) - 1;
                    document.getElementById('qtd').innerText = qtd;
                    if (qtd == 0){
                        document.location.reload(true);
                    }
                }


            } else {
                console.log(xhr.responseText);
            }
        }
    }
    xhr.send();
}
