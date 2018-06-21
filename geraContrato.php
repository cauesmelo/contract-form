<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autorização de Uso de Imagem</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
    <style>
        @page{
    size: 21cm 29.7cm;
    margin: 30mm 45mm 30mm 45mm; /* change the margins as you want them to be. */
}

.containerA4{
    font-family: Arial, Helvetica, sans-serif;
    width: 21cm;
    height: 29.7cm;
    box-sizing: border-box;
    padding:2.5cm;
    margin: 0 auto;
}

h1{
    font-size:16pt;
}

p{
    font-size:12pt;
}

body{
    margin:0;
}

</style>
    <div class="containerA4">
        <img src="imgform/logo.png" width="250px">
 <p> 

<h1>Autorização para veiculação e direito de uso de imagem</h1>

<p>Considerando que a StillCommerce é uma empresa que auxilia seus clientes no desenvolvimento de projetos fotográficos, prestando também serviço de CASTING (Apresentação de modelos à clientes para seleção de modelo para atuação fotográfica para Site, Catálogo, Revista e campanhas publicitárias ou artísticas, feiras e eventos. Ajustam de um lado a FOTOINOVA ESTUDIO FOTOGRAFICO LTDA, nome fantasia StillCommerce e do outro lado o(a) modelo <?php echo $_POST["nome"]; ?>, nacionalidade <?php echo $_POST["nacionalidade"]; ?>, estado civil <?php echo $_POST["estadocivil"]; ?>, portador da Identidade nº <?php echo $_POST["identidade"]; ?>, residente à <?php echo $_POST["endereco"]; ?>, <?php echo $_POST["bairro"]; ?> – <?php echo $_POST["cidade"]; ?> – <?php echo $_POST["estado"]; ?>. CEP: <?php echo $_POST["cep"]; ?>.
</p>
<p>Eu <?php echo $_POST["nome"]; ?>, CPF <?php echo $_POST["cpf"]; ?>8, identidade número <?php echo $_POST["identidade"]; ?>, órgão emissor <?php echo $_POST["orgao"]; ?>, emissão na data <?php echo $_POST["emissao"]; ?>, autorizo a FOTO INOVA ESTUDIO FOTOGRAFICO LTDA, portador do CNPJ 26.273.269/0001-35 com sede na cidade do Rio de Janeiro, nome fantasia StillCommerce, a promover a captação, utilização e divulgação em site, revista, blog, mídias sociais(Instagram, Facebook, Pinterest, etc.) ou qualquer outro meio de comunicação com a finalidade de promover e divulgar os serviços fotográficos.
</p>
<p>Por esta ser a expressão da minha vontade, declaro que autorizo o uso acima descrito sem que nada haja a ser reclamado a título de direitos conexos à imagem ou a qualquer outro.
A autorização é de interesse comum e correrá 



<?php 
if($_POST["tempo"] == 'comvalidade'){
    echo "com a validade de " . $_POST["txtTempo"] . " a partir da data de assinatura deste contrato";
}else{
    echo $_POST["tempo"];
}
?>
, sem ônus de qualquer espécie à FOTOINOVA ESTUDIO FOTOGRAFICO LTDA, nome fantasia StillCommerce.
</p>
</br>

<?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<p>
Rio de Janeiro, <?php echo strftime("%d de %B de %G"); ?>
</p>

<p><br>
_______________________________________________________________<br>
<?php echo $_POST["nome"]; ?>
</p>

    </div>
    
</body>
</html>