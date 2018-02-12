@extends('layouts.app')

@section('heading')
    Anamneseformular
    @if ($patientdata !== null)
        <a href="{{ route('anamnesis.edit') }}" class="btn btn-danger">Bearbeiten</a>
    @endif
@endsection

@section('content')

@if ($patientdata === null) 
	<div>
		You didn't set your patient data yet. <a href="{{ route('patientdata.create') }}" class="btn btn-primary">Do it now!</a>
	</div>
@else

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Anamneseblatt</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>
                                        
                                        <tr>
                                            <td>Wirbelsäulen OP:</td>
                                            <td>{{ $patientdata->op }}</td>
                                           
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
@endif