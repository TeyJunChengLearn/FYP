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
  <link rel="icon" href="kiwi-icon.png">
  @yield('css')
  <title>AllPets | Where Every Pet Finds A Home</title>
</head>

<body>

    <section id="header">

		<div>
      <a href="/" class="logo"><img src="/img/header-logo.png" alt=""/></a>
    </div>
    <div>
      <img src="/img/header-pets.png" alt=""/>
    </div>
		<div>
			<ul id ="navbar">
                <li><a href="adopt.html">Nearby</a></li>
				<li><a href="{{route('forum.index')}}">Forum</a></li>
				<li><a href="adopt.html">Adopt/Marketplace</a></li>
                @if(Auth::user())
                <li><a href="{{route('notifications.index')}}">notification</a></li>
                <li><a href="#">{{Auth::user()->username}}</a></li>
                @endif
				{{-- <li><a href="login.html">User</a></li> <!--changes between User and username--> --}}
			</ul>
		</div>
	</section>
    @yield('content')

</body>
</html>
