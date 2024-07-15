@extends('layouts.admindashboardnavbar')
@section('css')

@endsection
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

            
        </div>
@endsection
