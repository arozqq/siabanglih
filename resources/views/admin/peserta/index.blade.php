@extends('layouts.admin-master')
@section('content')
    <div class="row">
        <h3 class="text-white mb-3">Management Peserta</h3>
        <div class="col-lg-8">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="text-secondary-gradient">List Peserta</h5>
        </div>
        <div class="card-body">
           <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Password</th>
                      <th scope="col">Role</th>
                      <th scope="col">Submited</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Updated at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
              </table>
           </div>
        </div>
    </div>
@endsection