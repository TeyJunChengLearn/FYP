<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AllPets</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/rtest.css">

</head>
<body>
<div id="register">
    <div>
      <div>
        <div>
            <div id ="progress" class="progress m-5" style="height: 34px; font-size: large;">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 100%; color:black;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Done</div>
            </div>
            <div class="container">
                <div id="thankyou-phase" class="" style="width:100%; text-align: center">
                    <div class="m-5">
                    <img src="/img/arrows.png"/>
                    <h2><b>Yay!</b<</h2>
                    <h4 class="">Your account is all set and ready to go!</h4>
                    </div>
                    <a href='{{route('forum.index')}}'><button class="forum-button">GO TO FORUM</button></a>
                    <p class="m-1">Want to be a part of Animal rescue & shelters? <a href="{{route('loginRegister.register.animalRescuer.Index')}}" class="link-warning">Apply</a></p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>



<!-- Trigger the Modal -->

</body>
</html>
