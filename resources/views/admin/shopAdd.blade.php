@extends('layouts.main')

@section('content')


			<!-- Main content -->
			<div class="content-wrapper">
			@if ($errors->any())
			<div class="row col-6">
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Shop</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Shop</a></li>
							<li class="active">Add</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-12">

							<!-- Basic layout-->
							<form action="/shopStore" method="POST" enctype="multipart/form-data">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Shop</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">

										<div class="form-group col-md-6">
											<label>User ID:</label>
											<select class="select catego" name="user_id">
                                                    <option value="">Choose a </option>
                                                    @foreach($user as $list)
													<option value="{{$list->id}}">{{$list->name}}</option>
                                                    @endforeach
											</select>
										</div>

										<div class="form-group col-md-6">
											<label>Shop ID:</label>
											<input type="text" class="form-control" name="shopID" placeholder="Enter Shop ID" required>
										</div>
										
                                        <div class="form-group col-md-6">
											<label>Shop Name:</label>
											<input type="text" class="form-control" name="shopName" placeholder="Enter Shop Name" required>
										</div>

										<div class="form-group col-md-6">
											<label>Shop Type:</label>
											<select class="select" name="shopType">
													<option value="">Select Type</option>												
													<option value="vehicle">Vehicle</option>
													<option value="vehicle_parts">Vehicle Parts</option>
                                                    <option value="vehicle_&_vehicle_parts">Vehicle & Parts</option>
											</select>
										</div>

										<div class="form-group col-md-6">
											<label>Street Address:</label>
											<div class="row">
											<div class="col-md-3"><input type="text" class="form-control" name="street" placeholder="Enter Street" required></div>
											<div class="col-md-3"><input type="text" class="form-control" name="city" placeholder="Enter City" required></div>
											<div class="col-md-3"><input type="text" class="form-control" name="province" placeholder="Enter Province" required></div>
											<div class="col-md-3"><input type="text" class="form-control" name="country" placeholder="Enter Country" required></div>
											</div>
										</div>
                                        

										<div class="form-group col-md-6">
											<label>Phone Number:</label>
											<div class="row">
											<div class="col-md-6"><input type="text" class="form-control" name="pNumber1" placeholder="Enter Number" required></div>
											<div class="col-md-6"><input type="text" class="form-control" name="pNumber2" placeholder="Enter Number" required></div>	
											</div>
										</div>
                                       

                                        <div class="form-group col-md-6">
											<label>Whatsapp Number:</label>
											<input type="text" class="form-control" name="wNumber" placeholder="Enter Phone" required>
										</div>


										<div class="form-group col-md-6">
											<label>About the shop:</label>
											<textarea rows="5" cols="5" class="form-control" name="about" placeholder="Enter ..."></textarea>
										</div>


										<div class="form-group col-md-3">
											<label>Shop Logo: 800 x 800</label>
											<input type="file" class="file-styled" name="logo" id="imgInp1">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah1" width="92" height="92">
										</div>

										<div class="form-group col-md-3">
											<label>Shop Banner 1: 800 x 1200</label>
											<input type="file" class="file-styled" name="banner" id="imgInp2">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah2" width="140" height="92">
										</div>

										<div class="form-group col-md-3">
											<label>Shop Banner 2: 800 x 1200</label>
											<input type="file" class="file-styled" name="banner2" id="imgInp3">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah3" width="140" height="92">
										</div>

										<div class="form-group col-md-3">
											<label>Shop Banner 3: 800 x 1200</label>
											<input type="file" class="file-styled" name="banner3" id="imgInp4">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah4" width="140" height="92">
										</div>

										<div class="form-group col-md-6">
											<label>Time Duration (Open Closes):</label>
											<div class="row">
											<div class="col-md-3">
											<label for="">* Sunday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="sun1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="sun2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>


											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Monday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="mon1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="mon2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>


											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Tuesday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="tue1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="tue2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>


											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Wednesday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="wen1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="wen2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>


											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Thusday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="thu1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="thu2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>



											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Friday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="fri1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="fri2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>



											<div class="row mt-5">
											<div class="col-md-3">
											<label for="">* Saturday</label>
											</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="sat1" placeholder="Try me&hellip;">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-group">
													<span class="input-group-addon"><i class="icon-alarm"></i></span>
													<input type="text" class="form-control pickatime" name="sat2" placeholder="Try me&hellip;">
													</div>
												</div>
											</div>


										</div>



										
											






										


                                        

										


										<div class="col-md-12 text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

                    <!-- Footer -->
                    <div class="footer text-muted">
					&copy; 2021. <a href="#"> Web App </a> by <a href="" target="_blank">Dothalu</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
@endsection


@section('scripts')
<script>
imgInp1.onchange = evt => {
	const [file] = imgInp1.files
	if (file) {
		blah1.src = URL.createObjectURL(file)
	}
}

imgInp2.onchange = evt => {
	const [file] = imgInp2.files
	if (file) {
		blah2.src = URL.createObjectURL(file)
	}
}	

imgInp3.onchange = evt => {
	const [file] = imgInp3.files
	if (file) {
		blah3.src = URL.createObjectURL(file)
	}
}	

imgInp4.onchange = evt => {
	const [file] = imgInp4.files
	if (file) {
		blah4.src = URL.createObjectURL(file)
	}
}	
</script>

@endsection