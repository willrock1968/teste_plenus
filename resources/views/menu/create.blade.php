@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Cadastro de Produtos</h1>

<form class="form" method="post" action="{{route('produtos.store')}}">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="form-group">
		<input type="text" name="nome" placeholder="Nome" class="form-control">
	</div>

	<div class="form-group">
		<input type="checkbox" name="ativo" >Ativo?
		
	</div>

	<div class="form-group">	
		<input type="text" name="numero" placeholder="Número" class="form-control">
		
	</div>

	<div class="form-group">
		<select class="form-control">
			<option>Escolha a Categoria</option>
			@foreach($categorias as $categoria)
				<option value="{{$categoria}}">{{$categoria}}</option>
			@endforeach
		</select>
		
	</div>

	<div class="form-group">	
		<textarea name="descricao" placeholder="descricao" class="form-control">
			
		</textarea>
	</div>

	<div class="form-group">	
		<button class="btn btn-primary">Cadastrar</button>
	</div>
	
</form>		

@endsection