@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
@endsection
@section('content')
<main>
    <div class="container m-5">
        <div class="container"><h3><b>User Settings</b></h3>
        </div>

        <form id="settingsForm" method="POST" action="{{route('user.update')}}"  class="container m-5 p-4">
            @csrf
            <div class="row my-2">
                <div class="col">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name='username' placeholder="Username" value='{{Auth::user()->username}}'>
                </div>
                <div class="col">
                <label for="gender" class="form-label">Gender</label>
                  <select name='gender' class="form-control" id="gender">
                      <option  disabled>Gender</option>
                      <option value='0' @if(Auth::user()->gender==0)selected @endif>Male</option>
                      <option value='1' @if(Auth::user()->gender==1)selected @endif>Female</option>
                  </select>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <label for="dateofbirth" class="form-label">Date of Birth</label>
                    <input type="date" name='birthdate' class="form-control" id="dateofbirth" value="{{Auth::user()->birthdate}}">

                </div>
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="text"name='email' class="form-control" id="email" placeholder="Email" value="{{Auth::user()->email}}">

                </div>
            </div>
                <input type="submit" class="btn btn-warning my-3" value="Submit">

            </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
