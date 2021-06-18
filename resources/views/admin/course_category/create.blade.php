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
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">@if(isset($course_category)) Edit @else Create @endif Course Category</h3>
											</div>
											<!--begin::Form-->
											<form action="@if(isset($course_category)) {{route('course_category.update',$course_category->id)}} @else {{route('course_category.store')}} @endif" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
												<div class="card-body">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" placeholder="" name="name" value="@if(isset($course_category)){{$course_category->name}}@endif"/>
													</div>
													<div class="form-group">
														<label for="exampleInputPassword1">Slug <span class="text-danger">*</span></label>
														<input type="text" class="form-control" id="" placeholder="" name="slug" value="@if(isset($course_category)){{$course_category->slug}}@endif"/>
													</div>
													<div class="form-group mb-1">
														<label for="exampleTextarea">About</label>
														<textarea class="form-control" id="exampleTextarea" rows="3" name="about">@if(isset($course_category)){{$course_category->about}}@endif</textarea>
													</div>
												</div>
                                                @csrf
												<div class="card-footer">
													<button type="submit" name="submit" class="btn btn-primary btn-sm mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
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
