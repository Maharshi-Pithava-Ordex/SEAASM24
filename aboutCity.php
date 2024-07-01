<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEAASM 2024</title>
    <!-- bootstrap css -->
    <link rel="shortcut icon" href="imgs/logofavicon.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="scss/style.css">
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
                <h1 class="text-center headingtext text-white">Host City</h1>
            </div>
        </div>
    </div>

    <!-- about city -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="headingtext bluetext text-center aboutCityh1 mt-4">Indore</h1>
            </div>
        </div>
    </div> -->
    <div class="container-fluid mt-2 mb-5" id="hostCity">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-6 p-3 p-sm-5 mt-5 mt-lg-0">
                    <p>
                        <span class="fw-bold cursivetext">Indore</span>, often referred to as the <span
                            class="fw-bold cursivetext">"Commercial Capital of Madhya
                            Pradesh"</span>, is a vibrant and
                        historically rich city in central India. Situated on the banks of the Saraswati and Khan rivers,
                        Indore has a long-standing reputation for its cultural heritage, architectural marvels, and
                        thriving economy.
                    </p>
                    <p>
                        One of the city's most notable landmarks is the Rajwada Palace, a blend of Mughal and Maratha
                        architectural styles. Built by the Holkar dynasty rulers, it stands as a testament to Indore's
                        royal past and serves as a popular tourist attraction. Another architectural gem is the Lal Bagh
                        Palace, renowned for its European-influenced design and sprawling gardens, offering a glimpse
                        into the opulent lifestyle of the Holkars.
                    </p>
                    <p>
                        Indore is also famous for its culinary delights, especially its street food culture. The city is
                        synonymous with mouth-watering snacks like poha-jalebi, bhutte ka kees, and the famous Indori
                        namkeens. The bustling Sarafa Bazaar transforms into a food lover's paradise at night, with
                        vendors offering a dazzling array of local delicacies that attract both locals and tourists
                        alike.
                    </p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="https://www.india.com/wp-content/uploads/2018/10/Rajwada-Indore.jpg"
                        class="img-fluid rounded" alt="">
                </div>
            </div>
            <div class="row text-white">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="https://images.snapwi.re/8ac1/5c87e229aa3058c83a4a0e61.w800.jpg" class="img-fluid rounded"
                        alt="">
                </div>
                <div class="col-lg-6 p-3 p-sm-5 mt-5 mt-lg-0">
                    <p>
                        In recent years, Indore has emerged as a prominent educational and commercial hub. It houses
                        premier educational institutions like the Indian Institute of Management (IIM) Indore and Devi
                        Ahilya Vishwavidyalaya, contributing significantly to the city's intellectual capital. The
                        city's strategic location, excellent connectivity, and proactive governance have also made it a
                        preferred destination for businesses, resulting in rapid industrial growth and development.
                    </p>
                    <p>
                        Overall, Indore strikes a unique balance between its glorious past and dynamic present, making
                        it
                        a city that seamlessly blends tradition with modernity. Whether exploring its historical
                        landmarks, savoring its culinary delights, or experiencing its vibrant culture, Indore offers
                        visitors a memorable and enriching experience.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- nearby places -->
    <div class="container">
        <div class="row justify-content-center my-5 mx-2 pb-5">
            <h1 class="headingtext bluetext text-center fw-bold">Explore Indore & Nearby</h1>
            <ul class="honeycomb pb-5">
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby1.jpg">
                    <div class="honeycomb-cell__title">Rajwada Palace</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby2.jpg">
                    <div class="honeycomb-cell__title">Krishna Pura Chhatri</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby3.jpg">
                    <div class="honeycomb-cell__title">Chhatri of Malhar Row Holk</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby4.jpg">
                    <div class="honeycomb-cell__title">Gandhi Hall</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby5.jpg">
                    <div class="honeycomb-cell__title">Lal Bagh Palace</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby6.jpg">
                    <div class="honeycomb-cell__title fs-4">Mahakaleshwar Ujjain</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby7.jpg">
                    <div class="honeycomb-cell__title">Omkareshwar</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby8.jpeg">
                    <div class="honeycomb-cell__title">Chhapan Dukan</div>
                </li>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="imgs/nearby/nearby9.png">
                    <div class="honeycomb-cell__title">Sarafa Night Food Market</div>
                </li>
                <li class="honeycomb-cell honeycomb__placeholder"></li>
            </ul>
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