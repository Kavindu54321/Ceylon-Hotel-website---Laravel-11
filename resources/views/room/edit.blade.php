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
							<h3 class="page-title mt-5">Edit Room</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="{{route('room.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
							<div class="row formtype">
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Booking ID</label>
										<input class="form-control" type="text"value="{{$data->room_id}}" name="room_id" value="room-0001"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<select class="form-control" id="sel1"value="{{$data->name}}" name="name">
										
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
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Rooms condition</label>
									 
											<select class="form-control" id="sel3" value="{{$data->room_condition}}"name="room_condition">
											<option>Select</option>
											<option>Ac</option>
											<option>Non-Ac</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Bed Count</label>
									 
											<select class="form-control" id="sel3"value="{{$data->bed_count}}" name="bed_count">
											<option>Select</option>
											<option>Bed 1</option>
											<option>Bed 2</option>
											<option>Bed 3</option>
											<option>Bed 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Wash Room</label>
									 
											<select class="form-control" id="sel3" value="{{$data->washroom}}"name="washroom">
											
											<option>washroom 1</option>
											<option>washroom 2</option>
											<option>washroom 3</option>
											{{$data->washroom}}
										</select>
									</div>
								</div>
								
							
								
								<div class="col-md-4">
									<div class="form-group">
										<label>File Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile"value="{{$data->image}}" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								
							</div>
							@csrf
						<button type="submit" class="btn btn-primary buttonedit ml-2">Create Room</button>
						<form action="{{route('staff.index')}}">
					@csrf
				<button type="submit" class="btn btn-primary buttonedit ml-2">Cancel</button>
				</form>
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