@extends('site.layout.master')

@section('content')
	<h1>Contato</h1>

	<form action="">
		<div>
			<label for="">Nome</label>
			<input type="text">
		</div>

		<div>
			<label for="">E-mail</label>
			<input type="email">
		</div>

		<div>
			<label for="">Mensagem</label>
			<textarea></textarea>
		</div>
	</form>
@endsection