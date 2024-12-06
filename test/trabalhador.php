<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="assets/DATIMA.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <title>Formulário de Cadastro</title>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=80facca"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.55857&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
</head>

<body>
<form class="form-form" id="workerForm">
  <!-- Logo -->
  <div id="formCoverLogo" style="margin-bottom:10px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
    <div class="form-page-cover-image-wrapper" style="max-width:752px">
        <img src="assets/DATIMA.png" class="form-page-cover-image" width="147" height="120" aria-label="Form Logo" style="aspect-ratio:147/120" />
    </div>
  </div>
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group header-large">
          <div class="header-text httal htvam">
            <h4>Informações do Trabalhador</h4>
          </div>
        </div>
      </li>

      <!-- Formulário - Informações do Trabalhador -->
      
      <li class="form-line jf-required" data-type="control_fullname" id="id_nomeCompleto">
        <label class="form-label form-label-left form-label-auto" id="label_nomeCompleto" for="nomeCompleto"> Nome Completo <span class="form-required">*</span> </label>
        <div id="cid_nomeCompleto" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-textbox validate[required]" autoComplete="off" size="30" data-component="first" aria-labelledby="label_nomeCompleto" required="" value="" />
              <label class="form-sub-label" for="nomeCompleto" id="sublabel_nomeCompleto" style="min-height:13px">Nome</label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname" id="id_cpf">
        <label class="form-label form-label-left form-label-auto" id="label_cpf" for="cpf">CPF <span class="form-required">*</span> </label>
        <div id="cid_cpf" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="cpf" name="cpf" class="form-textbox validate[required]" autoComplete="off" size="15" data-component="first" aria-labelledby="label_cpf" required="" value="" />
              <label class="form-sub-label" for="cpf" id="sublabel_cpf" style="min-height:13px">Cadastro de Pessoa Física</label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname" id="id_cargo">
        <label class="form-label form-label-left form-label-auto" id="label_cargo" for="cargo">Cargo <span class="form-required">*</span> </label>
        <div id="cid_cargo" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="cargo" name="cargo" class="form-textbox validate[required]" autoComplete="off" size="20" data-component="first" aria-labelledby="label_cargo" required="" value="" />
              <label class="form-sub-label" for="cargo" id="sublabel_cargo" style="min-height:13px">Posição ocupada pelo trabalhador.</label>
            </span>
          </div>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname" id="id_email">
        <label class="form-label form-label-left form-label-auto" id="label_email" for="email">E-mail <span class="form-required">*</span> </label>
        <div id="cid_email" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="email" id="email" name="email" class="form-textbox validate[required]" autoComplete="off" size="30" data-component="first" aria-labelledby="label_email" required="" value="" />
              <label class="form-sub-label" for="email" id="sublabel_email" style="min-height:13px">Endereço de e-mail</label>
            </span>
          </div>
        </div>
      </li>

      <!-- Fim - Informações do Trabalhador -->

      <li class="form-input-wide">
        <br>
        <div style="float: left;" class="form-pagebreak" data-component="pagebreak">
          <a href="index.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
        </div>

        <div style="float: right;" class="form-pagebreak" data-component="pagebreak">
          <button type="button" class="btn btn-outline-primary" id="nextButton">Próximo</button>
        </div>
      </li>
    </ul>
  </div>
</form>

<script>
    document.getElementById('nextButton').addEventListener('click', function() {
        let erros = []; // Array para acumular as mensagens de erro

        // Obtendo os valores dos campos
        const nomeCompleto = document.getElementById('nomeCompleto').value.trim();
        const cpf = document.getElementById('cpf').value.trim();
        const cargo = document.getElementById('cargo').value.trim();
        const email = document.getElementById('email').value.trim();

        // Função para validar CPF
        function validarCPF(cpf) {
            cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos
            if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false; // Verifica se tem 11 dígitos ou todos são iguais

            let soma = 0;
            for (let i = 1; i <= 9; i++) soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
            let resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            if (resto !== parseInt(cpf.substring(9, 10))) return false;

            soma = 0;
            for (let i = 1; i <= 10; i++) soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
            resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            if (resto !== parseInt(cpf.substring(10, 11))) return false;

            return true;
        }

        // Função para validar E-mail
        function validarEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Validações
        if (!nomeCompleto) {
            erros.push('Por favor, preencha o campo Nome Completo.');
        }
        if (!cpf) {
            erros.push('Por favor, preencha o campo CPF.');
        } else if (!validarCPF(cpf)) {
            erros.push('CPF inválido. Por favor, verifique o número digitado.');
        }
        if (!cargo) {
            erros.push('Por favor, preencha o campo Cargo.');
        }
        if (!email) {
            erros.push('Por favor, preencha o campo E-mail.');
        } else if (!validarEmail(email)) {
            erros.push('E-mail inválido. Por favor, verifique o endereço digitado.');
        }

        // Exibe os erros acumulados, se houver
        if (erros.length > 0) {
            alert(erros.join('\n'));
        } else {
            window.location.href = "empresa.php"; // Redireciona para a próxima página
        }
    });
</script>

</body>
</html>
