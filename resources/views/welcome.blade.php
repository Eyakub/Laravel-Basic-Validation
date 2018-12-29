<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>


    <!-- PrefixFree -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

    <style>
        .error{
                display: none;
                margin-left: 10px;
            }

            .error_show{
                color: red;
                margin-left: 10px;
            }

            input.invalid, textarea.invalid{
                border: 2px solid red;
            }
            input.valid, textarea.valid{
                border: 2px solid green;
            }
        </style>
    <title>Register</title>
</head>

<body>

    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                Sign Up
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{action('UserController@register')}}" method="post" id="reg_form">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-3 control-label">
                                Name
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="name" id="user_name" class="form-control" placeholder="Enter your name">
                                <span class="error">Enter your name first.</span>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" id="user_email" placeholder="Email">
                                <span class="error">Enter a valid email address.</span>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info" class="icon-hand-right">Sign Up
                                </button>
                            </div>
                        </div>
                    </fieldset>
                    
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#reg_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons:{
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields:{
                        name:{
                            validators:{
                                stringLength:{
                                    min:3,
                                },
                                notEmpty:{
                                    message: 'Please enter your name.'
                                }
                            }
                        },
                        email:{
                            validators:{
                                notEmpty:{
                                    message: 'Please enter your email.'
                                },
                                emailAddress:{
                                    message: 'Please enter a valid email address.'
                                }
                            }
                        },
                    }
                })

                .on('success.form.bv', function (e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                    $('#reg_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function (result) {
                        console.log(result);
                    }, 'json');
                });
        });

    </script>
</body>

</html>
