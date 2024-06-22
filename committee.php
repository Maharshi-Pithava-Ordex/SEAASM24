<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEAASM 2024</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="shortcut icon" href="imgs/logofavicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <?php
        include 'header.php';
    ?>

    <!-- breadcrums -->
    <div class="container-fluid" id="breadcrumb_container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-center headingtext text-white">Organizing Committee</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="bluetext fw-bold text-center mb-4 headingtext">Organizing Committee</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow customcard">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor1.png" class="mb-4" alt="">
                                </div>
                                <h5 class="bluetext text-center fw-bold">Dr. Rajesh Swarnkar</h5>
                                <p class="greentext text-center mb-0">(Nagpur)</p>
                                <p class="lightbluetext text-center mb-0">President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow customcard">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor2.png" class="mb-4" width="170" alt="">
                                </div>
                                <h5 class="bluetext text-center fw-bold">Dr. Shivani Swami</h5>
                                <p class="greentext text-center mb-0">(Jaipur)</p>
                                <p class="lightbluetext text-center mb-0">Secretary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow customcard">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor3.png" class="mb-4" width="170" alt="">
                                </div>
                                <h5 class="bluetext text-center fw-bold">Dr. Ravi Dosi</h5>
                                <p class="greentext text-center mb-0">(Indore)</p>
                                <p class="lightbluetext text-center mb-0">Organizing Secretary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include 'footer.php';
    ?>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- <script src="loader.js"></script> -->
</body>

</html>