@extends('layouts.app')

@section('heading')
    Befunde hochladen
@endsection

@section('content')
<div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Patientendaten</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">

										<form action="/store" enctype="multipart/form-data" method="post">
											<input type="file" name="image">
											<br> 
											<input type="submit" name="Upload">
										</form>
									</div>
								</form>	
							</div>
						</div>
							
@endsection