<?php include_once 'head.html'; ?>
 <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
 </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <select name="level" class="form-control" required>
          <option>Login Sebagai</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Sign in</button>
        <a type="button" href="?module=home" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-backward"></span> Kembali</a>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>