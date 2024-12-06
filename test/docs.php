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
<form class="form-form" id="documentsForm">
  <!-- Logo -->
  <div id="formCoverLogo" style="margin-bottom:10px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
    <div class="form-page-cover-image-wrapper" style="max-width:752px"><img src="assets/DATIMA.png" class="form-page-cover-image" width="147" height="120" aria-label="Form Logo" style="aspect-ratio:147/120" /></div>
  </div>
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group header-large">
          <div class="header-text httal htvam">
            <h4>Documentos</h4>
          </div>
        </div>
      </li>

      <!-- Formulário - Upload de Documentos -->
      <div class="mb-3">
        <label for="rgFile" class="form-label">Documento de Identidade (RG):</label>
        <input class="form-control" type="file" id="rgFile" required>
      </div>

      <div class="mb-3">
        <label for="fotoRGFile" class="form-label">Foto do Trabalhador com RG:</label>
        <input class="form-control" type="file" id="fotoRGFile" required>
      </div>

      <div class="mb-3">
        <label for="cartaFile" class="form-label">Carta de Próprio Punho:</label>
        <input class="form-control" type="file" id="cartaFile" required>
      </div>
      <!-- Fim - Upload de Documentos -->

      <li class="form-input-wide">
        <br>
        <div style="float: left;" class="form-pagebreak" data-component="pagebreak">
          <a href="trabalhador.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
        </div>

        <div style="float: right;" class="form-pagebreak" data-component="pagebreak">
          <button type="button" class="btn btn-primary" id="sendButton">Enviar</button>
        </div>
      </li>
    </ul>
  </div>
</form>

<script>
    document.getElementById('sendButton').addEventListener('click', function() {
        let erros = []; // Array para acumular as mensagens de erro

        // Obtendo os valores dos campos de upload
        const rgFile = document.getElementById('rgFile').files.length;
        const fotoRGFile = document.getElementById('fotoRGFile').files.length;
        const cartaFile = document.getElementById('cartaFile').files.length;

        // Validações
        if (rgFile === 0) {
            erros.push('Por favor, faça o upload do Documento de Identidade (RG).');
        }
        if (fotoRGFile === 0) {
            erros.push('Por favor, faça o upload da Foto do Trabalhador com RG.');
        }
        if (cartaFile === 0) {
            erros.push('Por favor, faça o upload da Carta de Próprio Punho.');
        }

        // Exibe os erros acumulados, se houver
        if (erros.length > 0) {
            alert(erros.join('\n'));
        } else {
            // Se não houver erros, você pode prosseguir com o envio do formulário
            alert('Documentos enviados com sucesso!');
            // window.location.href = "proxima_pagina.php"; // Redireciona para a próxima página, se necessário
        }
    });
</script>

</body>
</html>
