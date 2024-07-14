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
    <style>
        .hidden { display: none; }
        .progress-bar { transition: width 0.5s; }
    </style>
</head>
<body>
<div id="register">
    <div>
      <div>
        <div>
            <div id ="progress" class="progress m-5" style="height: 34px; font-size: large;">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 50%; color:black;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Step 1</div>
            </div>
            <div class="container">
                <div id="form-phase" class="form-phase form-container" style="width:600px">
                    <div class="title">Sign Up New Account</div>
                    <form id="signup-Form" class="" style="width:80%;" method="POST" action='{{route('loginRegister.register.petowner')}}'>
                        @csrf
                        <div class="row p-3">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Username" name='username' required>
                          </div>
                          <div class="col">
                            <select id="gender" class="form-control" name='gender' required>
                                <option selected disabled>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col">
                              <input type="date" class="form-control" placeholder="Date of Birth" name="birthdate" required>
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Phone Number" name='phonenumber' required>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col">
                                <textarea class="form-control" placeholder="Tell us about yourself..." rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="signup-button" id="submitButton">
                            SUBMIT
                            </button>
                      </form>
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
<script>
    document.getElementById('signup-Form').addEventListener('submit', function(event) {
        var vaccinatedSelect = document.getElementById('gender');
        if (vaccinatedSelect.value === 'Gender') {
            event.preventDefault();
            alert('Please select a valid Gender.');
        }
    });
</script>
</body>
</html>
