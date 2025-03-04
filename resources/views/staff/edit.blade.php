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
							<h3 class="page-title mt-5">Edit Staff Members</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="{{route('staff.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
							<div class="row formtype">
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" type="text" value="{{$data->name}}" name="name"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email ID</label>
										<input class="form-control" type="text" id="usr" value="{{$data->email}}" name="email"> </div>
								</div>
						
		
								<div class="col-md-4">
									<div class="form-group">
										<label>Staff ID</label>
										<input class="form-control" type="text" value="{{$data->staff_id}}" name="staff_id" ></div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Joining Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker"value="{{$data->join_date}}" name="join_date"> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone Number</label>
										<input class="form-control" type="text"value="{{$data->phone_number}}" name="phone_number"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>leaving time</label>
										<input class="form-control" type="text"value="{{$data->leaving_time}}" name="leaving_time" ></div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" id="sel1"value="{{$data->on_duty_role}}" name="on_duty_role">
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
											<input type="file" class="custom-file-input" id="customFile" value="{{$data->image}}" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
							</div>
                            @csrf
					</div>
				</div>
				<button type="submit" class="btn btn-primary buttonedit ml-2">Add Staff</button>
				<form action="{{route('staff.index')}}">
					@csrf
				<button type="submit" class="btn btn-primary buttonedit ml-2">Cancel</button>
				</form>
				
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