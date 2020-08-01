<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(function() {
      $("table").css("border","1px solid black").css("padding","50px").css("margin","30px");
      $("table").css("width","70%").css("heighth","70%");
      $("body").css("text-align","center");
      $("body h3").css("color","blue");
    });
    </script>
  </head>
  <body>
    <center>
    <form class="" action="sign_in.php" method="post">
      <div>
        <h3>ID</h3>
        <input type="text" name="u_name"  size="15">
      </div>
      <div>
      <h3>password</h3>
      <input type="password" name="pwd" size="18">
      </div>
      <div>
        <h3>email</h3>
      <input type="email" name="email">
      </div>
      <div>
        <h3>date</h3>
      <input type="date" name="b_day">
      </div>
      <div>
        <h3>gender</h3>
        <label><input type="radio" name="gender" value="Male">Male</label>
        <label><input type="radio" name="gender" value="Female">Female</label>
      </div>
      <input type="submit" name="submit" value="SUBMIT">
    </form>
  </center>

  </body>
</html>
