@extends('admin.layouts.app')
@section('content')
                <!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">Dashboard</h2>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
                                {{-- data tables --}}
                                        <!--begin::Container-->
                                        <div class="container">
                                            <!-- Form Row -->
                                            <div class="row">
                                                <div class="col-md-12 m-auto">

                                            <!--begin::Card-->
                                            <div class="card">
                                                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                                    <div class="card-title">
                                                        <h3 class="card-label">Courses</h3>
                                                    </div>
                                                    <div class="card-toolbar">
                                                        <!--begin::Dropdown-->
                                                        <div class="dropdown dropdown-inline mr-2">
                                                            <button type="button" class="btn btn-sm btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="fas fa-chevron-circle-down"></i>
                                                            </span>Options</button>
                                                            <!--begin::Dropdown Menu-->
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <!--begin::Navigation-->
                                                                <ul class="navi flex-column navi-hover py-2">
                                                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                                                    <li class="navi-item">
                                                                    <a href="" class="navi-link">
                                                                            <span class="navi-icon">
                                                                                <i class="fas fa-plus-circle"></i>
                                                                            </span>
                                                                            <span class="navi-text">Create</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="navi-item">
                                                                    <a href="" class="navi-link">
                                                                            <span class="navi-icon">
                                                                                <i class="fas fa-redo"></i>
                                                                            </span>
                                                                            <span class="navi-text">Refresh</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <!--end::Navigation-->
                                                            </div>
                                                            <!--end::Dropdown Menu-->
                                                        </div>
                                                        <!--end::Dropdown-->
                                                        <button type="button" class="btn btn-sm btn-light-primary font-weight-bolder">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="flaticon-list"></i>
                                                            </span>Course Category</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <!--begin: Datatable-->
                                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable2">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:20px;">S.N.</th>
                                                                <th style="width:150px;">Action</th>
                                                                <th>Name</th>
                                                                <th>Name</th>
                                                                <th style="width:100px;">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <a name="" id="" class="btn btn-success btn-xs p-0 mr-1 float-left" href="" role="button"><span><i class="fas fa-eye p-2"></i></span></a>
                                                                    <a name="" id="" class="btn btn-info btn-xs p-0 mr-1 float-left" href="" role="button"><i class="fa fa-edit p-2"></i></a>

                                                                    <button type="button" class="btn btn-danger font-weight-bolder btn-xs p-0 float-left" data-toggle="modal" data-target="#exampleModalSizeDefault">
                                                                        <span class="navi-icon">
                                                                            <i class="fas fa-minus-circle p-2"></i>
                                                                        </span>
                                                                    </button>
                                                                        <!--begin::Modal-->
                                                                        <div class="modal fade" id="exampleModalSizeDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeDefault" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h6 class="modal-title" id="exampleModalLabel">MAX TV Support Ticket System</h6>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">Are you sure you want to permanently delete this record ?</div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-light-primary font-weight-bold btn-sm float-left" data-dismiss="modal">No</button>
                                                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                                                            <button name="submit" class="btn btn-light-danger font-weight-bold btn-sm float-left">
                                                                                                Yes
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Modal-->
                                                                </td>
                                                                <td>asdf</td>
                                                                <td>
                                                                    <span class="label label-light-info label-inline font-weight-bold">Active</span></td>
                                                                <td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                            <!--end::Card-->
                                                </div>
                                            </div>
                                            <!-- Form Row Ends -->
                                        </div>
                                        <!--end::Container-->
                                {{-- data tables --}}
								</div>
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
@section('content')
