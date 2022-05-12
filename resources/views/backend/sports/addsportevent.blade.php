@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <h6 class="mb-0 text-uppercase">Sports Events</h6>
        <hr/>
        <div class="card">
            <div class="card-body">

                <form>


                    <div class="mb-3">
                        <label class="form-label">Sports</label>
                        <select class="single-select form-control">
                            <option value="">Select Sport</option>
                            <option value="Delta">Athletics</option>
                            <option value="Kano">Badminton</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event Name</label>
                        <input type="text" class="form-control">
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
                                <th>SN</th>
                                <th>Sport</th>
                                <th>Sport Event</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Badminton</td>
                                <td>Event Name</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Badminton</td>
                                <td>Event Name</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tennis</td>
                                <td>Event Name</td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Volley Ball</td>
                                <td>Event Name</td>

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

