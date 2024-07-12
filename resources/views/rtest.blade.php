<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AllPets</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/rtest.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="have-account">
                Have an account? <span id="signinLink" class="signin-link" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In</span>
            </div>
            <div class="title">Sign up to AllPets</div>
            @if (session('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
            <form id="signupForm" method="POST" action="{{route('loginRegister.register')}}">
                @csrf
                <div class="input-container">
                    <input type="text" class="input-field" placeholder="First Name" name="firstName" required>
                </div>
                <div class="input-container">
                    <input type="text" class="input-field" placeholder="Last Name" name="lastName"required>
                </div>
                <div class="input-container">
                    <input type="email" class="input-field" placeholder="Email Address" name='email' required>
                </div>
                <div class="input-container">
                    <input type="password" class="input-field" placeholder="Password" name="password"required>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="terms" required>
                    <label for="terms" class="checkbox-label">
                        I have read the <span id="termsLink" class="terms-link">Terms and Conditions.</span>
                    </label>
                </div>
                <button type="submit" class="button">
                    SIGN UP NOW
                </button>
            </form>
        </div>
        <div class="image-container">
            <img class="image" src="/img/cover.jpg">
        </div>
    </div>



    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="container">
                    <div class="form-container">
                        <div class="title">Welcome to AllPets!</div>
                        <form id="signupForm" method="POST" action="{{route('loginRegister.login')}}">
                            @csrf
                            <div class="input-container">
                                <input type="email" class="input-field" placeholder="Email Address" name='email' required>
                            </div>
                            <div class="input-container">
                                <input type="password" class="input-field" placeholder="Password" name="password"required>
                            </div>
                            <small id="passwordHelpBlock" class="form-text text-muted" style="width: 75%; text-align: right; cursor: pointer">Forgot password?</small>
                            <button type="submit" class="button">
                            LOG IN
                            </button>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Terms and Conditions</h2>
            <p>Lemme cook -Danny

                </p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
