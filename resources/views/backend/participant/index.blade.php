@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col-md-6">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                   <div class="card-body">
                       <div class="d-flex align-items-center">
                           <div>
                            <p class="mb-0 text-secondary">Applications</p>
                            <h4 class="my-1 text-info">0</h4>
                            <p class="mb-0 font-13">Applications</p>
                           </div>
                           <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                           </div>
                       </div>
                   </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="card radius-10 border-start border-0 border-3 border-success">
                 <div class="card-body">
                     <div class="d-flex align-items-center">
                         <div>
                             <p class="mb-0 text-secondary">Status</p>
                             <h4 class="my-1 text-info">Accepted</h4>
                             <p class="mb-0 font-13">Status</p>
                         </div>
                         <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-group'></i>
                         </div>
                     </div>
                 </div>
              </div>
            </div>


        </div>



        <!--end row-->
        <div class="card radius-10">
            <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <h6 class="mb-0">My Registration</h6>
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


               </tbody>
             </table>
             </div>
            </div>
   </div>
</div>
<!--end page wrapper -->
@endsection

