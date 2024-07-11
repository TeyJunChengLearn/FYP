@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/announcements.css">
@endsection
@section('content')
    <main>
      <div class="container m-5">
        <div class="container"><h3><b>Announcements and Notices</b></h3></div>
        <div class="container" style="text-align: right;"><p>Search</p></div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="container">
                <h5>Announcement title</h5>
                <p>Announcement details</p>
            </div>
            <hr>
            <div class="container">
                <h5>Announcement title</h5>
                <p>Megan Bright | 19/02/2024</p>
            </div>
            <hr>
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Announcement title</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto">
                <i class="pin-icon">icon</i>
              </div>
            </div>
            <hr>
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto">
                <i class="fa-solid fa-thumbtack pin-icon">important</i>
              </div>
            </div>
            <hr>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
