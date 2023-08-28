@extends('site.layout.master')

@section('content')
	<!-- Banner -->
	{{ $codigo_parceiro }}
	@include('site.layout.banner')	

	<!-- Section -->
	@include('site.layout.servicos')	

	<!-- Section -->
	@include('site.layout.blog')	
@endsection