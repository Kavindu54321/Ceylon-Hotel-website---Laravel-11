<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.head')
</head>

<body>

@include('admin.header')
		@include('admin.sidebar')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Edit Appointments</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="{{ route('customer.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
							<div class="row formtype">
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<select class="form-control" id="sel1" value="{{$data->name}}" name="name">
											<option>Select</option>
											<option>Jennifer Robinson</option>
											<option>Terry Baker</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Type</label>
										<select class="form-control" id="sel2"value="{{$data->room_type}}" name="room_type">
											<option>Select</option>
											<option>Single</option>
											<option>Double</option>
											<option>Quad</option>
											<option>King</option>
											<option>Suite</option>
											<option>Villa</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Total Members</label>
										<select class="form-control" id="sel3"value="{{$data->Total_member}}" name="Total_member">
											<option>Select</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Times</label>
										<select class="form-control" id="sel3"value="{{$data->time}}" name="time">
										    <option>2 House</option>
											<option>Night</option>
											<option>Lunch Time</option>
											<option>One Day</option>
											<option>Two Day</option>
											<option>Weekly</option>
											<option>Monthly</option>
											
										</select>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Arrival Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" value="{{$data->start_date}}" name="start_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Depature Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" value="{{$data->end_date}}" name="end_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email ID</label>
										<input type="text" class="form-control" id="usr"value="{{$data->email}}" name="email"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" class="form-control" id="usr1" value="{{$data->phone_number}}" name="phone_number"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>File Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile" value="{{$data->image}}" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control" rows="5" id="comment" value="{{$data->massage}}" name="massage">{{$data->massage}}</textarea>
									</div>
								</div>
							</div>
							@csrf
						<button type="submit" class="btn btn-primary buttonedit1">Create Appointments</button>
					</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	@include('admin.javascript')
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>