// Função para validar a senha em tempo real
function validarSenha() {
    const senha = document.getElementById('senha').value;
    const criterios = [
        { regex: /[A-Z]/, msg: 'Uma letra maiúscula' },
        { regex: /[a-z]/, msg: 'Uma letra minúscula' },
        { regex: /\d/, msg: 'Um número' },
        { regex: /[\W_]/, msg: 'Um caractere especial' },
        { regex: /.{8,}/, msg: 'No mínimo 8 caracteres' }
    ];

    let lista = document.getElementById('passwordCriteria');
    lista.innerHTML = ''; // Limpa a lista antes de adicionar novos itens

    // Verifica cada critério e adiciona um item à lista com o ícone apropriado
    criterios.forEach(criterio => {
        const li = document.createElement('li');
        if (criterio.regex.test(senha)) {
            li.classList.add('text-success');
            li.innerHTML = `<i class="fa fa-check"></i> ${criterio.msg}`;
        } else {
            li.classList.add('text-danger');
            li.innerHTML = `<i class="fa fa-times"></i> ${criterio.msg}`;
        }
        lista.appendChild(li);
    });
}

// função de buscar o endereço pelo CEP
function buscarCEP() {
    let cep = document.getElementById('cep').value;
    if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (!data.erro) {
                    document.getElementById('rua').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('estado').value = data.uf;
                    document.querySelectorAll('.endereco').forEach(input => input.disabled = false);
                } else {
                    document.querySelectorAll('.endereco').forEach(input => input.disabled = true);
                }
            });
    } else {
        document.querySelectorAll('.endereco').forEach(input => input.disabled = true);
    }
}

//  validação em tempo real
document.getElementById('cep').addEventListener('input', buscarCEP);
document.getElementById('senha').addEventListener('input', validarSenha);

// Valida a senha antes de enviar o formulário
document.getElementById('registerForm').addEventListener('submit', function (event) {
    let senha = document.getElementById('senha').value;
    let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    if (!regex.test(senha)) {
        event.preventDefault();
        alert("A senha deve atender a todos os critérios listados.");
    }
});




