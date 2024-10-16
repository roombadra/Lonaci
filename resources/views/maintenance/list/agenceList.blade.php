@extends('layouts.app')
@section('content')

<!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Agences</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="">Agences</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Liste</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         @if (session()->has('message'))
                                <div class="alert alert-success  fade show" role="alert">
                                  <strong>{{session('message')}}</strong> 
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                               @endif  
                        <div class="card card-box">
                            <div class="card-head">
                                <div class=" pull-right m-r-20">
                                            <a class="btn btn-info" href="{{ route('agence-add.path') }}" id="addRow">
                                                Ajouter <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                            </div>
                            <div class="card-body ">
                               
                                <div class="table-scrollable">
                                    <table class="table"
                                           id="example4">
                                        <thead>
                                        <tr>
                                            <th class="center"> Code Agence</th>
                                            <th class="center"> Nom</th>
                                            <th class="center"> Ville/Commune</th>
                                            <th class="center"> Action</th>
                                            <!-- <th class="center"> Action</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($agences as $item)
                                        <tr>
                                            <td class="center">{{ $item->code }}</td>
                                            <td class="center">{{ $item->nom }}</td>
                                            <td class="center">{{ $item->ville }}</td>
                                            <td class="center">
                                                <a class="btn btn-tbl-edit btn-xs" href="{{ route('agence-edit.path',$item->id) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('destroy-agence.path', $item->id) }}" class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                        {{ $agences->links() }}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->

@stop