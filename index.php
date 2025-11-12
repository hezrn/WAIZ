<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WAIZ Login & Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" id="container">
    <!-- Sign Up Form -->
    <div class="form-container sign-up-container">
      <form method="POST" action="">
        <h1>Create Account</h1>
        <span>Register as a Household or Junkshop</span>

        <!-- Username / Junkshop Name -->
        <input type="text" placeholder="Username or Junkshop Name" name="reg_username" required />

        <!-- Phone Number -->
        <input type="tel" placeholder="Phone Number" name="reg_phone" pattern="[0-9]{11}" maxlength="11" required title="Enter 11-digit phone number (e.g. 09123456789)" />

        <!-- Password -->
        <input type="password" placeholder="Password" name="reg_password" required />

        <!-- Role -->
        <select name="reg_role" required>
          <option value="" disabled selected>Select Role</option>
          <option value="Household">Household</option>
          <option value="Junkshop">Junkshop</option>
        </select>

        <button type="submit" name="register">Sign Up</button>
      </form>
    </div>

    <!-- Sign In Form -->
    <div class="form-container sign-in-container">
      <form method="POST" action="">
        <h1>Sign In</h1>
        <span>Use your username or phone number</span>
        <input type="text" placeholder="Username or Phone Number" name="login_identifier" required />
        <input type="password" placeholder="Password" name="login_password" required />
        <button type="submit" name="login">Login</button>
      </form>
    </div>

    <!-- Sliding Overlay -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To stay connected, please log in with your info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Eco Hero!</h1>
          <p>Join WAIZ and make recycling smarter and easier</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle between Sign In and Sign Up
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
  </script>
</body>
</html>
