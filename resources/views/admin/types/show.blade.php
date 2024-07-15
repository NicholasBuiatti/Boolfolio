@extends('layouts.app')

@section('content')
	<div">
		<h1>Titolo: {{ $type['Name'] }}</h1>
		<h2>Descrizione: {{ $type['Description'] }}</h2>

		</div>
		<a href="/">Torna alla home</a>
	@endsection
