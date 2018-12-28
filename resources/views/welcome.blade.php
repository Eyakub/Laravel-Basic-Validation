<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                Sign Up
            </div>
            <div class="panel-body">
                <form id="signupalert" class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <div class="col-md-3 control-label">
                        Name
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div> 
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="button" class="btn btn-info" class="icon-hand-right">Sign Up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>