@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
@endsection
@section('content')
    <main>
      <div class="container m-5">
        <div class="container"><h3><b>Announcements and Notices</b></h3>
        <button id="announcementForm" class="btn btn-warning">Add Announcement</button>
        </div>
        <form id="feedbackForm" method="GET" class="container m-5 p-4" style="background-color: white; ">
            <div>
                 <input class="form-control my-2" id="announcementTitle" type="text" placeholder="Title" required></input>
                 <textarea class="form-control" id="announcementDesc" rows="3" name='content' placeholder="Description" required></textarea>
                 <input type="submit" class="btn btn-warning my-3" value="Submit">
                 {{-- Submit</button> --}}
            </div>
         </form>
        <div class="container m-5 pt-4" style="background-color: white">

            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Announcement title</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto">
                <i class="fas fa-thumbtack"></i>
              </div>
            </div>
            <hr>
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto hidden">
                <i class="fas fa-thumbtack"></i>
              </div>
            </div>
            <hr>
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto hidden">
                <i class="fas fa-thumbtack"></i>
              </div>
            </div>
            <hr>
            <div class="container d-flex">
              <div class="col flex-grow-1">
                <h5>Website Maintainence Soon (Free 10 Pulls)</h5>
                <p>Megan Bright | 19/02/2024</p>
              </div>
              <div class="col-auto hidden">
                <i class="fas fa-thumbtack"></i>
              </div>
            </div>
            <hr>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@endsection
