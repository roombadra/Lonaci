@extends('layouts.app')
@section('content')
                                            
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit  maintenance</div>
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
                    		<form action="{{route('update-maintenance.path',$maintenance)}}" method="POST">
                                @csrf
                    			<div class="card card-box">
                    				<div class="card-body row" id="bar-parent">
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormNom">Nom Deposant</label>
                                            	<input type="text" class="form-control" name="nom_deposant" id="simpleFormNom" value="{{$maintenance->nom_deposant}}" placeholder="Nom Deposant">
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormPassword">Prénom Deposant</label>
                                            	<input type="text" name="prenom_deposant" class="form-control" id="simpleFormPrenom" value="{{$maintenance->prenom_deposant}}" placeholder="Prénom Deposant">
                                        	</div>
                    					</div>
                    					<div class="col-lg-6">
                    						<div class="form-group">
                                            	<label for="simpleFormContact">Contact</label>
                                            	<input type="text" name="contact" class="form-control" id="simpleFormContact" value="{{$maintenance->contact}}" placeholder="Contact">
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
                                                     @if($maintenance->id_terminal==$terminal->id)
                                                    <option value="{{$terminal->id}} " selected hidden>
                                                    {{ $terminal->code_guichet}}
                                                         </option>
                                                         @endif
                                                    @endforeach
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
                                                     @foreach($agences as $agence)
                                                     @if($maintenance->id_agence==$agence->id)
                                                    <option value="{{$agence->id}} " selected hidden>
                                                    {{ $agence->nom}}
                                                         </option>
                                                         @endif
                                                    @endforeach
                                            		< @foreach($agences as $item)
                                                 <option value ="{{ $item->id }}">{{ $item->nom }}</option>
                                                 @endforeach
                                            	</select>
                                        	</div>
                    					</div>
                    					<div class="col-lg-12">
                    						<div class="form-group">
                                            	<label for="simpleFormObservation">Observation</label>
                                            	<textarea name="observation"  class="form-control" id="simpleFormObservation" rows="4">{{$maintenance->observation}}
                                                </textarea>
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

