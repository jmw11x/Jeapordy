<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <title></title>
  </head>
  <body>
    <form action = "./register-submit.php" method = "POST">
      <fieldset>
        <legend> New User Signup </legend>
        <ul>
          <li>
            <strong> Userame: </strong>
            <input name="name" type="text" size="15" maxlength = '15'>
          </li>
          <li>
            <strong> Password: </strong>
            <input name="password" type="text" size = "15" maxlength = '15'>
          </li>
        </ul>

        <input type = "submit" value = "Register">
      </fieldset>
    </form>

  </body>
</html>
