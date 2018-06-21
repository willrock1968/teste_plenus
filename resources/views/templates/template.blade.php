<!DOCTYPE html>
<html> 
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		
		<meta name="csrf-token" content="{{ csrf_token() }}">

		 
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>

		<script type="text/javascript" src="js/angular-route.min.js"></script>
				
		<script type="text/javascript" src="js/app.js"></script>

		<script type="text/javascript" src="js/rotas.js"></script>

		<script type="text/javascript" src="js/controllers/menu.js"></script>

				
		<title>Plenus Sistemas</title>
		

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		<meta name="description" content="Responsive Multi-Level Menu: Space-saving drop-down menu with subtle effects" />
		<meta name="keywords" content="multi-level menu, mobile menu, responsive, space-saving, drop-down menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<!-- app e controller angular js -->
		<div class="container demo-1" ng-app="plenus" ng-controller="menu">	
						
			<div class="main clearfix" >
				
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
														
							@foreach($itens_nivel1 as $item)
								<li>
									<a href="#" ng-click="getItens_nivel2({{$item->iditens_nivel1}})">		{{$item->nivel1}}
									</a>
								</li>	
							@endforeach
													
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
				
				<!-- Form -->

				<div class="column">
					
					<br>

					<div class="form-group">
						
						<label>Selecione o nível do menu que deseja cadastrar</label>
						<select class="form-control" ng-change="verificaNivel()" ng-model="nivel">
							<option value="1">Nível 1</option>
							<option value="2">Nível 2</option>
									
						</select>
					</div>


					<div ng-show="mostraPrimeiroNivel">
						<div class="form-group">	
							<input type="text" ng-model="menu.nivel1" placeholder="Digite um item de primeiro nível" class="form-control">
							
						</div>
					</div>

					<div ng-show="mostraPrimeiroNivelSelect">
						<label>Escolha em qual nível 1 de menu irá cadastrar esse item</label>
						<select class="form-control" ng-model="menu.iditens_nivel1">
							@foreach($itens_nivel1 as $item)
								<option value="{{$item->iditens_nivel1}}">
									{{$item->nivel1}}
								</option>
							@endforeach
						</select>
					</div>	
					<br>

					<div ng-show="mostraSegundoNivel">
						<div class="form-group">	
							<input type="text" ng-model="menu.nivel2" placeholder="Digite um item de segundo nível" class="form-control">
							
						</div>
					</div>

					<br>
					<div class="form-group">	
						<button class="btn btn-primary" ng-click="cadastrar()">Cadastrar</button>
					</div>
				</div>	
			</div>
		</div><!-- /container -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu();
			});
		</script>
		
		<!-- code -->
		
		
		@yield('content')

	</body>
</html>
