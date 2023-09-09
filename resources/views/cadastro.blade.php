<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

       h1 , p{

				padding: 15px 20px;		
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100;
                margin: 10;
				text-align: center;
            }
       form{
				position: relative;
				transform: translate(-50%);
  				left: 50%;
				width: 400px;
    			text-align: center;
        		
				
        		margin-top:40px;
    			padding: 15px 20px;
    			border: 1px solid #eee;
    			border-radius: 6px;
	 			font-size: 18px;
				
		}
</style>

	<h1>Cadastro</h1>

	<form class="form-centralizado" method="post" action="{{ route('usuario_novo') }}">
		@csrf

		<form class="form-inline">
 		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Nome</label>
   			<input type="text" class="form-control" placeholder="Nome" name="nome">
  		</div>

  		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">email</label>
   			<input type="text" class="form-control" placeholder="Email" name="email">
  		</div>

		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Senha</label>
   			<input type="password" class="form-control" placeholder="Senha" name="senha">
  		</div>
		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Cidade</label>
   			<input type="text" class="form-control" placeholder="Cidade" name="cidade">
  		</div>
		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">CEP</label>
   			<input type="text" class="form-control" placeholder="CEP" name="cep">
  		</div>
		
		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Bairro</label>
   			<input type="text" class="form-control" placeholder="Bairro" name="bairro">
  		</div>

  		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Rua</label>
   			<input type="text" class="form-control" placeholder="Rua" name="rua">
  		</div>

  		<div class="form-group mx-sm-3 mb-2">
   			<label class="sr-only">Numero</label>
   			<input type="text" class="form-control" placeholder="Numero" name="numero">
  		</div>

  		
		<select class="uf" name="uf">

		<option>UF</option>
  		<option>AC</option>
  		<option>AL</option>
  		<option>AP</option>
  		<option>AM</option>
  		<option>BA</option>
  		<option>CE</option>
  		<option>DF</option>
  		<option>ES</option>
  		<option>GO</option>
  		<option>MA</option>
  		<option>MT</option>
  		<option>MS</option>
  		<option>MG</option>
  		<option>PA</option>
  		<option>PB</option>
  		<option>PR</option>
  		<option>PE</option>
  		<option>PI</option>
  		<option>RJ</option>
  		<option>RN</option>
  		<option>RS</option>
  		<option>RO</option>
  		<option>RR</option>
  		<option>SC</option>
  		<option>SP</option>
  		<option>SE</option>
  		<option>TO</option>
  		</select>
		
		<button type="submit" name="Enviar"  class="btn btn-primary">Enviar</button>
	</form>
</body>
</html>