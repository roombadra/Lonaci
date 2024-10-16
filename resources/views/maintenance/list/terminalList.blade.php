@extends('layouts.app')

@section('content')

<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Terminal liste</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Terminal</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Terminal liste</li>
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
                                            <a class="btn btn-info" href="{{ route('terminal-add.path') }}" id="addRow">
                                                Ajouter <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                            </div>
                            <div class="card-body ">
                               
                                <div class="table-scrollable">
                                    <table class="table "
                                           id="example4">
                                        <thead>
                                            <tr>
                                                
                                             <th class="center">Code Guichet </th>
                                             <th class="center">Marque </th>
                                             <th class="center">Model </th>
                                             <th class="center">Concessionnaire </th>
                                             <th class="center">Agence</th>
                                             <th class="center">Produit</th>
                                             <th class="center">Status</th>
                                             <th class="center">Date</th>
                                             <th class="center">Actions</th>
                                         </tr>
                                        </thead>
                                        <tbody style="white-space: nowrap;">
                                        @foreach($terminals as $item)
                                        <tr>
                                            <td class="center">{{ $item->code_guichet }}</td>
                                            <td class="center">{{ $item->marque }}</td>
                                            <td class="center">{{ $item->model }}</td>

                                                @foreach($concessionnaires as $concessionnaire)
                                                @if($item->id_concessionnaire == $concessionnaire->id)
                                            <td class="center">{{ $concessionnaire->nom }} {{ $concessionnaire->prenom }}</td>
                                                @endif
                                                @endforeach

                                                @foreach($agences as $agence)
                                                @if($item->id_agence == $agence->id)
                                            <td class="center">{{ $agence->nom }}</td>
                                                @endif
                                                @endforeach

                                                @foreach($produits as $produit)
                                                @if($item->id_produit == $produit->id)
                                            <td class="center">{{ $produit->nom }}</td>
                                                @endif
                                                @endforeach

                                            <td class="center">
                                                @if($item->status=="Terminé")
                                                <span class="label label-sm label-success">{{ $item->status }} </span>
                                                @else
                                                <span class="label label-sm label-warning">{{ $item->status }} </span>
                                                @endif
                                            </td>
                                            <td class="center">{{ $item->created_at }}</td>
                                            <td class="center">
                                                 <a class="btn btn-tbl-see btn-xs" href="{{ route('terminal-voir.path',$item->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn btn-tbl-edit btn-xs" href="{{ route('terminal-edit.path',$item->id) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('destroy-terminal.path', $item->id) }}" class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $terminals->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end page content -->

@stop