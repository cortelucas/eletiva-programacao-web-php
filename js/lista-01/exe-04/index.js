let $ = document.querySelector.bind(document);

let btn = $('#btn');

btn.addEventListener('click', (e)=> {
    e.preventDefault();

    let valor = Number($('#valor').value);
    let campo = $('#campo');

    if (valor > 0){
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Valor Positivo!
        </div>
        `
    } else if (valor < 0) {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Valor Negativo!
        </div>
        `
    } else {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Número igual a 0!
        </div>
        `
    }


});