@extends('layouts.app')
@section('content')

<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Panne</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Panne</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>

                                <li class="active">ajouter</li>
                            </ol>
                        </div>
                    </div>  
                     <div class="row">
                    	<div class="col-lg-12">
                            <div class="col-md-offset4 col-lg-6">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            </div>
                    		<form action="{{route('store-panne.path', $maintenance)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                    			<div class="card card-box">
                    				<div class="card-body row" id="bar-parent">
                    					<div class="col-lg-4">
                    						<div class="form-group">
                                            	<label for="simpleFormTerminal">Panne</label>
                                            	<select name="id_panne" class="form-control" id="simpleFormTerminal">
                                            		@foreach($pannes as $item)
                                                    <option value ="{{ $item->id }}">{{ $item->nom_panne }}
                                                   </option>
                                                   @endforeach
                                            	</select>
                                        	</div>
                    					</div>
                    					
                    					<div class="col-lg-4">
                    						<div class="form-group">
                                            	<label for="simpleFormStatus">Gravité</label>
                                            	<select name="gravite" class="form-control" id="simpleFormStatus">
                                                    <option value="Pas Grave">Pas Grave</option>
                                                    <option value="Moyen">Moyen</option>
                                                    <option value="Très Grave">Très Grave</option>
                                            	</select>
                                        	</div>
                    					</div>
                    					<div class="col-lg-4">
                    						<div class="form-group">
                                            	<label for="simpleFormStatus">Status</label>
                                            	<select name="status" class="form-control" id="simpleFormStatus">
                                                    <option value="en cours">En cours</option>
                                                    <option value="Terminé">Terminé</option>
                                            	</select>
                                        	</div>
                    					</div>
                                        <div class="col-lg-6 hidden">
                                            <div class="form-group">
                                                <input type="text" name="id_terminal" value="{{$terminal}}">
                                            </div>
                                        </div>
                    					<div class="col-lg-12">
                    						<div class="form-group">
                                            	<label for="simpleFormObservation">Description</label>
                                            	<textarea name="description" class="form-control" id="simpleFormObservation" rows="4"></textarea>
                                        	</div>
                    					</div>
                    					<div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
						            </div>
                    				</div>
                    				
                    			</div>
                    		</form>
                    	</div>
                    </div>
            </div>
        </div>
            <!-- end page content -->


@stop