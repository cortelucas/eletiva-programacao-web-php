let $ = document.querySelector.bind(document);

let divForm = $('#form');
let form = document.createElement('form');
divForm.appendChild(form);
for (i = 1; i < 5; i++) {
    let div = document.createElement("div");
    form.appendChild(div);
    div.classList.add('form-group', 'row');

    let label = document.createElement('label');
    Object.assign(label, {
        className: 'col-sm-2 col-form-label',
        htmlFor: `nota${i}`,
    });
    label.appendChild(document.createTextNode(`Insira a ${i}ª nota: `));
    div.appendChild(label);

    let divInput = document.createElement('div');
    divInput.classList.add('col-sm-10');
    div.appendChild(divInput);

    let input = document.createElement('input');
    Object.assign(input, {
       className: 'form-control',
       id: `nota${i}`,
       type: 'text',
    });
    divInput.appendChild(input);
}
let inputBtn = document.createElement('input')
Object.assign(inputBtn, {
    className: 'btn btn-outline-main',
    id: 'btn',
    type: 'submit',
    value: 'Enviar',
});
form.appendChild(inputBtn);

let btn = $('#btn');

btn.addEventListener('click', (e)=> {
    e.preventDefault();
    let somaNotas = 0;

    for(i = 1; i < 5; i++) {
        let nota = Number($(`#nota${i}`).value);

        somaNotas += nota
    }

    let media = somaNotas/4;
    console.log(media)

    let campo = $('#campo');

    if (media >= 7){
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Sua média foi ${media}. Parabéns, você foi Aprovado!
        </div>
        `
    } else {
        campo.innerHTML = `
        <div class="alert alert-light" role="alert">
            Sua média foi ${media}. Infelizmente você foi Reprovado!
        </div>
        `
    }
});