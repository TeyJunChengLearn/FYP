<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up to AllPets</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/rtest.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="have-account">
                Have an account? <span id="signinLink" class="signin-link">Sign In</span>
            </div>
            <div class="title">Sign up to AllPets</div>
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



    <div id="signinModal" class="modal">
        <div class="modal-content">
            <form id="signupForm" method="POST" action="{{route('loginRegister.login')}}">
                @csrf
                <div class="input-container">
                    <input type="email" class="input-field" placeholder="Email Address" name='email' required>
                </div>
                <div class="input-container">
                    <input type="password" class="input-field" placeholder="Password" name="password"required>
                </div>
                <button type="submit" class="button">
                    SIGN IN NOW
                </button>
            </form>
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

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            var inputs = document.querySelectorAll('.input-field');
            var valid = true;

            inputs.forEach(function(input) {
                if (!input.value) {
                    input.classList.add('required');
                    valid = false;
                } else {
                    input.classList.remove('required');
                }
            });

            if (!valid) {
                event.preventDefault();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            var termsLink = document.getElementById('termsLink');
            var modal = document.getElementById('termsModal');
            var checkbox = document.getElementById('terms');
            var span = document.getElementsByClassName('close')[0];

            termsLink.onclick = function() {
                modal.style.display = 'block';
            }

            span.onclick = function() {
                modal.style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var signinLink = document.getElementById('signinLink');
            var modal = document.getElementById('signinModal');
            var span = document.getElementsByClassName('close')[0];

            signinLink.onclick = function() {
                modal.style.display = 'block';
            }

            span.onclick = function() {
                modal.style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        });

    </script>
</body>
</html>
