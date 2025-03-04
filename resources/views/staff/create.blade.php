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
							
							<h3 class="page-title mt-5">Add Staff Members</h3>
							 
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="{{route('staff.store')}}" method="POST" enctype="multipart/form-data">
							<div class="row formtype">
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" type="text" name="name"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email ID</label>
										<input class="form-control" type="text" name="email"> </div>
								</div>
						
		
								<div class="col-md-4">
									<div class="form-group">
										<label>Staff ID</label>
										<input class="form-control" type="text" name="staff_id" value="001"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Joining Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" name="join_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone Number</label>
										<input class="form-control" type="text" name="phone_number"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>leaving time</label>
										<input class="form-control" type="text" name="leaving_time" value="8:00AM to 5:00PM"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" id="sel1" name="on_duty_role">
											<option>Select</option>
											<option>Admin</option>
											<option>Manager</option>
											<option>Staff</option>
											<option>Room Cleaners</option>
											<option>Servants</option>
											<option>Accountant</option>
											<option>Receiptionalist</option>
										</select>
									</div>
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
							</div>
                            @csrf
							
					</div>
				
				</div>
				
				<button type="submit" class="btn btn-primary buttonedit ml-2">submit</button>
						
				
                </form>
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