
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
       			width: 350px;
    			text-align: center;
        		left: 200%;
        		top: 100%;
       			margin-left:500px;
        		margin-top:40px;
    			padding: 15px 20px;
    			border: 1px solid #eee;
    			border-radius: 6px;
	 			font-size: 18px;
			}
</style>
	
	<h1>LOGIN</h1>

	<form method="post" action="{{ route('login') }}">
		@csrf
		
		<form class="form-inline">
 		<div class="form-group mx-sm-3 mb-2">
   		 	<label class="sr-only">Login</label>
   		 	<input type="text" class="form-control" placeholder="Login" name="login">
  		</div>

 		<div class="form-group mx-sm-3 mb-2">
    		<label for="inputPassword2" class="sr-only">Senha</label>
    		<input type="password" class="form-control" placeholder="senha" name="senha">
 		</div>

 		<button type="submit" value="Acessar" class="btn btn-primary mb-2">Acessar</button>
		</form>
	</form>
	
	<form method="post" action="{{ route('cadastrar') }}">
		@csrf
	
		<button type="submit" value="Cadastrar" name="cadastrar"  class="btn btn-primary">Cadastrar</button>
	</form>
</body>
</html>