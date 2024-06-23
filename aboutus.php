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
                <h1 class="text-center headingtext text-white mb-0">About us</h1>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="container-fluid pt-5" id="welcomemsg">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12">
                    <h1 class="text-center fw-bold bluetext mb-3 headingtext">Welcome Message</h1>
                    <div class="col-12 p-3 border-0">
                        <h4 class="mb-3 bluetext">Dear Esteemed Colleagues and Delegates,</h4>
                        <div class="welcomeMsg">
                            <p class="lightbluetext cursivetext">Greetings from SEASSM!</p>
                            <p class="lightbluetext">We are delighted to welcome you to the SEASSM 2024 Annual
                                Conference,
                                taking place in the vibrant and historic city of Indore.</p>
                            <p class="lightbluetext">This year, we gather to share our latest research, innovations, and
                                developments
                                in the field of Sleep Medicine.
                            </p>
                            <p class="lightbluetext">Indore, known for its rich cultural heritage and modern
                                infrastructure,
                                provides
                                an ideal backdrop for our conference.</p>
                            <p class="lightbluetext">
                                Over the next few days, you will have the opportunity to engage with leading
                                experts, participate in enlightening discussions, and explore cutting-edge
                                technologies. Our diverse program includes keynote speeches, technical
                                sessions, workshops, and networking events designed to foster collaboration
                                and inspire new ideas.
                            </p>
                            <p class="lightbluetext">
                                We hope you will find the conference both intellectually stimulating and
                                professionally rewarding.
                            </p>
                            <p class="lightbluetext">Enjoy the conference and the unique charm of Indore!
                            </p>
                            <h5 class="bluetext mt-3">Warm regards,<br>
                                The Organizing Committee</h5>
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="imgs/doctor3.png" class="mb-3" width="170" alt="">
                                    </div>
                                    <h5 class="bluetext text-center fw-bold">Dr. Vivek Kute</h5>
                                    <p class="greentext text-center">Organizing Secretary</p>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                                    <div class="d-flex justify-content-center">
                                        <img src="imgs/Jigar_Shrimali.png" class="mb-3" width="170" alt="">
                                    </div>
                                    <h5 class="bluetext text-center fw-bold">Dr. Jigar Shrimali</h5>
                                    <p class="greentext text-center">Organizing Secretary</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <img src="imgs/wave.png" id="waveimg">
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