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
							<h3 class="page-title mt-5">Add Booking</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="{{route('booking.store') }}" method="POST" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Booking ID</label>
										<input class="form-control" type="text" name="bkn_id" value="BKG-0001"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<select class="form-control" id="sel1" name="name">
											<option>Select</option>
											<option>Jennifer Robinson</option>
											<option>Terry Baker</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Room Type</label>
										<select class="form-control" id="sel2" name="room_type">
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
										<select class="form-control" id="sel3" name="Total_member">
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
										<label>Time</label>
										<div class="time-icon">
											<input type="text" class="form-control" id="datetimepicker3" name="time"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Arrival Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" name="start_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Depature Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" name="end_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email ID</label>
										<input type="text" class="form-control" id="usr" name="email"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" class="form-control" id="usr1" name="phone_number"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>File Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control" rows="5" id="comment" name="massage"></textarea>
									</div>
								</div>
							</div>
							@csrf
						<button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
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