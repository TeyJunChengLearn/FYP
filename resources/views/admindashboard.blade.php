@extends('layouts.admindashboardnavbar')
@section('content')
        <div class="w-100">
            <div class="py-3 px-5">
                <h3 class="p-0 m-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <p class="p-0 m-0 ">Welcome to AllPets' Admin Dashboard</p>
                    <button type="button" class="btn btn-outline-warning ms-auto fw-bold" style="color: black !important">Add Notes</button>
                </div>
                <div class="row gap-2">
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3 text-nowrap">Forum Posts</p>
                            <h2>7438</h2>
                            <p class="text-success">+2.1%</p>
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/stonk.jpg"/>
                    </div>
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3">New Pets</p>
                            <h2>7438</h2>
                            <p class="text-danger">-2.1%</p>
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/notstonk.jpg"/>
                    </div>
                    <div class="m-5 col shadow rounded-4 d-flex">
                        <div>
                            <p class="pt-3 text-nowrap">New Users</p>
                            <h2>7438</h2>
                            <p class="text-info">&#xb1 2.1%</p>
                        </div>
                        <img class="px-2 img-fluid rounded-4" src="/img/confusedstonk.jpg"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="m-5 mt-3 col shadow rounded-4 d-flex">
                    <div class="d-flex justify-content-between">
                        <div class="col">
                            <h5 class="p-1 mt-2">Server Status</h5>
                        </div>
                        <div class="col flex-end dropdown">
                            <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            </div>
                          </div>
                          <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          </div>
                          </div>
                          <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          </div>
                          </div>
                           <div class="progress vertical">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                          </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
