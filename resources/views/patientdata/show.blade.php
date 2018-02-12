@extends('layouts.app')

@section('heading')
    Meine Daten
    @if ($patientdata !== null)
        <a href="{{ route('patientdata.edit') }}" class="btn btn-danger">Bearbeiten</a>
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
                                <h4 class="title">Patientendaten:</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Vorname:</td>
                                            <td>{{ $patientdata->firstname }}</td>
                                            

                                            
                                        </tr>
                                        <tr>
                                            <td>Nachname:</td>
                                            <td>{{ $patientdata->lastname }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Adresse:</td>
                                            <td>{{ $patientdata->address }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Telefonnummer:</td>
                                            <td>{{ $patientdata->mobilenumber }}</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Geschlecht:</td>
                                            <td>{{ $patientdata->sex }}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>SVNR:</td>
                                            <td>{{ $patientdata->svnr }}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Wirbelsäulen OP:</td>
                                            <td>{{ $patientdata->op }}</td>
                                           
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
@endif
<!--
    <ul class="patientdata">
    <li class="row">
        <div class="col-md-2">
            Vorname:
        </div>
        <div class="col-md-10">
            {{ $patientdata->firstname }}
        </div>
    </li>

    <li class="row">
        <div class="col-md-2">
            Nachname:
        </div>
        <div class="col-md-10">
            {{ $patientdata->lastname }}
        </div>
    </li>

    <li class="row">
        <div class="col-md-2">
            Adresse:
        </div>
        <div class="col-md-10">
            {{ $patientdata->address }}
        </div>
    </li>

    <li class="row">
        <div class="col-md-2">
            Telefonnummer:
        </div>
        <div class="col-md-10">
            {{ $patientdata->mobilenumber }}
        </div>
    </li>

    <li class="row">
        <div class="col-md-2">
            Geschlecht:
        </div>
        <div class="col-md-10">
            {{ $patientdata->sex }}
        </div>
    </li>

    <li class="row">
        <div class="col-md-2">
            SVNR:
        </div>
        <div class="col-md-10">
            {{ $patientdata->svnr }}
        </div>
    </li>
</ul>
-->


@endsection