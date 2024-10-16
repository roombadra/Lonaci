@extends('layouts.app')
@section('content')
                                            
<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Panne</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Panne</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Voir</li>
                            </ol>
                        </div>
                    </div>  
                    <div class="row">
                    	<div class="col-lg-12">
                    			<div class="card card-box">
                                    <div class="card-head">
                                     <header>INFORMATION Panne</header>
                                 </div>
                    				<div class="card-body" id="bar-parent">
                                       
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="simpleFormNom">Panne</label>
                                                        @foreach($pannes as $item)
                                                        @if($lignepanne->id_panne==$item->id)
                                                    <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$item->nom_panne}}">
                                                        @endif
                                                        @endforeach
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="simpleFormPassword">Gravité</label>
                                                    <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$lignepanne->gravite}}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="simpleFormContact">Status</label>
                                                    <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$lignepanne->status}}">
                                                </div>
                                            </div>
                                             <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="simpleFormObservation">Observation</label>
                                                <textarea n class="form-control" id="simpleFormObservation" disabled rows="4">{{$lignepanne->description}}
                                                </textarea>
                                            </div>
                                        </div>
                                        </div>
                                       
                    				</div>
                    				
                    			</div>

                            
                    	</div>
                    </div>
                       </div>
        </div>
            <!-- end page content -->

@stop
