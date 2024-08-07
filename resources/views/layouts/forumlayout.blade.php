@php
                    use Illuminate\Support\Facades\Session;
@endphp
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
                <li><a href="{{route('nearby.index')}}">Nearby</a></li>
				<li><a href="{{route('forum.index')}}">Forum</a></li>
				<li><a href="{{route('adopt.index')}}">Adopt/Marketplace</a></li>
                @if (Auth::user()&&Session::get('user')['admin']['status']==true)
                    <li><a href="{{route('admin.dashboard.index')}}">Admin</a></li>
                @endif
                @if(Auth::user())

                <li ><a id='notification' href="{{route('notifications.index')}}">Notifications</a></li>
                <li><a href="{{route('user.index')}}">{{Auth::user()->username}}</a></li>
                @endif
				{{-- <li><a href="login.html">User</a></li> <!--changes between User and username--> --}}
			</ul>
		</div>
	</section>
    @yield('content')

</body>
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
                    notificationItem.innerHTML ='Notifications';
                }else{
                    notificationItem.innerHTML ='Notifications('+data.number+')';
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
</html>
