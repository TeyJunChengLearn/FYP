
@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/nologin.css">
@endsection
@section('content')
<main>
    <div class="container">
      <div class="row">
        <section class="left">
          <div class="inner-left">
            <a href="{{route('forumAnnouncement.index')}}">
                <div class="box">
                <div class="details">
                <h3>Announcements and Notices</h3>
                <span>General announcements, latest developments</span>
                </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <div class="details">
                    <h3>Events</h3>
                    <span>Latest happenings and events pertaining to pets and animal welfare</span>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <div class="details">
                    <h3>Feedback and Suggestions</h3>
                    <span>Need help using our website, or have any comments or suggestions? Tell us about it here!</span>
                    </div>
                </div>
            </a>
            <div class="box-drop">
              <div class="details">
              <h3>Pets Categories</h3>
              <span>General information and discussions on taking care of your pet buddies</span>
              </div>
              <div class="dropdown-icon">
                <i class="fas fa-angle-down"></i>
              </div>
            </div>
            <div class="dropdown">
                @foreach ($forumCategories as $forumCategory)
                <a href='{{ route('forumCategory.index', ['cateogryId' => $forumCategory->id]) }}'>
                    <div class="dropdown-box">
                        <div class="dropdown-details">{{$forumCategory->name}}
                        </div>
                        <div class="dropdown-arrow">
                        <i class='fas fa-arrow-right'></i>
                        </div>
                    </div>
                </a>
                @endforeach
              {{--
              <div class="dropdown-box">
                <div class="dropdown-details">Cat
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div>
              <div class="dropdown-box">
                <div class="dropdown-details">Bird
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div>
              <div class="dropdown-box">
                <div class="dropdown-details">Fish
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div>
              <div class="dropdown-box">
                <div class="dropdown-details">Reptiles
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div>
              <div class="dropdown-box">
                <div class="dropdown-details">Rodents
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div>
              <div class="dropdown-box">
                <div class="dropdown-details">Insects
                </div>
                <div class="dropdown-arrow">
                  <i class='fas fa-arrow-right'></i>
                </div>
              </div> --}}
            </div>
          </div>

        </section>
      </div>
    </div>

  </main>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.box-drop').on('click', function() {
        $('.dropdown').toggle(); // Toggle the dropdown visibility
        let icon = $(this).find('.fas');
        icon.toggleClass('fa-angle-down fa-angle-up'); // Toggle the icon class
      });
    });
  </script>
@endsection
