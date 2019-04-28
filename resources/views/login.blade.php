
<!doctype html>
<html lang="en">
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="vAudit Application">
    <meta name="author" content="Christopher Sheppard">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <link href='/css/floating-labels.css' rel='stylesheet'>
  </head>

  <body>
     <div class="container-fluid">
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="#" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="uswin" class="form-control" placeholder="uswin" required autofocus>
        <label for="uswin">USWIN</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; {{ date('Y'). 'HQ Network Regulatory & Compliance'}}</p>
    </form>
</div>
  </body>
</html>
