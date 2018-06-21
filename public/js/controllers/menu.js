app.controller('menu', function($scope, $http)
{
	
	
	$scope.verificaNivel = function()
	{
		
		var nivel = $scope.nivel;

		if (nivel == 1)
		{
			$scope.mostraPrimeiroNivel = true;
			$scope.mostraSegundoNivel = false;
			$scope.mostraPrimeiroNivelSelect = false;
			
		}
		else if (nivel == 2)
		{
			
			$scope.mostraPrimeiroNivel = false;
			$scope.mostraSegundoNivel = true;
			
			$scope.mostraPrimeiroNivelSelect = true;
		}
		
	}

	$scope.cadastrar = function()
	{
		var nivel = $scope.nivel;
		var menu  = $scope.menu;
		
		if (nivel == 1)
		{
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
		else if (nivel == 2)
		{
			var config = 
		    {
		        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		        data : menu, 
		        method: 'POST',
		        url :  "api/inserirSegundoNivel"  
		    }
		    $http(config).then(function successCallback(response) 
		    {   
		    	console.log(response.data);
			});
		}
	} 

	$scope.getItens_nivel2 = function(iditens_nivel1)
	{
		
		var config = 
	    {
	        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	        data : iditens_nivel1, 
	        method: 'POST',
	        url :  "api/getItens_nivel2"  
	    }
	    $http(config).then(function successCallback(response) 
	    {   
	    	console.log(response.data);
	    	$scope.itens_nivel2 = response.data;
		});
	}

});