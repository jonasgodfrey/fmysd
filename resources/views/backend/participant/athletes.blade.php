@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">


        <div class="card">
            <div class="card-body">
                <h6 class="mb-0 text-uppercase">National Sports Festival Registration</h6>
                <hr/>
                <form>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Full Nme</label>
                        <input type="text" name="fullname" id="" class="form-control" placeholder="Your Fullname">
                    </div>


                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Gender</label><br>
                        <input type="radio" name="gender" id="mygen" class="">
                        <label for="">Male</label>
                        <input type="radio" name="gender" id="myfgen" class="">
                        <label for="">Female</label>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Date of Birth</label>
                        <input type="date" name="dob" id="" class="form-control" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="Your Email" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Contact Number</label>
                        <input type="tel" name="tel" id="" class="form-control" placeholder="Your contact no" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">State Representing</label>
                        <select name="dob" id="" class="form-control" placeholder="" required>
                            <option value="">Select State Representing</option>
                            <option value="">Delta</option>
                            <option value="">Lagos</option>
                            <option value="">Abuja</option>
                            <option value="">Cross River</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Game Function</label><br>
                        <input type="radio" name="game" id="athlete" class="">
                        <label for="">Athlete</label>
                        <input type="radio" name="game" id="coach" class="">
                        <label for="">Coach</label>
                        <input type="radio" name="game" id="official" class="">
                        <label for="">Team Official</label>
                        <input type="radio" name="game" id="delegate" class="">
                        <label for="">State Delegate</label>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Sport</label>
                        <select name="dob" id="" class="form-control" placeholder="" required>
                            <option value="">Select Sport Category</option>
                            <option value="">Badminton</option>
                            <option value="">Swimming</option>
                            <option value="">Tokwando</option>
                            <option value="">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-size: 18px">Sports Events</label>
                        <select name="dob" id="" class="form-control" placeholder="" required>
                            <option value="">Select Sport Events</option>
                            <option value="">Sport Event 1</option>
                            <option value="">Sport Event 2</option>
                            <option value="">Sport Event 3</option>
                            <option value="">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" style="font-size: 18px">Participant Photo</label>
                        <input type="file" name="photo" id="myphoto" class="form-control">
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-success btn-lg">Register</button>
                    </div>

                </form>

            </div>
        </div>
        <div class="card radius-10">
            <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <h6 class="mb-0">Participants</h6>
                   </div>
                   <div class="dropdown ms-auto">
                       <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                       </a>
                       <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="javascript:;">Action</a>
                           </li>
                           <li><a class="dropdown-item" href="javascript:;">Another action</a>
                           </li>
                           <li>
                               <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                           </li>
                       </ul>
                   </div>
               </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
               <thead class="table-light">
                <tr>
                  <th>Name</th>
                  <th>Sport</th>
                  <th>Sport Event</th>
                  <th>State</th>
                  <th>Photo</th>
                  <th>Status</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                 <td>John Idowu</td>
                 <td>Wheelchair Basketball</td>
                 <td>Male Team</td>
                 <td>Kaduna</td>
                 <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                 <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Accepted</span></td>
                </tr>
                <tr>
                    <td>John Idowu</td>
                    <td>Power Lifting</td>
                    <td>Male Team</td>
                    <td>Kaduna</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                    <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
                </tr>
                   <tr>
                    <td>John Idowu</td>
                    <td>Power Lifting</td>
                    <td>Male Team</td>
                    <td>Kaduna</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                    <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Accepted</span></td>
                   </tr>
                   <tr>
                    <td>John Idowu</td>
                    <td>Deaf Sport</td>
                    <td>Male Team</td>
                    <td>Kaduna</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                    <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Rejected</span></td>
                </tr>


               </tbody>
             </table>
             </div>
            </div>
   </div>
</div>
<!--end page wrapper -->
@endsection

