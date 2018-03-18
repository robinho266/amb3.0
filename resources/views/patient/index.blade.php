@extends('layouts.app')

@section('heading')
    Patienten
@endsection

@section('content')

@if (count($patients) > 0 && count($patients->anamnesis() > 0))
	<ul>
	@foreach ($patients as $patient)
		<li>
			{{ $patient->patientdata->firstname }} {{ $patient->patientdata->lastname }} {{ $patient->anamnesis()->first()->spine_op }}
			<a href="{{ route('patient.show', $patient) }}">Show</a>
		</li>
	@endforeach
	
	
@else
	Keine Patienten gefunden.
@endif

@endsection