<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(function() {
      $("#DV").css("border","1px solid black").css("padding","50px");
      $("table").css("width","70%").css("heighth","70%");
      $("body").css("text-align","center");
      $("body h3").css("color","blue");
    });
    </script>
  </head>
  <body>
    <center>
      <div id="DV">
        <form class="" action="log_in.php" method="post">
          <div>
            <h3>ID</h3>
          <input type="text" name="u_id" size="18">
          </div>
          <div>
          <h3>password</h3>
          <input type="password" name="pwd" size="18"><br>
          <input type="submit" value="LOGIN">
        </form>

        <form class="" action="sign_up.php" method="post">
          <br><input type="submit" value="ACCOUNT">
        </form>
      </div>
  </center>

  </body>
</html>
