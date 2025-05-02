<?php include 'header.php'; ?>
<body>

  <form class="signup-form" action="/submit-signup" method="post">
    <h2>Sign Up</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <input type="submit" value="signup">
  </form>

</body>
</html>
