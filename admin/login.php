<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Pictures/loghouselogo.jpg"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link rel="stylesheet" href="../mdb/css/mdb.min.css" />
    <link rel="stylesheet" href="../bootstrapalt.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Log House Farm Resort</title>
    <style>
        body{
            background-image: url("../Pictures/LogHouse.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="h30"></div>
    <div class="container mt-5 h">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                            <a
                                class="nav-link active"
                                id="tab-login"
                                data-mdb-toggle="pill"
                                href="#login"
                                role="tab"
                                aria-controls="pills-login"
                                aria-selected="true"
                                >Login</a
                            >
                            </li>
                            <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="tab-register"
                                data-mdb-toggle="pill"
                                href="#register"
                                role="tab"
                                aria-controls="pills-register"
                                aria-selected="false"
                                >Register</a
                            >
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="tab-login">
                            <!-- loginForm -->
                            <form>
                                <div class="text-center mb-3">
                                    <div class="container">
                                        <img src="../Pictures/loghousetitle.jpg" alt="" class="img-fluid rounded">
                                    </div>
                                    <h3 class="card-title">Welcome Admin!</h3>
                                </div>

                                <div class="form-outline mb-4">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Username</label>
                                </div>
                        
                                <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>
                        
                                <!-- Register buttons -->
                                <!-- <div class="text-center">
                                <p>Not a member? <a href="#register">Register</a></p>
                                </div> -->
                            </form>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="tab-register">
                            
                            <!-- registerForm -->
                            <form>
                            <div class="text-center mb-3">
                                    <div class="container">
                                        <img src="../Pictures/loghousetitle.jpg" alt="" class="img-fluid rounded">
                                    </div>
                                    <h3 class="card-title">Register</h3>
                                </div>

                                <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../mdb/js/mdb.min.js"></script>
    <script type="text/javascript"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 500,
        easing: 'ease-in-out',
        offset: 200,
        once: true
      });
    </script>
</body>
</html>