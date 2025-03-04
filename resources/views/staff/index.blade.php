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
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Staff Table</h4>
                                <a href="{{ route('staff.create') }}" class="btn btn-primary float-right veiwbutton ">Add Members</a>
                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
											     <th>ID</th></th>
												 <th>Staff ID</th>
                                                <th>Name</th>
                                                <th>Images</th>
                                                
                                                <th>Emails</th>
                                                <th>Phone Numbers</th>
                                                <th>Join Dates</th>
												<th>Work Times</th>
                                                <th>Roles</th>
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach ($staff as $key => $data)
										@php $key = $key+1; @endphp
											<tr>
											     <td>{{$key}}</td>
												 <td>{{$data->staff_id}}</td>
												 <td>{{$data->name}}</td>
												<td><a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('images/'.$data->image)}}" alt="User Image"></a></td>
													
                                            
												<td>{{$data->email}}</td>
												<td>{{$data->phone_number}}</td>
												<td>{{$data->join_date}}</td>
												<td>{{$data->leaving_time}}</td>
												<td>{{$data->on_duty_role}}</td>
												
												
												
												
												
												
												
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
												<form action="{{route('staff.destroy', $data->id)}}" method="post">
                                                   <a class="btn btn-success m-2" href="{{route('staff.edit', $data->id)}}">Edit</a>
                                                    @csrf
                                                    @method("Delete")
                                                   <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                </form>
													
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('admin.javascript')
</body>

</html>