@extends('layouts.forumlayout')
@section('content')
    <main>
      <div class="container m-5">
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="container py-2">
                <h4>Help me my dog is throwing up</h4>
                <p>Megan Bright | 19/02/2024</p>
                <p>Hello my dog is throwing up what should i do help em "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-9">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                <p>Reply</p>
            </div>
                <div class="col-1 d-flex flex-column">
                <i class="fas fa-angle-up"></i>
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
        </div>
        <div class="container m-5 pt-4" style="background-color: white">
            <div class="row">
              <div class="col-auto col-center m-5">
                <img src="/img/notstonk.jpg" style="max-height: 80px; max-width: 80px;">
                <p>John Doe</p>
              </div>
              <div class="col-9">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                <p>Reply</p>
            </div>
                <div class="col-1 d-flex flex-column">
                <i class="fas fa-angle-up"></i>
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
        </div>
        <form method="GET" class="container m-5 pt-4" style="background-color: white">
           <div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content'></textarea>
                <input type="submit" class="btn btn-primary" value="Submit">
                {{-- Submit</button> --}}
           </div>
        </form>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
