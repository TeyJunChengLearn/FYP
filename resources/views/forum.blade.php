<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/test.css">
  <link rel="stylesheet" href="/css/nologin.css">
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body>

    <section id="header">

		<div>
      <a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
    </div>
    <div>
      <img src="/img/header-pets.png" alt=""/>
    </div>
		<div>
			<ul id ="navbar">
				<li><a href="{{route('forum.index')}}">Forum</a></li>
				<li><a href="adopt.html">Adopt/Marketplace</a></li>
				<li><a href="login.html">User</a></li> <!--changes between User and username-->
			</ul>
		</div>
	</section>

  <main>
    <div class="container">
      <div class="row">
        <section class="left">
          <div class="inner-left">
            <a href="#">
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
</body>
</html>
