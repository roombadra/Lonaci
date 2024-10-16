@extends('layouts.app')
@section('content')
 <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
                     <div class="row">
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="panel-body">
                                      <h3>Pannes resolu</h3>
                                      <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
                                          <div class="progress-bar progress-bar-green width-60" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="text-small margin-top-10 full-width">14% higher than last month</span> </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="panel-body">
                                      <h3>Pannes non resolu</h3>
                                      <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active">
                                          <div class="progress-bar progress-bar-orange width-75" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="text-small margin-top-10 full-width">7% higher than last month</span> </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="card">
                                  <div class="panel-body">
                                      <h3> Nouvelle panne</h3>
                                      <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope active" >
                                          <div class="progress-bar progress-bar-purple width-40" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <span class="text-small margin-top-10 full-width">34% higher than last month</span> </div>
                              </div>
                          </div>
                             
                     </div>
               <!-- end widget -->
               
                     <div class="row">
                       <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card card-box">
                                 <div class="card-head">
                                     <header>Pannes</header>
                                 </div>
                                 <div class="card-body ">
                           <div class="row">
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">This Week</span>
                                 <h5 class="m-b-0">5,286</h5>
                                 <span><i class="material-icons text-success">trending_up</i>
                                    +28%</span>
                              </div>
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">This Month</span>
                                 <h5 class="m-b-0">421</h5>
                                 <span><i class="material-icons text-primary">trending_down</i>
                                    -9%</span>
                              </div>
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">Average</span>
                                 <h5 class="m-b-0">1081</h5>
                                 <span><i class="material-icons text-success">trending_up</i>
                                    +7%</span>
                              </div>
                           </div>
                           <div id="sparkline28"></div>
                        </div>
                             </div>
                       </div>
                       <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card card-box">
                                 <div class="card-head">
                                     <header>Maintenances</header>
                                 </div>
                                 <div class="card-body ">
                                    <div class="row">
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">This Week</span>
                                 <h5 class="m-b-0">1,389</h5>
                                 <span><i class="material-icons text-success">trending_up</i>
                                    +21%</span>
                              </div>
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">This Month</span>
                                 <h5 class="m-b-0">591</h5>
                                 <span><i class="material-icons text-primary">trending_down</i>
                                    -6.3%</span>
                              </div>
                              <div class="col-sm-4 col-4 m-b-10">
                                 <span class="text-muted">Average</span>
                                 <h5 class="m-b-0">781</h5>
                                 <span><i class="material-icons text-success">trending_up</i>
                                    +6%</span>
                              </div>
                           </div>
                           <div id="sparkline29"></div>
                                 </div>
                             </div>
                       </div>
                   </div>
                   <div class="row">
                  <div class="col-sm-12">
                     <div class="card-box">
                        <div class="card-head">
                           <header>Terminal en maintenance</header>
                        </div>
                        <div class="card-body ">
                              <div class="table-responsive">
                              <table class="table">
                                 <tbody style="white-space: nowrap;">
                                    <tr>
                                       <th>Nom Deposant</th>
                                       <th>Prénom Deposant</th>
                                       <th>Contact</th>
                                       <th>Status</th>
                                       <th>Terminal ID</th>
                                       <th>agence</th>
                                       <th>Date</th>
                                       <th>action</th>
                                    </tr>
                                     @foreach($maintenances as $item)
                                    <tr>
                                       <td>{{ $item->nom_deposant }}</td>
                                       <td> {{ $item->prenom_deposant }}</td>
                                       <td>{{ $item->contact }}</td>
                                       <td><span class="label label-warning">En Cours</span></td>
                                          @foreach($terminals as $terminal)
                                          @if($item->id_terminal == $terminal->id)
                                       <td >{{ $terminal->code_guichet }}</td>
                                          @endif
                                          @endforeach

                                          @foreach($agences as $agence)
                                          @if($item->id_agence == $agence->id)
                                       <td >{{ $agence->nom }}</td>
                                          @endif
                                          @endforeach
                                       <td class="center">{{ $item->created_at }}</td>

                                       <td >
                                                <a class="btn btn-tbl-see btn-xs" href="edit_booking.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a class="btn btn-tbl-edit btn-xs" href="edit_booking.html">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                       </td>

                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                           <div class="text-center">
                              <div class="full-width text-center p-t-10" >
                                 <a href="{{ route('maintenance-list.path') }}" class="btn purple btn-outline btn-circle margin-0">Load More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> 
                </div>
            </div>
@stop