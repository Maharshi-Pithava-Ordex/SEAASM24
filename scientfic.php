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
    <link rel="shortcut icon" href="https://www.seaasm.org//images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="PDFJSExpress/lib/webviewer.min.js"></script>
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
                <h1 class="text-center headingtext text-white mb-0">Scientific Program</h1>
            </div>
        </div>
    </div>

    <div class="container d-none d-md-block">
        <div class="row my-5">
            <iframe src="asset/SEAASM24_Scientific_Agenda.pdf" class="pdfiframe" frameborder="0"></iframe>
        </div>
    </div>

    <div class="container-fluid d-block d-md-none">
        <div class="row justify-content-center my-5">
            <div id="pdf-container" class="pdfiframe"></div>
            <a href="asset/SEAASM24_Scientific_Agenda.pdf" class="btn btn-primary px-5 py-3 mt-4 d-block d-md-none"
                download>Download
                Agenda</a>
        </div>
    </div>
    <!-- footer -->
    <?php 
        include 'footer.php';
    ?>
    <script>
    WebViewer({
            path: 'PDFJSExpress/lib/', // path to the PDF.js Express'lib' folder on your server
            licenseKey: 'YZLEf4pqc2rPVSbSci9V',
            initialDoc: 'asset/SEAASM24_Scientific_Agenda.pdf',
            disabledElements: [
                'leftPanelButton',
                'viewControlsButton',
                'panToolButton',
                'selectToolButton',
                'freeHandToolGroupButton',
                'textToolGroupButton',
                'ribbons',
                'searchButton',
                'textSelectButton',
                'toggleNotesButton',
                'menuButton',
                'moreButton',
                'toolsHeader'
            ],
            enableElements: [
                'zoomOutButton',
                'zoomInButton'
            ]
        }, document.getElementById('pdf-container'))
        .then(instance => {
            const docViewer = instance.docViewer;
            const annotManager = instance.annotManager;

            docViewer.on('documentLoaded', () => {

            });
        });
    </script>

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