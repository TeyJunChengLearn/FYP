<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/test.css">
  <link rel="icon" href="kiwi-icon.png">

  <title>AllPets | Where Every Pet Finds A Home</title>
  <style>

  </style>
</head>

<body>

    <section id="header">
		<a href="/" class="logo"><img src="/img/header-logo.png" alt=""/></a>
		<div>
			<ul id ="navbar">
                <li><a href="{{route('nearby.index')}}">Nearby</a></li>
				<li><a href="{{route('forum.index')}}">Forum</a></li>
				<li><a href="{{route('adopt.index')}}">Adopt/Marketplace</a></li>

                @if(Auth::user())
                    <li><a id='notification' href="{{route('notifications.index')}}">notification</a></li>
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
			<a href="{{ route('loginRegister.index') }}" class="btn btn-warning">Get Started</a>
		</div>
	</section>

  </main>

	<footer class="section-p1">

		<div class="col">
			<h4>Forum</h4>
			<a href="{{route('forum.index')}}">Forum List</a>
			<a href="{{route('forumLostnFound.index')}}">Lost and Found Announcement</a>
		</div>

		<div class="col">
			<h4>Adopt / Marketplace</h4>
			<a href="{{route('adopt.index')}}">Adopt</a>
			<a href="#">Marketplace</a>
		</div>

        <div class="col">
			<h4>Vetinary Assistance</h4>
			<a href="{{route('nearby.index')}}">Recommended / Nearby Hospitals</a>
		</div>



		<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" style="    --bs-modal-width: 700px;">
			<div class="modal-dialog" >
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="progress" style="min-width: 100%; height: 34px; font-size: large;">
						<div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 50%; color:black;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Step 1</div>
					  </div>
					  <div class="container">
						<div class="form-container" style="width:600px">
							<div class="title">Sign Up New Account</div>
							<form>
								<div class="row">
								  <div class="col">
									<input type="text" class="form-control" placeholder="First Name">
								  </div>
								  <div class="col">
									<input type="text" class="form-control" placeholder="Last Name">
								  </div>
								</div>
								<div class="row">
									<div class="col">
									  <input type="date" class="form-control" placeholder="Date of Birth">
									</div>
									<div class="col">
									  <input type="number" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<textarea class="form-control" placeholder="Tell us about yourself..." rows="3"></textarea>
									</div>
								</div>
							  </form>
						</div>
					  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>



	</footer>
		    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
            <script>
                @if (Auth::user())


                function updatenotification(){
                    var url = '{{route('notification.api')}}';
                    const payload = {
                    id: {{ Auth::user()->id}},
                    };

                    // Configure the fetch options
                    const options = {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(payload)
                    };
                    fetch(url, options)
                    .then(response => {
                        if (!response.ok) {
                        throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        var notificationItem = document.getElementById('notification');
                        console.log(data);
                            if(data.number == 0){
                                notificationItem.innerHTML ='notification';
                            }else{
                                notificationItem.innerHTML ='notification('+data.number+')';
                            }
                        }
                    )
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });

                }
                updatenotification();
                setInterval(updatenotification, 5000);
                @endif
            </script>
    </body>
    </html>
