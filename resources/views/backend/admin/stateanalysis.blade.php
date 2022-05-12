@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">State Analysis</h6>
        <hr/>
        <div class="card">
            <div class="card-body">

                <form>

                    <div class="mb-3">
                        <label class="form-label">State</label>
                        <select class="single-select form-control">
                            <option value="">Select State</option>
                            <option value="Delta">Delta</option>
                            <option value="Kano">Kano</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Kwara">Kwara</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sports</label>
                        <select class="single-select form-control">
                            <option value="">Select Sport</option>
                            <option value="Delta">Athletics</option>
                            <option value="Kano">Badminton</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="single-select form-control">
                            <option value="">Select Gender</option>
                            <option value="Delta">Male</option>
                            <option value="Kano">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg">Submit</button>
                    </div>

                </form>

            </div>
        </div>

        <h6 class="mb-0 text-uppercase">Results</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Sports</th>
                                <th>Sport Event</th>
                                <th>State</th>
                                <th>Status</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>James Oricha</td>
                                <td>Swimming</td>
                                <td>Aquatics</td>
                                <td>Lagos</td>
                                <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Accepted</span></td>
                                <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                            </tr>


                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

