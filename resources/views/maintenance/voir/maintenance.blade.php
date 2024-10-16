@extends('layouts.app')
@section('content')

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Maintenance</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="">maintenance</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Voir</li>
                </ol>
            </div>
        </div>  
        <div class="row">
           <div class="col-lg-12">
             <div class="card card-box">
                <div class="card-head">
                   <header>INFORMATION MAINTENANCE</header>
               </div>
               <div class="card-body" id="bar-parent">
                <h4 class="" style="margin-top: -1%; margin-bottom: -2%;">Deposant & Concessionnaire</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormNom">Nom Deposant</label>
                            <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$maintenance->nom_deposant}}" placeholder="Nom Deposant">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormPassword">Prénom Deposant</label>
                            <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$maintenance->prenom_deposant}}" placeholder="Prénom Deposant">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Contact</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$maintenance->contact}}" placeholder="Contact">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormNom">Nom Concessionnaire</label>

                            @foreach($terminals as $terminal)
                            @if($maintenance->id_terminal==$terminal->id)
                            @foreach($concessionnaires as $item)
                            @if($terminal->id_concessionnaire==$item->id)
                            <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$item->nom}}" placeholder="Nom Deposant">
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormPassword">Prénom Concessionnaire</label>
                            @foreach($terminals as $terminal)
                            @if($maintenance->id_terminal==$terminal->id)
                            @foreach($concessionnaires as $item)
                            @if($terminal->id_concessionnaire==$item->id)
                            <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$item->prenom}}" placeholder="Prénom Deposant">
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Contact</label>
                            @foreach($terminals as $terminal)
                            @if($maintenance->id_terminal==$terminal->id)
                            @foreach($concessionnaires as $item)
                            @if($terminal->id_concessionnaire==$item->id)
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$item->contact}}" placeholder="Contact">
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="" style="margin-top: -1%; margin-bottom: -2%;">Information Terminal</h4>
                <hr>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormNom">Code Guichet</label>

                            @foreach($terminals as $item)
                            @if($maintenance->id_terminal==$item->id)

                            <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$item->code_guichet}}" placeholder="Nom Deposant">

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormPassword"> Marque</label>
                            @foreach($terminals as $item)
                            @if($maintenance->id_terminal==$item->id)

                            <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$item->marque}}" placeholder="Prénom Deposant">

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Model</label>
                            @foreach($terminals as $item)
                            @if($maintenance->id_terminal==$item->id)

                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$item->model}}" placeholder="Contact">

                            @endif
                            @endforeach
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormNom">Agence</label>

                            @foreach($terminals as $terminal)
                            @if($maintenance->id_terminal==$terminal->id)
                            @foreach($agences as $item)
                            @if($terminal->id_agence==$item->id)
                            <input type="text" disabled class="form-control" id="simpleFormNom" value="{{$item->nom}}" placeholder="Nom Deposant">
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormPassword">Produit</label>
                            @foreach($terminals as $terminal)
                            @if($maintenance->id_terminal==$terminal->id)
                            @foreach($produits as $item)
                            @if($terminal->id_produit==$item->id)
                            <input type="text" disabled class="form-control" id="simpleFormPrenom" value="{{$item->nom}}" placeholder="Prénom Deposant">
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="simpleFormContact">Status</label>
                            <input type="text" disabled class="form-control" id="simpleFormContact" value="{{$maintenance->status}}" placeholder="Contact">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="simpleFormObservation">Observation</label>
                        <textarea n class="form-control" id="simpleFormObservation" disabled rows="4">{{$maintenance->observation}}
                        </textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
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
           <header>Pannes</header>
           <div class=" pull-right m-r-20">
            <a class="btn btn-info" href="{{ route('panne-add.path',[$maintenance->id,$maintenance->id_terminal]) }}" id="addRow">
                Ajouter Panne <i class="fa fa-plus"></i>
            </a>
        </div>
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

            <a class="btn btn-tbl-edit btn-xs" href="{{ route('panne-edit.path',[$maintenance->id, $item->id]) }}">
                <i class="fa fa-pencil"></i>
            </a>
            <a href="{{ route('destroy-panne.path', $item->id) }}" class="btn btn-tbl-delete btn-xs">
                <i class="fa fa-trash-o "></i>
            </a >
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
<div class="row">
    <div class="col-lg-12">
        @if (session()->has('success'))
           <div class="alert alert-success  fade show" role="alert">
              <strong>{{session('success')}}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif 
        <div class="card card-box">
            <div class="card-head">
                <header>Commentaires</header>
                <div class=" pull-right m-r-20">
                    <a class="btn btn-info" href="{{ route('commentaire-add.path',
                    $maintenance->id) }}" id="addRow">
                        Commenter <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body p-t-4">
             <div class="row">
                <ul class="chat nice-chat chat-page small-slimscroll-style">
                    @foreach($historiques as $historique)
                    <li class="in"><img src="{{asset('assets/img/user/user4.jpg')}}" class="avatar" alt="">
                        <div class="message">
                            <span class="arrow"></span> <a class="name" href="#">{{ auth()->user()->name }}</a> <span class="datetime">at {{ $historique->created_at }}</span> 
                            <span class="body"> {{ $historique->commentaire }} </span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>
</div>

</div>
</div>
<!-- end page content -->

@stop
