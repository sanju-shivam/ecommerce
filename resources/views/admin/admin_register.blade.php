<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>concept - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="../../assets/plugins/switchery/switchery.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/concept.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <div class="register">
                <div class="login-bg"></div>
                <div class="login-content">
                    <div class="login-box">
                        <div class="login-header">
                            <h3>Create New Account</h3>
                            <p>Complete this simple form to register.</p>
                        </div>
                        <div class="login-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control"  aria-describedby="emailHelp"
                                    name="email" value="{{ old('email') }}" placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm password">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                    name="name" value="{{ old('name') }}" placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
            
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                            <p class="m-t-sm">Already have an account? <a href="">Login</a></p>
                        </div>
                        <div class="login-footer">
                            <p>Copyright @D2D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../../assets/js/concept.min.js"></script>
    </body>
</html>