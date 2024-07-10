<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <link rel="stylesheet" href="/css/test.css">
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body>

    <section id="header">
		<a href="#" class="logo"><img src="/img/header-logo.png" alt=""/></a>
		<div>
			<ul id ="navbar">
				<li><a href="{{route('forum.index')}}">Forum</a></li>
				<li><a href="adopt.html">Adopt/Marketplace</a></li>

                @if(Auth::user())
                    <li><a href="{{route('loginRegister.logout')}}">Logout</a></li>
                    @else
                    <li><a href="{{route('loginRegister.index')}}">Login/Register</a></li>
                @endif
			</ul>
		</div>
	</section>

  <main>
<!--
    <section id="hero">
        <div class="hero-container">
        <h1>Welcome to AllPets</h1>
        <h2>Where Every Pet Finds A Home</h2>
        <a href="#about" class="btn-get-started">Get Started</a>
        </div>
    </section>-->

	<section class="home" id="home">
		<div class="content">
			<h3>Welcome to AllPets</h3>
			<span>Where Every Pet Finds A Home</span>
			<a href="#" class="btn">Get Started</a>
		</div>
	</section>

  </main>

	<footer class="section-p1">

		<div class="col">
			<h4>Forum</h4>
			<a href="about.html">All Breeds</a>
			<a href="about.html">Lost and Found Announcement</a>
		</div>

		<div class="col">
			<h4>Adopt / Marketplace</h4>
			<a href="#">Adopt</a>
			<a href="#">Marketplace</a>
		</div>

        <div class="col">
			<h4>Vetinary Assistance</h4>
			<a href="#">Recommended / Nearby Hospitals</a>
		</div>


	</footer>






    </body>
    </html>
