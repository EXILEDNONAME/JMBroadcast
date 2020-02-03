
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Login Area </title>
  <link rel="shortcut icon" href="/img/jasamarga-ico.png" width="15px" height="15px">
  <link href="/themes/login/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/themes/login/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link rel="stylesheet" href="/themes/login/css/bracket.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse">
        LOGIN AREA
      </div>

      <hr />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
          <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your ID" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>

    </div>
  </div>

  <script src="/themes/login/lib/jquery/jquery.js"></script>
  <script src="/themes/login/lib/popper.js/popper.js"></script>
  <script src="/themes/login/lib/bootstrap/bootstrap.js"></script>

</body>
</html>
