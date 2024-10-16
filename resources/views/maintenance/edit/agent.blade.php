@extends('layouts.app')
@section('content')

<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Modifier Agent</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Agent</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>

                                <li class="active">Modifier</li>
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
                            <form action="{{route('update-agent.path',$agent)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card card-box">
                                    <div class="card-body row" id="bar-parent">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="simpleFormNom">Nom</label>
                                                <input type="text" value="{{$agent->nom}}" name="nom" class="form-control" id="simpleFormNom" placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="simpleFormPreom">Prénom </label>
                                                <input type="text" value="{{$agent->prenom}}" name="prenom" class="form-control" id="simpleFormPrenom" placeholder="Prénom ">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="simpleFormContact">Contact</label>
                                                <input type="text" value="{{$agent->contact}}" name="contact" class="form-control" id="simpleFormContact" placeholder="Contact">
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