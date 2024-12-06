<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="assets/icon_sifra.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <title>Formulário de Cadastro</title>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=80facca"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.55857&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
</head>
<body onload="showSuccessMessage()">
    <form class="form-form">
        <!-- Logo
        <div id="formCoverLogo" style="margin-bottom:10px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
            <div class="form-page-cover-image-wrapper" style="max-width:752px">
                <img src="assets/logotipo-sitraemfa-com-descricao-menor.jpg" class="form-page-cover-image" width="582" height="71" aria-label="Form Logo" style="aspect-ratio:147/120" />
            </div>
        </div>
        -->
  
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group header-large">
                        <div class="header-text httal htvam">
                            <img src="assets/img/logotipo-sitraemfa-com-descricao-menor.jpg" class="form-page-cover-image" width="582" height="71" aria-label="Form Logo" style="aspect-ratio:147/120" />
                            <h1 id="header_1" class="form-header" data-component="header">Seja bem vindo(a)</h1>
                            <div id="subHeader_1" class="form-subHeader">Faça o envio dos seus documentos para que possamos cadastrar sua intenção de não contribuir com o sindicato.</div>
                        </div>
                    </div>
                </li>
                <!-- Termo e Condições -->
                <li class="form-line" data-type="control_text" id="id_6">
                    <div id="cid_6" class="form-input-wide" data-layout="full">
                        <div id="text_6" class="form-html" data-component="text" tabindex="0">
                            <p style="text-align: center;">CONSENTIMENTO DE NEGAÇÃO DE CONTRIBUIÇÃO SINDICAL</p>
                            <p>Atesto o meu conhecimento acerca da importância da contribuição sindical como um instrumento fundamental para a defesa dos direitos dos trabalhadores. 
                            <br><br>
                            Dessa forma, ao contribuir com o sindicato, o trabalhador fortalece a representatividade da classe, possibilitando uma defesa mais robusta dos seus interesses, tanto em negociações coletivas quanto em casos individuais. Além disso, a contribuição garante acesso a diversos serviços oferecidos pelo sindicato, como assessoria jurídica, suporte em questões trabalhistas, e participação em eventos e cursos de capacitação.

Por outro lado, é importante também ter ciência dos aspectos negativos de não contribuir com o sindicato. A falta de contribuição pode enfraquecer a atuação sindical, comprometendo a capacidade de negociação e a manutenção dos direitos conquistados ao longo dos anos. Isso pode resultar em condições menos favoráveis de trabalho e em uma menor proteção aos interesses dos trabalhadores.

Assim, ciente das vantagens e desvantagens, cabe ao trabalhador avaliar a importância do fortalecimento de sua representação sindical, de modo a assegurar a contínua proteção e valorização de seus direitos e condições de trabalho.
                            <br><br>
Atesto, ainda, que tenho conhecimento de que todos os dados fornecidos para a contribuição sindical serão tratados conforme a Lei nº 13.709/2018, garantindo a confidencialidade e a segurança das informações pessoais. 
                            <br><br>
Fui informado, por fim, da possibilidade de acessar, atualizar, corrigir, alterar e/ou revogar, no todo ou em parte, as autorizações ora concedidas, bastando, para tanto, procurar o Departamento de Recursos Humanos ou o sindicato, dentro do período estipulado, para formalizar meu interesse e novo Termo de Consentimento. 
                            </p>
                        </div>
                    </div>
                </li>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Concordo com os termos e condições<span class="form-required">*</span>
                        </label>
                        <div class="invalid-feedback" style="display:none;">
                            Você deve concordar, antes de continuar.
                        </div>
                    </div>
                </div>
                <li class="form-input-wide">
                    <br>
                    <div style="float: right;" class="form-pagebreak" data-component="pagebreak">
                        <button type="button" class="btn btn-outline-primary" id="nextButton">Próximo</button>
                    </div>
                </li>
            </ul>
        </div>
    </form>

    <script>
        function showSuccessMessage() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            alert("Dados cadastrado com sucesso!");
            }
        }
        // Obtém os elementos
        const checkbox = document.getElementById('invalidCheck3');
        const feedback = document.querySelector('.invalid-feedback');
        const nextButton = document.getElementById('nextButton');

        // O botão fica habilitado por padrão

        // Adiciona evento de clique no botão
        nextButton.addEventListener('click', function() {
            if (!checkbox.checked) {
                feedback.style.display = 'block';
            } else {
                window.location.href = 'dataForm.php';
            }
        });
    </script>
</body>
</html>