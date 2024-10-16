@extends('layouts.app')
@section('content')

<!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Maintenance Terminal</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="">Maintenances</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Listes des Maintenances</li>
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
                                            <a class="btn btn-info" href="{{ route('maintenance-add.path') }}" id="addRow">
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
                                                
                                             <th class="center">Nom Deposant</th>
                                             <th class="center">Prénom Deposant</th>
                                             <th class="center">Contact</th>
                                             <th class="center">Terminal ID</th>
                                             <th class="center">agence</th>
                                             <th class="center">Status</th>
                                             <th class="center">Date</th>
                                             <th class="center"> Action</th>
                                         </tr>
                                        </thead>
                                        <tbody style="white-space: nowrap;">
                                            @foreach($maintenances as $item)
                                        <tr>
                                            <td class="center">{{ $item->nom_deposant }}</td>
                                            <td class="center">{{ $item->prenom_deposant }}</td>
                                            <td class="center"><a href="tel:{{ $item->contact }}">
                                                {{ $item->contact }} </a></td>
                                            
                                           
                                                @foreach($terminals as $terminal)
                                                @if($item->id_terminal == $terminal->id)
                                            <td class="center">{{ $terminal->code_guichet }}</td>
                                                 @endif
                                                @endforeach

                                                 @foreach($agences as $agence)
                                                @if($item->id_agence == $agence->id)
                                            <td class="center">{{ $agence->nom }}</td>
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
                                                <a class="btn btn-tbl-see btn-xs" href="{{ route('maintenance-voir.path',$item->id) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn btn-tbl-edit btn-xs" href="{{ route('maintenance-edit.path',$item->id) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('destroy-maintenance.path', $item->id) }}" class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                {{ $maintenances->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->

@stop