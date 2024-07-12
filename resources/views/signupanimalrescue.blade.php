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
                    <div class="title">Sign Up as Animal Rescue</div>
                    <form id="signup-Form" class="" style="width:80%;">
                        <div class="row p-3">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Organization Name" required>
                          </div>
                          <div class="col">
                            <select id="structure" class="form-control">
                                <option selected disabled>Organization Structure</option>
                                <option>Non-profit</option>
                                <option>Charitable</option>
                              </select>                          
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Location" required>
                            </div>
                            <div class="col">
                              <input type="number" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col">
                              <input type="number" class="form-control" placeholder="Tax Identification Number" required>
                            </div>
                            <div class="col">
                              <input type="file" class="form-control" id="businesspic"  required>
                              <small>Upload Business License</small>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col">
                                <textarea class="form-control" placeholder="Describe your organization..." rows="3"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="signup-button" >
                            SUBMIT
                            </button>
                      </form>
                </div>
                <div id="thankyou-phase" class="hidden" style="width:100%; text-align: center">
                    <div class="m-5">
                    <img src="/img/arrows.png"/>
                    <h2><b>Yay!</b<</h2>
                    <h4 class="">Your info is submitted and we will verify within the next 7 working days.</h4>
                    <h4>Thank you for your patience.</h4>
                    </div>
                    <button class="forum-button">GO TO FORUM</button>
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
<script>
    $(document).ready(function() {
        $('#signup-Form').on('submit', function(event) {
            event.preventDefault();
    
            // Show the thank you message and update the progress bar
            $('#form-phase').addClass('hidden');
            $('#thankyou-phase').removeClass('hidden');
            $('.progress-bar').css('width', '100%').attr('aria-valuenow', '100').text('Step 2');
    
            // Here you can also add an AJAX request to submit the form data to the server
        });
    });
    </script>

<!-- Trigger the Modal -->

</body>
</html>
