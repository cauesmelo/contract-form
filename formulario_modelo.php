<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Autorização de Uso de Imagem - StillCommerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<script type="text/javascript">
			function fMasc(objeto,mascara) {
				obj=objeto
				masc=mascara
				setTimeout("fMascEx()",1)
			}
			function fMascEx() {
				obj.value=masc(obj.value)
			}
			function mTel(tel) {
				tel=tel.replace(/\D/g,"")
				tel=tel.replace(/^(\d)/,"($1")
				tel=tel.replace(/(.{3})(\d)/,"$1)$2")
				if(tel.length == 9) {
					tel=tel.replace(/(.{1})$/,"-$1")
				} else if (tel.length == 10) {
					tel=tel.replace(/(.{2})$/,"-$1")
				} else if (tel.length == 11) {
					tel=tel.replace(/(.{3})$/,"-$1")
				} else if (tel.length == 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				} else if (tel.length > 12) {
					tel=tel.replace(/(.{4})$/,"-$1")
				}
				return tel;
			}
			function mCNPJ(cnpj){
				cnpj=cnpj.replace(/\D/g,"")
				cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
				cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
				cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
				cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
				return cnpj
			}
			function mCPF(cpf){
				cpf=cpf.replace(/\D/g,"")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
				cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return cpf
			}
			function mCEP(cep){
				cep=cep.replace(/\D/g,"")
				cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
				cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
				return cep
			}
			function mNum(num){
				num=num.replace(/\D/g,"")
				return num
			}

      function checaTempo(){
        if(document.getElementById("comTempo").checked == true){
          document.getElementById("txtTempo").disabled = false;
        }else if(document.getElementById("semTempo").checked == true){
          document.getElementById("txtTempo").disabled = true;
        }
      }
  

        </script>
        
        <!-- FIM DO JAVASCRIPT -->


        <style>
            #formulario{
                width:600px;
                padding-bottom:150px;
            }

            body{
              font-family: 'Lato', sans-serif;
            }
            </style>

            <!-- FIM DO CSS -->



<form action="/geraContrato.php" method="POST">
    <div id="formulario" class="container">
    <h1><img src="imgform/logo.png" width="200px"></h1>
  <div class="form-group">
    <label for="nome">Nome Completo</label>
    <input type="text" class="form-control" name="nome" required>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="cpf">CPF</label>
    <input type="text" maxlength="14" class="form-control" name="cpf" name="cpf" onkeydown="javascript: fMasc( this, mCPF );">
  </div>
  <div class="form-group col-md-6">
    <label for="identidade">Identidade</label>
    <input type="text" maxlength="14" class="form-control" onkeydown="javascript: fMasc( this, mNum);" name="identidade">
  </div>
          </div>

<div class="form-row">
    <div class="form-group col-md-6">
    <label for="orgao">Orgão Emissor</label>
    <input type="text" class="form-control" name="orgao">
  </div>
    <div class="form-group col-md-6">
    <label for="emissao">Data de Emissão</label>
    <input type="date"  class="form-control" name="emissao">
  </div>
          </div>

<div class="form-row">
    <div class="form-group col-md-6">
    <label for="nacionalidade">Nacionalidade</label>
    <input type="text" class="form-control" name="nacionalidade">
  </div>

    <div class="form-group col-md-6">
    <label for="estadocivil">Estado Civil</label>
    <input type="text" class="form-control" name="estadocivil">
  </div>

  </div>

    <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" name="bairro">
  </div>

    <div class="form-group col-md-6">
    <label for="cep">CEP</label>
    <input type="text" maxlength="10" class="form-control" name="cep" onkeydown="javascript: fMasc( this, mCEP);" >
  </div>
          </div>

<div class="form-row">
    <div class="form-group col-md-6">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade">
  </div>

    <div class="form-group col-md-6">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" name="estado">
  </div>

  </div>

<div class="form-row">
            <label class="col-md-12" for="tempo">Período de tempo</label>
    <div class="form-group col-md-6">
    <input type="radio" id="semTempo" class="" name="tempo" onclick="checaTempo()" value="sem validade determinada"/>
    <label for="semTempo">Sem tempo determinado</span>
  </div>
  <div class="form-group col-md-6">
  <input type="radio" id="comTempo" class="" name="tempo" onclick="checaTempo()" value="comvalidade">
    <label for="comTempo">Com tempo determinado</span>
    <input type="text" id="txtTempo" class="form-control" name="txtTempo" placeholder="dois anos" disabled>
  </div>
          </div>

  

  <button type="submit" class="btn btn-dark">Gerar contrato</button>
</form> 
</div>

</body>
</html>