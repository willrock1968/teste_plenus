app.controller('menu', function($scope, $http)
{
	
		
	$scope.verificaNivel = function()
	{
		var nivel = $scope.nivel;

		if (nivel == 1)
		{
			$scope.mostraPrimeiroNivel = true;
			$scope.mostraSegundoNivel = false;
			$scope.mostraTerceiroNivel = false;
		}
		else if (nivel == 2)
		{
			
			$scope.mostraPrimeiroNivel = false;
			$scope.mostraSegundoNivel = true;
			$scope.mostraTerceiroNivel = false;

			$scope.mostraPrimeiroNivelSelect = true;
		}
		else if (nivel == 3)
		{
			$scope.mostraPrimeiroNivel = false;
			$scope.mostraSegundoNivel = false;
			$scope.mostraTerceiroNivel = true;
		}

	}

	$scope.cadastrar = function()
	{
		var menu = $scope.menu;
		
		var config = 
	    {
	        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	        data : menu, 
	        method: 'POST',
	        url :  "api/inserirPrimeiroNivel"  
	    }
	    $http(config).then(function successCallback(response) 
	    {   

		});
	} 

});