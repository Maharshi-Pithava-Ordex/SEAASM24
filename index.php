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
    <!-- <script>
    $(document).ready(function() {
        $("#abstractModel").modal('show');
    });
    </script> -->
</head>

<body>
    <!-- navbar -->
    <?php
        include 'header.php';
    ?>

    <!-- modal -->
    <div class="modal fade" id="abstractModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <a href="#" target="_blank">
                            <img src="#" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="heroSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div>
                        <img src="imgs/mainlogo.png" alt="" id="mainlogo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="welcomemsg">
        <div class="container pt-5">
            <!-- welcome message -->
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <h1 class="text-center fw-bold mb-3 headingtext text-white">Welcome Message</h1>
                    <div class="col-12 p-3 border-0">
                        <h4 class="mb-3 fw-bold text-white">Dear Seniors & Colleagues,</h4>
                        <div class="welcomeMsg text-white">
                            <p class=" cursivetext">Greetings from SEASSM!</p>
                            <p>As you are aware, the South East Asian Academy of Sleep Medicine (SEAASM) is
                                an International Academic Organisation promoting sleep medicine practices in
                                India and around the World.
                            </p>
                            <p>This Time the Society is Organizing its <span class="fw-bold">6<sup>th</sup>
                                    International
                                    conference</span> on the
                                <span class="fw-bold">5<sup>th</sup> & 6<sup>th</sup> October 2024 at Indore.</span>
                            </p>
                            <p>The Conference Will Witness Lectures by Highly Acclaimed National &
                                International Faculty in the Field, with Several Workshops Uniquely Designed
                                for Training Practitioners & Post Graduates in the Specialty of Pulmonology,
                                Internal Medicine, Cardiology, Neurology, ENT Surgical Specialists, Dentistry.</p>
                            <a href="aboutus.php" class="links text-white">know more...</a>
                            <h5 class="mt-3">Warm regards,<br>
                                The SEASSM 2024 Organizing Committee</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="waveimg"></div>

    <div class="container">
        <!-- organizing committee -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="bluetext fw-bold text-center mb-4 headingtext">Organizing Committee</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow customcard">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/Dr. Rajesh Swarnkar.jpg" width="200" class="mb-4 doctorImgs" alt="">
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
                                    <img src="imgs/Dr. Shivani Swami.jpg" class="mb-4 doctorImgs" width="200" alt="">
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
                                    <img src="imgs/Dr. Ravi Dosi.jpg" class="mb-4 doctorImgs" width="200" alt="">
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
        <!-- tables -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="bluetext fw-bold text-center mb-3 headingtext">Registration Fees</h1>
                <!-- large device table -->
                <div class="row justify-content-center d-none d-md-block">
                    <div class="col-12 border-0 p-3">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>CATEGORY</th>
                                        <th>Early Bird Till 15<sup>th</sup> August, 2024</th>
                                        <th>Late Bird Till 20<sup>th</sup> September, 2024</th>
                                        <th>Spot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Members</td>
                                        <td>₹ 3000</td>
                                        <td>₹ 4000</td>
                                        <td>₹ 5000</td>
                                    </tr>
                                    <tr>
                                        <td>Non Members</td>
                                        <td>₹ 4000</td>
                                        <td>₹ 5000</td>
                                        <td>₹ 6000</td>
                                    </tr>
                                    <tr>
                                        <td>PG Students</td>
                                        <td>₹ 2500</td>
                                        <td>₹ 2500</td>
                                        <td>₹ 2500</td>
                                    </tr>
                                    <tr>
                                        <td>Workshop (any one)</td>
                                        <td>₹ 1000</td>
                                        <td>₹ 1200</td>
                                        <td>₹ 1500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Registration button -->
                    <div class="col-12">
                        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                            <a href="https://rxregistrations.com/SEAASM/" target="_blank"
                                class="btn btn-primary mx-3 px-5 py-4"><i
                                    class="fa-solid fa-user-plus me-2"></i>Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- small device table -->
                <div class="row justify-content-center d-block d-md-none px-3">
                    <div class="col-12 border-0 p-3">
                        <div class="mb-4">
                            <h2 class="fw-bold bluetext headingtext text-center">Members</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird Till 15<sup>th</sup> August, 2024</td>
                                            <td>₹ 3000</td>
                                        </tr>
                                        <tr>
                                            <td>Late Bird Till 20<sup>th</sup> September, 2024</td>
                                            <td>₹ 4000</td>
                                        </tr>
                                        <tr>
                                            <td>Spot</td>
                                            <td>₹ 5000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="fw-bold bluetext headingtext text-center">Non Members</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird Till 15<sup>th</sup> August, 2024</td>
                                            <td>₹ 4000</td>
                                        </tr>
                                        <tr>
                                            <td>Late Bird Till 20<sup>th</sup> September, 2024</td>
                                            <td>₹ 5000</td>
                                        </tr>
                                        <tr>
                                            <td>Spot</td>
                                            <td>₹ 6000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="fw-bold bluetext headingtext text-center">PG Students</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird Till 15<sup>th</sup> August, 2024</td>
                                            <td>₹ 2500</td>
                                        </tr>
                                        <tr>
                                            <td>Late Bird Till 20<sup>th</sup> September, 2024</td>
                                            <td>₹ 2500</td>
                                        </tr>
                                        <tr>
                                            <td>Spot</td>
                                            <td>₹ 2500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <h2 class="fw-bold bluetext headingtext text-center">Workshop (any one)</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird Till 15<sup>th</sup> August, 2024</td>
                                            <td>₹ 1000</td>
                                        </tr>
                                        <tr>
                                            <td>Late Bird Till 20<sup>th</sup> September, 2024</td>
                                            <td>₹ 1200</td>
                                        </tr>
                                        <tr>
                                            <td>Spot</td>
                                            <td>₹ 1500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="mb-4">
                            <h2 class="fw-bold redtext headingtext text-center">International Delegate</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird Till 15<sup>th</sup> May, 2024</td>
                                            <td>$ 300</td>
                                        </tr>
                                        <tr>
                                            <td>Regular Till 30<sup>th</sup> June, 2024</td>
                                            <td>$ 350</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced Till 30<sup>th</sup> September, 2024</td>
                                            <td>$ 370</td>
                                        </tr>
                                        <tr>
                                            <td>Spot Onwards 1<sup>st</sup> October, 2024</td>
                                            <td>$ 400</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
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