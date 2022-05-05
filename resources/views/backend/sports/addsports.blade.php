@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">Add Sports</h6>
        <hr/>
        <div class="card">
            <div class="card-body">

                <form>

                    <div class="mb-3">
                        <label class="form-label">Sport Type</label>
                        <select class="single-select form-control">
                            <option value="">Select type</option>
                            <option value="Compulsory">Compulsory</option>
                            <option value="Optional">Optional</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Sport</label>
                        <input type="text" class="form-control" name="" placeholder="Sports Name">
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
                                <th>Sn</th>
                                <th>Sport</th>
                                <th>Sport Category</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Badminton</td>
                                <td>Compulsory</td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Athletics</td>
                                <td>Compulsory</td>

                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sn</th>
                                <th>Sport</th>
                                <th>Sport Category</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

