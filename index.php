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
    <script>
    $(document).ready(function() {
        $("#abstractModel").modal('show');
    });
    </script>
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

    <div class="container">
        <!-- welcome message -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="text-center fw-bold bluetext mb-3 headingtext">Welcome Message</h1>
                <div class="col-12 card p-3 border-0 customshadow">
                    <h4 class="mb-3 bluetext">Welcome to<br>
                        SEAASM 2024, INDORE</h4>
                    <div class="welcomeMsg">
                        <p class="lightbluetext">Dear Esteemed Colleagues and Industry Leaders, 'Kem Cho' from the
                            vibrant
                            city of Ahmedabad,</p>
                        <p class="lightbluetext text-justify">It is with great pleasure that we, on behalf of the
                            organising team, extend a warm invita on to
                            th
                            you for the eagerly awaited 34 Annual Conference of Indian Society of Organ Transplant,2024.
                            This event, set against the historic backdrop of Ahmedabad, a UNESCO World Heritage City,
                            promises an unparalleled convergence of leading experts, researchers, and industry
                            professionals in the field of organ transplanta on. The city's rich heritage, combined with
                            its
                            dynamic modernity, offers the perfect se ng to inspire innova on and collabora on in the
                            pursuit of enhancing transplant pa ent care
                        </p>
                        <p class="lightbluetext text-justify">The ISOT 2024 conference is poised to be a milestone
                            event,
                            featuring a rich scien fic program,
                            inspiring keynote addresses, thought-provoking panel discussions, and hands-on workshops.
                            As Ahmedabad prides itself on its blend of cultural legacy and academic excellence, the
                            conference will provide a unique pla orm for a endees to share pioneering advancements,
                            present research findings, and discuss the latest trends in organ transplanta on.</p>
                        <a href="aboutus.php" class="links">know more...</a>
                        <h5 class="bluetext mt-3">Warm regards,<br>
                            The Organizing Committee</h5>
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
                    <div class="col-12 card border-0 customshadow customcard p-3">
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
                                    <!-- <tr>
                                        <td>International Delegate</td>
                                        <td>$ 300</td>
                                        <td>$ 350</td>
                                        <td>$ 370</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Registration button -->
                    <div class="col-12 my-5">
                        <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                            <a href="#" target="_blank" class="btn btn-primary mx-3"><i
                                    class="fa-solid fa-user-plus me-2"></i>Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- small device table -->
                <div class="row justify-content-center d-block d-md-none px-3">
                    <div class="col-12 card border-0 customshadow customcard p-3">
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
        <!-- organizing committee -->
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