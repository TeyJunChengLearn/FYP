@extends('layouts.forumlayout')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/test.css">
@endsection
@section('content')
    <main>
      <div class="container m-5">
        <div class="container"><h3><b>Feedbacks and Suggestions</b></h3>
        <p>Leave your feedbacks here regarding our website!</p>
        <button id="toggleFormBtn" class="btn btn-warning">Add Feedback</button>
        </div>
        <form id="feedbackForm" method="GET" class="container m-5 p-4" style="background-color: white; display: none;">
           <div>
                <label for="forumComment" class="form-label">Leave a Feedback</label>
                <textarea class="form-control" id="forumComment" rows="3" name='content' placeholder="Say something..."></textarea>
                <input type="submit" class="btn btn-warning my-3" value="Submit">
                {{-- Submit</button> --}}
           </div>
        </form>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
              </div>
              <div class="col-10">
                <h6>John Doe</h6>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p>10 minutes ago</p>

            </div>
            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
              </div>
              <div class="col-10">
                <h6>John Doe</h6>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p>10 minutes ago</p>

            </div>
            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
              </div>
              <div class="col-10">
                <h6>John Doe</h6>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <p>10 minutes ago</p>

            </div>
            </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            var form = document.getElementById('feedbackForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        });
    
        document.getElementById('feedbackForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            this.style.display = 'none'; // Hide the form
            // Optionally, you can add code here to handle the form submission (e.g., send data to the server)
        });
    </script>

@endsection
