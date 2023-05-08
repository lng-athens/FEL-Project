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
    <link href="/assets/css/formStyles.css" rel="stylesheet" />
</head>

<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/components/AppNavbar.php"); ?>

    <div class="container" id="profilePage">
        <h3 class="title mt-4 mt-md-5">Profile</h3>
        
        <form class="mt-2 mt-lg-3">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstName" name="firstName" value="" placeholder="First Name" required />
                        <label for="firstName" class="form-label">First Name</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastName" name="lastName" value="" placeholder="Last Name" required />
                        <label for="lastName" class="form-label">Last Name</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Your email" required />
                        <label for="email" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" value="" placeholder="Contact number" required />
                        <label for="mobileNumber" class="form-label">Mobile Contact Number</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="address" name="address" value="" placeholder="Delivery address" required></textarea>
                        <label for="address" class="form-label">Delivery Address</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password1" name="password1" value="" placeholder="Enter password" required />
                        <label for="password1" class="form-label">Password</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password2" name="password2" value="" placeholder="Retype password" required />
                        <label for="password2" class="form-label">Confirm Password</label>
                    </div>
                </div>
            </div>
            <div class="hstack justify-content-center justify-content-md-end">
                <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">Save Changes</button>
            </div>
        </form>
    </div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init()</script>
    <!-- Page Scripts -->
    <script src="/assets/js/formAnimation.js" type="text/javascript"></script>
</body>
</html>