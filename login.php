<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="/validate.php" method="post">
      <div>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

