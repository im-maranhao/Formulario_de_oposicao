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
<form class="form-form">
  <!-- Logo -->
  <div id="formCoverLogo" style="margin-bottom:10px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
    <div class="form-page-cover-image-wrapper" style="max-width:752px"><img src="assets/DATIMA.png" class="form-page-cover-image" width="147" height="120" aria-label="Form Logo" style="aspect-ratio:147/120" /></div>
  </div>
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h4>Informações da Empresa</h4>
            <!-- <div id="subHeader_1" class="form-subHeader">Faça o envio dos seus documentos para que possamos dar andamento no processo seletivo.</div> -->
          </div>
        </div>
      </li>

      <!-- Formulário - Informações da Empresa -->
      
      <li class="form-line jf-required" data-type="control_fullname" id="id_10"><label class="form-label form-label-left form-label-auto" id="label_10" for="first_10" aria-hidden="false"> Nome da Empresa<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_10" name="q10_nomeCompleto[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_10 given-name" size="10" data-component="first" aria-labelledby="label_10 sublabel_10_first" required="" value="" /><label class="form-sub-label" for="first_10" id="sublabel_10_first" style="min-height:13px">Nome completo da empresa empregadora</label></span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname" id="id_10"><label class="form-label form-label-left form-label-auto" id="label_10" for="first_10" aria-hidden="false">Matriz<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="numeric" id="first_10" name="q10_nomeCompleto[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_10 given-name" size="10" data-component="first" aria-labelledby="label_10 sublabel_10_first" required="" value="" /><label class="form-sub-label" for="first_10" id="sublabel_10_first" style="min-height:13px">Localização da matriz da empresa</label></span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_fullname" id="id_10"><label class="form-label form-label-left form-label-auto" id="label_10" for="first_10" aria-hidden="false">Unidade<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="numeric" id="first_10" name="q10_nomeCompleto[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_10 given-name" size="10" data-component="first" aria-labelledby="label_10 sublabel_10_first" required="" value="" /><label class="form-sub-label" for="first_10" id="sublabel_10_first" style="min-height:13px">Localização da unidade específica onde o trabalhador está alocado.</label></span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_10"><label class="form-label form-label-left form-label-auto" id="label_10" for="first_10" aria-hidden="false">CNPJ<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="numeric" id="first_10" name="q10_nomeCompleto[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_10 given-name" size="10" data-component="first" aria-labelledby="label_10 sublabel_10_first" required="" value="" /><label class="form-sub-label" for="first_10" id="sublabel_10_first" style="min-height:13px">Cadastro Nacional da Pessoa Jurídica da empresa.</label></span>
        </div>
      </li>
      

      <!-- Fim - Informações do Trabalhador -->

      <li class="form-input-wide" >
      <br>
        <div  style="float: left; " class="form-pagebreak" data-component="pagebreak">
          <a href="trabalhador.php" ><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
        </div>

        <div  style="float: right; " class="form-pagebreak" data-component="pagebreak">
          <a href="docs.php" ><button type="button" class="btn btn-outline-primary">Próximo</button></a>
        </div>

      </li>
    </ul>



</main>


</body>
</html>