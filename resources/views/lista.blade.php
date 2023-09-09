<!DOCTYPE html>
<html>
<head>
	<title>Lista de pessoas</title>
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

	<h1>Lista de pessoas no banco de dados</h1>

	<ul class="list-group">
		@foreach ($usuarios as $u)
  <li class="list-group-item list-group-item-action list-group-item-secondary">{{$u->nome}}</li>
 
  @endforeach
</ul>

	<form method="post" action="{{ route('relogar') }}">
		@csrf
	
		<button type="submit" value="Relogar" name="relogar"  class="btn btn-primary">Relogar</button>
	</form>



</body>
</html>