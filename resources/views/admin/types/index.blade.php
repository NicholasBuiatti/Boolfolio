@extends('layouts.app')
@section('content')
	<div>
		<ul>
			@foreach ($types as $type)
				<li>
					<a href="{{ route('admin.type.show', $type->id) }}">{{ $type->Name }}</a>
				</li>
				{{-- <h1>Tipo: {{ $type->Name }}</h1>
				<p>Descrizione: {{ $type->Description }}</p>
				<p>Icona: <i class="{{ $type->Icon }}"></i></p>
				<a href="{{ route('admin.types.index', $type->id) }}" class="btn btn-primary">more details</a> --}}
			@endforeach

		</ul>
	</div>
@endsection
