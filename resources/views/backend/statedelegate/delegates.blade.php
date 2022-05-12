@extends('layouts.app')

@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">


        <div class="card radius-10">
            <div class="card-body">
               <div class="d-flex align-items-center">
                   <div>
                       <h6 class="mb-0">Delegates</h6>
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
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>State</th>
                  <th>Game Function</th>
                  <th>Photo</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                 <td>John Idowu</td>
                 <td>Male</td>
                 <td>13/12/1982</td>
                 <td>Cross River</td>
                 <td>State Delegate</td>
                 <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                </tr>
                <tr>
                    <td>John Idowu</td>
                    <td>Male</td>
                    <td>13/12/1982</td>
                    <td>Kaduna</td>
                    <td>Team Official</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                </tr>
                <tr>
                    <td>John Idowu</td>
                    <td>Male</td>
                    <td>13/12/1982</td>
                    <td>Bayelsa</td>
                    <td>Coach</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                </tr>
                <tr>
                    <td>John Idowu</td>
                    <td>Male</td>
                    <td>13/12/1982</td>
                    <td>Lagos</td>
                    <td>State Delegate</td>
                    <td><img src="assets/images/products/del.jpg" class="product-img-2" alt="product img"></td>
                </tr>


               </tbody>
             </table>
             </div>
            </div>
   </div>
</div>
<!--end page wrapper -->
@endsection

