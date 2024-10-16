@extends('layouts.app')

@section('content')

<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Agent de Maintenance</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Liste des Agents</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                        	 @if (session()->has('message'))
                                <div class="alert alert-success  fade show" role="alert">
                                  <strong>{{session('message')}}</strong> 
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                               @endif  
                            <div class="card-box ">
                               <div class="card-head">
                                <div class=" pull-right m-r-20">
                                            <a class="btn btn-info" href="{{ route('agent-add.path') }}" id="addRow">
                                                Ajouter <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                            </div>
                                <div class="card-body ">
                                	<div class="tab-pane" id="tab2">
										<div class="row">
											@foreach($agents as $item)
											<div class="col-md-4">
												<div class="card">
													<div class="m-b-20">
														<div class="doctor-profile">
														<div class="profile-header bg-b-purple">
																<div class="user-name">{{ $item->nom }}</div>
																<div class="name-center">{{ $item->prenom }}</div>
															</div>
															<img src="assets/img/user/usrbig1.jpg" class="user-img"
																alt="">
															<!-- <p>
																A-103, shyam gokul flats, Mahatma Road <br />Mumbai
															</p> -->
															<div>
																<p>
																	<i class="fa fa-phone"></i><a href="tel:(123)456-7890">
																		{{ $item->contact }}</a>
																</p>
															</div>
															<div class="center">
				                                                <a class="btn btn-tbl-edit btn-xs" href="{{ route('agent-edit.path',$item->id) }}">
				                                                    <i class="fa fa-pencil"></i>
				                                                </a>
				                                                <a href="{{ route('destroy-agent.path', $item->id) }}" class="btn btn-tbl-delete btn-xs">
				                                                    <i class="fa fa-trash-o "></i>
				                                                </a>
				                                            </div>
															
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
                                </div>
                                        {{ $agents->links() }}

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end page content -->

@stop