<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>

  <body>
    <form class="box" action="../Controller/validate.php" method="post">
      <h1>Login</h1>
      <input type="text" name="name" placeholder="Username"  required/>
      <input type="password" name="password" placeholder="Password" required/>
      <input type="submit" name="submit" value="Login" />
    </form>
  </body>
</html>