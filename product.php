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
    <link href="/assets/css/product.css" rel="stylesheet" />
</head>

<body>
    <?php include_once "./components/AppNavbar.php"; ?>

    <div class="container pt-3">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3 text-center text-md-start">
                    <img src="" alt="" onerror="this.src='https://via.placeholder.com/1000x1500';" class="img-fluid" />
                </div>

                <div class="col-md-9 position-relative">
                    <div class="card-body">
                        <h5 class="card-title title">Product Name</h5>
                        
                        <p class="card-text description text-justify">Fusce pellentesque risus tempus dui iaculis viverra. Vivamus id nunc ac nulla volutpat ultrices. Mauris pharetra felis massa, eget scelerisque lorem porta sed. Ut dapibus felis at volutpat malesuada. In at consectetur ligula. Morbi ut semper arcu, vitae pharetra mauris. Vivamus id eleifend ex. In facilisis nisi id sem consectetur iaculis. Vestibulum et aliquet elit. Maecenas diam magna, convallis nec vulputate at, sodales vitae erat. Nulla fermentum dui nisl, placerat ullamcorper enim vehicula in. Nam id ante a sapien fermentum placerat. Sed bibendum arcu non euismod malesuada.</p>
                    </div>
                    <div class="card-footer border-0">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <p class="card-text price">Price:&emsp;&#8369;&ensp;50</p>
                            
                            <button type="submit" name="btn-addToCart" id="btn-addToCart" class="btn btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
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