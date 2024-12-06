<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="shortcut icon" href="assets/img/icon_sifra.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px; /* Largura máxima ajustada para o formulário */
        }
        .form-section {
            background-color: #f8f9fa; /* Cor de fundo similar à página de exemplo */
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .form-step { display: none; }
        .form-step.active { display: block; }
        .form-header-group { margin-bottom: 1rem; }
        .form-required::after { content: '*'; color: red; }
        .form-cover-wrapper { text-align: center; }
        .btn-outline-secondary { margin-right: 10px; }
        .form-control-file { padding: 0; }

        .progress-wrapper {
            margin-bottom: 20px;
        }
        .progress-bar {
            transition: width 0.4s ease;
        }

        .upload-example {
            margin-top: 20px;
        }
        .upload-example img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .upload-example .example-description {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body onload="showSuccessMessage()">
    <div class="container mt-4">
        <div class="progress-wrapper">
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-center mt-2" id="progressText">Etapa 1 de 3</div>
        </div>

        <form id="formularioCadastro" action="dataSave.php" method="post" enctype="multipart/form-data">
            <!-- Etapa 1: Informações do Trabalhador -->
            <div class="form-section page-section form-step active" id="step1">
                <div id="formCoverLogo" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center mb-4">
                    <img src="assets/DATIMA.png" class="img-fluid" alt="Form Logo" style="width: 147px; height: 120px;">
                </div>
                <div class="form-header-group">
                    <h4>Informações do Trabalhador</h4>
                </div>
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo do trabalhador:</label><span class="form-required"> </span>
                    <input type="text" id="nomeCompleto" name="nomeCompleto"  class="form-control"  required>
                    <div id="nomeCompleto" class="invalid-feedback">
                        Campo obrigatório.
                    </div>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo ocupado pelo trabalhador:</label><span class="form-required"> </span>
                    <input type="text" id="cargo" name="cargo" class="form-control" required>
                    <div class="invalid-feedback" style="display:none;">
                        Você deve concordar, antes de continuar.
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF do trabalhador(Somente números):</label><span class="form-required"> </span>
                    <input type="text" id="cpf" name="cpf" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label><span class="form-required"> </span>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">
                        E-mail inválido.
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="next1">Próximo</button>
                </div>
            </div>

            <!-- Etapa 2: Informações da Empresa -->
            <div class="form-section page-section form-step" id="step2">
                <div id="formCoverLogo" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center mb-4">
                    <img src="assets/DATIMA.png" class="img-fluid" alt="Form Logo" style="width: 147px; height: 120px;">
                </div>
                <div class="form-header-group">
                    <h4>Informações da Empresa</h4>
                </div>
                <div class="form-group">
                    <label for="nomeEmpresa">Nome completo da Empresa empregadora:</label><span class="form-required"> </span>
                    <input type="text" id="nomeEmpresa" name="nomeEmpresa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="matriz">Matriz:</label><span class="form-required"> </span>
                    <input type="text" id="matriz" name="matriz" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="unidade">Unidade Onde o Trabalhador está executando suas funções:</label><span class="form-required"> </span>
                    <input type="text" id="unidade" name="unidade" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ - Conforme registro da Carteira de Trabalho(Somente números):</label><span class="form-required"> </span>
                    <input type="text" id="cnpj" name="cnpj" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-outline-secondary" id="prev2">Voltar</button>
                    <button type="button" class="btn btn-primary" id="next2">Próximo</button>
                </div>
            </div>

            <!-- Etapa 3: Documentos -->
            <div class="form-section page-section form-step" id="step3">
                <div id="formCoverLogo" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center mb-4">
                    <img src="assets/DATIMA.png" class="img-fluid" alt="Form Logo" style="width: 147px; height: 120px;">
                </div>
                <div class="form-header-group">
                    <h4>Documentos</h4>
                </div>
                <div class="form-group">
                    <label for="rgFrenteFile" class="form-label-bold">Insira a foto da frente do documento RG, conforme o exemplo:</label><span class="form-required"> </span>
                    <input type="file" id="rgFrenteFile" name="rgFrenteFile" class="form-control-file" required>
                </div>
                <div class="upload-example">
                    <img src="assets/img/frenteRG.jpg" alt="Exemplo RG Frente">
                    <div class="example-description">Exemplo de como deve ser o Documento de Identidade (RG) - Frente.</div>
                </div>
                <div class="form-group">
                    <label for="rgVersoFile" class="form-label-bold">Insira a foto do verso do documento RG, conforme o exemplo:</label><span class="form-required"> </span>
                    <input type="file" id="rgVersoFile" name="rgVersoFile" class="form-control-file" required>
                </div>
                <div class="upload-example">
                    <img src="assets/img/versoRG.jpg" alt="Exemplo RG Verso">
                    <div class="example-description">Exemplo de como deve ser o Documento de Identidade (RG) - Verso.</div>
                </div>
                <div class="form-group">
                    <label for="fotoRGFile" class="form-label-bold">Insira a Selfie com o documento próximo ao rosto, conforme o exemplo:</label><span class="form-required"> </span>
                    <input type="file" id="fotoRGFile" name="fotoRGFile" class="form-control-file" required>
                </div>
                <div class="upload-example">
                    <img src="assets/img/selfieRG.png" alt="Exemplo Foto RG">
                    <div class="example-description">Exemplo de como deve ser a Foto do Trabalhador com RG.</div>
                </div>
                <div class="form-group">
                    <label for="cartaFile" class="form-label-bold">Carta de Oposição ao Sindicato escrita de Próprio Punho - Imagem da carta manuscrita pelo trabalhador conforme modelo(Foto ou PDF)</label><span class="form-required"> </span>
                    <input type="file" id="cartaFile" name="cartaFile" class="form-control-file" required>
                </div>
                <div class="upload-example">
                    <img src="assets/img/carta.png" alt="Exemplo Carta de Próprio Punho">
                    <div class="example-description">Exemplo de como deve ser a Carta de Próprio Punho.</div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-outline-secondary" id="prev3">Voltar</button>
                    <button type="submit" onclick="myFunction()" class="btn btn-primary" id="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        const totalSteps = 3;

        document.getElementById('next1').addEventListener('click', function() {
            if (validateStep1()) {
                saveStep1Data();
                showStep(2);
            }
        });

        document.getElementById('prev2').addEventListener('click', function() {
            showStep(1);
        });

        document.getElementById('next2').addEventListener('click', function() {
            if (validateStep2()) {
                saveStep2Data();
                showStep(3);
            }
        });

        document.getElementById('prev3').addEventListener('click', function() {
            showStep(2);
        });

        function showSuccessMessage() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                alert("Dados cadastrado com sucesso!");
            }
        }

        function showStep(step) {
            document.querySelectorAll('.form-step').forEach((el, index) => {
                el.classList.toggle('active', index + 1 === step);
            });
            updateProgress(step);
        }

        function updateProgress(step) {
            const progress = (step / totalSteps) * 100;
            document.querySelector('.progress-bar').style.width = progress + '%';
            document.getElementById('progressText').innerText = `Etapa ${step} de ${totalSteps}`;
        }

        function validateStep1() {
            const text = document.getElementById('nomeCompleto');
            const feedback = document.querySelector('.invalid-feedback');
            // const nomeCompleto = document.getElementById('nomeCompleto').value;
            const cargo = document.getElementById('cargo').value;
            const cpf = document.getElementById('cpf').value;
            const email = document.getElementById('email').value;
            let errors = [];

            if (!nomeCompleto) errors.push('Nome Completo é obrigatório.');
            if (!cargo) errors.push('Cargo é obrigatório.');
            if (!cpf || !validateCPF(cpf)) errors.push('CPF inválido.');
            if (!email || !validateEmail(email)) errors.push('E-mail inválido.');

            if (errors.length > 0) {
                alert(errors.join('\n'));
                return false;
            }
            return true;
        }
    

        function validateStep2() {
            const nomeEmpresa = document.getElementById('nomeEmpresa').value;
            const matriz = document.getElementById('matriz').value;
            const unidade = document.getElementById('unidade').value;
            const cnpj = document.getElementById('cnpj').value;
            let errors = [];

            if (!nomeEmpresa) errors.push('Nome da Empresa é obrigatório.');
            if (!matriz) errors.push('Matriz é obrigatória.');
            if (!unidade) errors.push('Unidade é obrigatória.');
            // if (!cnpj) errors.push('CNPJ é obrigatório.');
            if (!cnpj || !validateCNPJ(cnpj)) errors.push('CNPJ inválido.');

            if (errors.length > 0) {
                alert(errors.join('\n'));
                return false;
            }
            return true;
        }

        function validateStep3() {
            const rgFrenteFile = document.getElementById('rgFrenteFile').files.length;
            const rgVersoFile = document.getElementById('rgVersoFile').files.length;
            const fotoRGFile = document.getElementById('fotoRGFile').files.length;
            const cartaFile = document.getElementById('cartaFile').files.length;
            let errors = [];

            if (rgFrenteFile === 0) errors.push('Documento de Identidade (RG) - Frente é obrigatório.');
            if (rgVersoFile === 0) errors.push('Documento de Identidade (RG) - Verso é obrigatório.');
            if (fotoRGFile === 0) errors.push('Foto do Trabalhador com RG é obrigatória.');
            if (cartaFile === 0) errors.push('Carta de Próprio Punho é obrigatória.');

            if (errors.length > 0) {
                alert(errors.join('\n'));
                return false;
            }
            return true;
        }

        function validateCPF(cpf) {
            cpf = cpf.replace(/[^\d]/g, '');
            if (cpf.length !== 11 || /^(.)\1{10}$/.test(cpf)) return false;
            let sum = 0;
            let rest;
            for (let i = 0; i < 9; i++) sum += cpf[i] * (10 - i);
            rest = 11 - (sum % 11);
            if (rest > 9) rest = 0;
            if (rest !== parseInt(cpf[9])) return false;
            sum = 0;
            for (let i = 0; i < 10; i++) sum += cpf[i] * (11 - i);
            rest = 11 - (sum % 11);
            if (rest > 9) rest = 0;
            return rest === parseInt(cpf[10]);
        }

        function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const result = re.test(String(email).toLowerCase());
        console.log(`E-mail ${email} is valid: ${result}`);
        return result;
        }   

         // Validação de CNPJ
         function validateCNPJ(cnpj) {
                cnpj = cnpj.replace(/[^\d]+/g, '');
                if (cnpj === '' || cnpj.length !== 14 || /^(.)\1+$/.test(cnpj)) return false;
                
                let tamanho = cnpj.length - 2;
                let numeros = cnpj.substring(0, tamanho);
                let digitos = cnpj.substring(tamanho);
                let soma = 0;
                let pos = tamanho - 7;
                
                for (let i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2) pos = 9;
                }
                
                let resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado !== parseInt(digitos.charAt(0))) return false;
                
                tamanho += 1;
                numeros = cnpj.substring(0, tamanho);
                soma = 0;
                pos = tamanho - 7;
                
                for (let i = tamanho; i >= 1; i--) {
                    soma += numeros.charAt(tamanho - i) * pos--;
                    if (pos < 2) pos = 9;
                }
                
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado !== parseInt(digitos.charAt(1))) return false;
                
                return true;
            }

        function saveStep1Data() {
            localStorage.setItem('nomeCompleto', document.getElementById('nomeCompleto').value);
            localStorage.setItem('cpf', document.getElementById('cpf').value);
            localStorage.setItem('cargo', document.getElementById('cargo').value);
            localStorage.setItem('email', document.getElementById('email').value);
        }

        function saveStep2Data() {
            localStorage.setItem('nomeEmpresa', document.getElementById('nomeEmpresa').value);
            localStorage.setItem('matriz', document.getElementById('matriz').value);
            localStorage.setItem('unidade', document.getElementById('unidade').value);
            localStorage.setItem('cnpj', document.getElementById('cnpj').value);
        }

        function saveStep3Data() {
            localStorage.setItem('rgFrenteFile', document.getElementById('rgFrenteFile').value);
            localStorage.setItem('rgVersoFile', document.getElementById('rgVersoFile').value);
            localStorage.setItem('fotoRGFile', document.getElementById('fotoRGFile').value);
            localStorage.setItem('cartaFile', document.getElementById('cartaFile').value);
        }
    </script>
</body>
</html>
