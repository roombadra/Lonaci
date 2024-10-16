@extends('layouts.app')
@section('content')
                                            
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Create new maintenance</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">maintenance</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                    		<form action="{{route('store-maintenance.path')}}" method="POST">
                                @csrf
                    			<div class="card card-box">
                    				<div class="card-body row" id="bar-parent">
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormNom">Nom Deposant</label>
                                            	<input type="text" name="nom_deposant" class="form-control" id="simpleFormNom" placeholder="Nom Deposant">
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormPassword">Prénom Deposant</label>
                                            	<input type="text" name="prenom_deposant" class="form-control" id="simpleFormPrenom"  placeholder="Prénom Deposant">
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormContact">Contact</label>
                                            	<input name="contact" type="text" class="form-control" id="simpleFormContact"  placeholder="Contact">
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormStatus">Status</label>
                                            	<select name="status" class="form-control" id="simpleFormStatus">
                                                    <option value="en cours">En cours</option>
                                                    <option value="Terminé">Terminé</option>
                                            	</select>
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormTerminal">Terminal</label>
                                            	<select name="id_terminal" class="form-control" id="simpleFormTerminal">
                                            		@foreach($terminals as $terminal)
                                                    <option value ="{{ $terminal->id }}">{{ $terminal->code_guichet }}
                                                   </option>
                                                   @endforeach
                                            	</select>
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormAgence">Agence</label>
                                            	<select name="id_agence" class="form-control" id="simpleFormAgence">
                                            		@foreach($agences as $item)
                                                    <option value ="{{ $item->id }}">{{ $item->nom }}
                                                   </option>
                                                   @endforeach
                                            	</select>
                                        	</div>
                    					</div>
                    					<div class="col-lg-12">
                    						<div class="form-group">
                                            	<label for="simpleFormObservation">Observation</label>
                                            	<textarea name="observation" class="form-control" id="simpleFormObservation"  rows="4"></textarea>
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

