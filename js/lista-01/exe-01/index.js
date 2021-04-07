let $ = document.querySelector.bind(document);

let btn = $('#btn');

btn.addEventListener('click', (e)=> {
    e.preventDefault();

    let valorPago = Number($('#valor_pago').value);
    let valorProduto = Number($('#valor_produto').value);
    let troco = valorPago - valorProduto;
    let valorFaltante = valorProduto - valorPago;
    let campo = $('#campo');

    if (troco > 0){
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            'O troco é de R$ ${troco}'
        </div>
        `
    } else if (troco < 0) {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            'Esta faltando R$ ${valorFaltante}'
        </div>
        `
    } else {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            'Troco Correto!'
        </div>
        `
    }


});