@extends('layouts.app')
@section('content')
                                            
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit  Panne</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Panne</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Modifier</li>
                            </ol>
                        </div>
                    </div>  
                    <div class="row">
                    	<div class="col-lg-12">
                    		<form action="{{route('update-panne.path',$lignepanne)}}" method="POST">
                                @csrf
                    			<div class="card card-box">
                    				<div class="card-body row" id="bar-parent">
                                           <div class="col-lg-4" hidden>
                                            <div class="form-group">
                                                <label for="simpleFormTerminal">Panne</label>
                                                    @foreach($pannes as $item)
                                                     @if($lignepanne->id_panne==$item->id)
                                                <input type="text"   class="form-control" name="id_panne" placeholder=" {{$item->nom_panne}}" value="{{$lignepanne->id_panne}}">
                                                     @endif
                                                    @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="simpleFormTerminal">Panne</label>
                                                    @foreach($pannes as $item)
                                                     @if($lignepanne->id_panne==$item->id)
                                                <input type="text" disabled  class="form-control"  placeholder=" {{$item->nom_panne}}" >
                                                     @endif
                                                    @endforeach
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
                                                <input type="text" name="id_terminal" value="{{$lignepanne->id_terminal}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 hidden">
                                            <div class="form-group">
                                                <input type="text" name="maintenance" value="{{$maintenance}}">
                                            </div>
                                        </div>
                    					<div class="col-lg-12">
                    						<div class="form-group">
                                            	<label for="simpleFormObservation">Observation</label>
                                            	<textarea name="description"  class="form-control" id="simpleFormObservation" rows="4">{{$lignepanne->description}}
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

