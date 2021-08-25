@extends('backend.master')
@section('content')


<div class="page-content">
		<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3" style="border:none">Prisoner Registration</div>
		<div class="ms-auto">
			<div class="btn-group">
			<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#examplePrimaryModal" onclick="add()">Add</button>
			</div>
		</div>
	</div>
	<!--end breadcrumb-->
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example2" class="table table-bordered mb-0">
					<thead>
						<tr>
							<th>Serial</th>
							<th>Full Name</th>
							<th>Photo</th>
							<th>Case ID</th>
							<th>Prisoner ID</th>
							<th>National ID</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Nixon</td>
							<td>
								<img src="{{asset('public/backend/assets/images/avatars/avatar-1.png')}}" width="60px" alt="user avatar">
							</td>
							<td>232333</td>
							<td>1200</td>
							<td>1234567890</td>
							<td>22</td>
							<td>Male</td>
							<td>Dhaka</td>
							<td>
								<div class="d-flex order-actions">
                                    <a href="javascript:;" class="" data-bs-toggle="modal" data-bs-target="#examplePrimaryModal" onclick="add()"><i class='bx bxs-edit'></i></a>

                                    <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                </div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Nixon</td>
							<td>
								<img src="{{asset('public/backend/assets/images/avatars/avatar-1.png')}}" width="60px" alt="user avatar">
							</td>
							<td>232333</td>
							<td>1200</td>
							<td>1234567890</td>
							<td>22</td>
							<td>Male</td>
							<td>Dhaka</td>
							<td>
								<div class="d-flex order-actions">
                                    <a href="javascript:;" class="" data-bs-toggle="modal" data-bs-target="#examplePrimaryModal" onclick="add()"><i class='bx bxs-edit'></i></a>

                                    <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                </div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Nixon</td>
							<td>
								<img src="{{asset('public/backend/assets/images/avatars/avatar-1.png')}}" width="60px" alt="user avatar">
							</td>
							<td>232333</td>
							<td>1200</td>
							<td>1234567890</td>
							<td>22</td>
							<td>Male</td>
							<td>Dhaka</td>
							<td>
								<div class="d-flex order-actions">
                                    <a href="javascript:;" class="" data-bs-toggle="modal" data-bs-target="#examplePrimaryModal" onclick="add()"><i class='bx bxs-edit'></i></a>

                                    <a href="javascript:;" class="ms-3"><i class='bx bxs-trash'></i></a>
                                </div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="examplePrimaryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title">Prisoner Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="border p-4 rounded">
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Case ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Case ID">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Prisoner ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Prisoner ID">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Prisoner Full Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Full Name">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">National ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter National ID">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Age</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Age">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Gender</label>
							<div class="col-sm-9">
								<div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
								
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEnterYourName" class="col-sm-3 col-form-label">Address</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Address">
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Photo </label>
							<div class="col-sm-9">
								<input class="form-control" type="file" name="files" accept=".jpg, .png, .pdf">
							</div>
						</div>

					</div>
            </div>
            <div class="modal-footer">                
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection('content')

<script type="text/javascript">
	function add(){
        $.ajax({
            url: "{{route('addPolice')}}",
            success: function(res) {
                $('.modal-body').html(res);
                $('#examplePrimaryModal').modal('show');    
            }
        });
    }
</script>

