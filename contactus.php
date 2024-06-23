<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEAASM 2024</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/logofavicon.jpg" type="image/x-icon">
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
                <h1 class="text-center headingtext text-white">Contact Us</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12">
                <h1 class="bluetext headingtext fw-bold text-center mb-4">Contact Us</h1>
            </div>
            <!-- event organizer details -->
            <div class="col-lg-5 col-md-6">
                <div class="card border-0 customshadow customcard p-4">
                    <img src="https://gujaratheart.com/wp-content/uploads/2023/07/Rx-Events-Logo.png" height="100"
                        width="100" class="mb-2" alt="">
                    <h3 class="bluetext fw-bold headingtext">Event Organizer</h3>
                    <div class="lightbluetext">
                        <p class="mb-1">Rx Events Pvt. Ltd</p>
                        <p class="mb-1">401, Shyamak Complex,</p>
                        <p class="mb-1">Opp. Sahjanand College, Ambawadi,</p>
                        <p class="mb-1">Ahmedabad - 380015</p>
                    </div>
                    <div class="mt-4 d-flex flex-column">
                        <a href="mailto:contact@rxevents.co.in" class="links text-decoration-none mb-2"><i
                                class="fa-regular fa-envelope fa-fw"></i>
                            contact@rxevents.co.in</a>
                        <a href="tel:9099331371" class="links text-decoration-none mb-2"><i
                                class="fa-solid fa-phone fa-fw"></i>
                            +91 9099331371</a>
                        <a href="https://rxevents.co.in/" class="links text-decoration-none mb-2"><i
                                class="fa-solid fa-globe fa-fw"></i> www.rxevents.co.in</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#formModal">Get in touch</button>
                    </div>
                </div>
            </div>
            <!-- map -->
            <div class="col-lg-5 col-md-6 mt-5 mt-md-0">
                <div class="card border-0 customshadow customcard p-4 d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.977022178365!2d72.54231167509178!3d23.02461587917241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85287fc18fb3%3A0x4b44456135db26e4!2sRx%20Events!5e0!3m2!1sen!2sin!4v1719137291408!5m2!1sen!2sin"
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- contact form modal -->
    <div class="modal fade customcard" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title bluetext headingtext" id="exampleModalLabel">Get In Touch</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fname" placeholder="name@example.com"
                                        name="fname">
                                    <label for="fname">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lname" placeholder="name@example.com"
                                        name="lname">
                                    <label for="lname">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                        name="email">
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" inputMode="number" name="mobileno">
                                    <label for="floatingInput">Mobile No</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="message"
                                        name="msg" style="height: 100px; resize: none "></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
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