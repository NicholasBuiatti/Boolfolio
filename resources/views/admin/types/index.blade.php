@extends('layouts.app')
@section('content')
	<div>
		@foreach ($types as $type)
			<h1>Tipo: {{ $type->Name }}</h1>
			<p>Descrizione: {{ $type->Description }}</p>
			<p>Icona: <i class="{{ $type->Icon }}"></i></p>
			<a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-primary">more details</a>
		@endforeach
	</div>
@endsection
