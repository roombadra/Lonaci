@extends('layouts.app')
@section('content')

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Terminal</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">Terminal</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Voir</li>
                </ol>
            </div>
        </div>  
        <div class="row">
           <div class="col-lg-12">
             <div class="card card-box">
                <div class="card-head">
                   <header>INFORMATION TERMINAL</header>
               </div>
               <div class="card-body" id="bar-parent">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormNom">Code Guichet</label>
                            <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$terminal->code_guichet}}" >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormPassword">Marque</label>
                            <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$terminal->marque}}" >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Modèle</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$terminal->model}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Status</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$terminal->status}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Produit</label>
                            @foreach($produits as $produit)
                            @if($terminal->id_produit == $produit->id)
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{ $produit->nom }}">
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Agence</label>
                            @foreach($agences as $agence)
                            @if($terminal->id_agence == $agence->id)
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{ $agence->nom }}">
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @foreach($concessionnaires as $item)
                    @if($terminal->id_concessionnaire == $item->id)
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Nom Concessionnaire</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$item->nom}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Prénom Concessionnaire</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$item->prenom}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Contact Concessionnaire</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$item->contact}}">
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>HISTORIQUES</header>
                    </div>
                    <div class="card-body ">
                      <div class="table-responsive">
                          <table class="table center">
                           <tbody style="white-space: nowrap;">
                            <tr>
                             <th>Panne</th>
                             <th>Gravité</th>
                             <th>Status</th>
                             <th>Date</th>
                             <th>action</th>
                         </tr>
                         @foreach($listpannes as $item)
                         <tr>
                          @foreach($pannes as $panne)
                          @if($item->id_panne == $panne->id)
                          <td >{{ $panne->nom_panne }}</td>
                          @endif
                          @endforeach
                          <td>{{ $item->gravite }}</td>
                          <td>  @if($item->status=="Terminé")
                            <span class="label label-sm label-success">{{ $item->status }} </span>
                            @else
                            <span class="label label-sm label-warning">{{ $item->status }} </span>
                        @endif</td>
                        <td class="center">{{ $item->created_at->format('d/m/Y') }}</td>
                        <td >
                            <a class="btn btn-tbl-see btn-xs" href="{{ route('panne-voir.path', $item->id) }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
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


