let $ = document.querySelector.bind(document);

let btn = $('#btn');

btn.addEventListener('click', (e)=> {
    e.preventDefault();

    let valorKl = Number($('#valor_kl').value);
    let qntKls = Number($('#qnt_kls').value);
    let calc = valorKl * qntKls;

    let campo = $('#campo');
    campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            O valor a ser pago é: R$ ${calc}
        </div>
        `
});