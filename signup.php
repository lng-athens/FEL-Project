<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies by Cha</title>
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/logo192.png">

    <!-- Bootstrap Style CDN & Fontawesome CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Page styles -->
    <link href="/assets/css/app.css" rel="stylesheet" />
</head>

<body>
    <?php include_once "./components/AppNavbar.php"; ?>

    <div class="container" id="signupPage">
        <div class="row mt-5">
            <div class="col-12 col-md-10 mx-md-auto">
                <form>
                    <h3 class="title">Sign Up!</h3>
                    <div class="row mt-4">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Your first name" class="form-control" id="firstName" />
                                <label for="firstName" class="form-label">First Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Your last name" class="form-control" id="lastName" />
                                <label for="lastName" class="form-label">Last Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" placeholder="Your email" class="form-control" id="email" />
                                <label for="email" class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" placeholder="Your mobile contact number" class="form-control" id="contactNumber" />
                                <label for="contactNumber" class="form-label">Mobile Contact Number</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password" placeholder="Your password" class="form-control" id="password" />
                                <label for="password" class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password" placeholder="Retype your password" class="form-control" id="verifyPassword" />
                                <label for="verifyPassword" class="form-label">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 justify-content-center justify-content-md-end hstack gap-3">
                        <button type="reset" class="btn btn-secondary btn-flex" id="btnClear">Clear</button>
                        <button type="submit" class="btn btn-primary btn-flex" id="btnRegister">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init()</script>
    <!-- Page Scripts -->
</body>
</html>