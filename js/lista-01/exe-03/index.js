let $ = document.querySelector.bind(document);

let btn = $('#btn');

btn.addEventListener('click', (e)=> {
    e.preventDefault();

    let valor = Number($('#valor').value);
    let campo = $('#campo');

    if (valor > 10){
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Número digitado foi ${valor}, e o mesmo é maior do que 10!
        </div>
        `
    } else if (valor < 10) {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Número digitado foi $valor, e o mesmo é menor do que 10!
        </div>
        `
    } else {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Número igual a 10!
        </div>
        `
    }
});