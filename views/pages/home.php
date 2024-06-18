<?php
require_once '../components/header.html';
?>

<section id="heroSection" class="vh-90">
    <div class="w-100 h-100">
        <div class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <!-- image will be on the background -->
                    <div class="active w-100 h-100 pb-5 bg-cover d-flex flex-column justify-content-between align-items-center" id="slide1">
                        <div class="container-fluid mt-5 bg-black  d-flex flex-column " style="--bs-bg-opacity: 0.75;">
                            <h1 class="title text-white text-center fw-bold">Austrália</h1>
                        </div>
                        <a href="#linkCards" class="learn-more-btn btn bg-dark-blue text-white px-4 fs-4">Conhecer Mais!</a>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <!-- image will be on the background -->
                    <div class=" w-100 h-100 pb-5 bg-cover d-flex flex-column justify-content-between align-items-center" id="slide2">
                        <div class="container-fluid mt-5 bg-black  d-flex flex-column " style="--bs-bg-opacity: 0.75;">
                            <h1 class="title text-white text-center fw-bold">Austrália</h1>
                        </div>
                        <a href="#linkCards" class="learn-more-btn btn bg-dark-blue text-white px-4 fs-4">Conhecer Mais!</a>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <!-- image will be on the background -->
                    <div class=" w-100 h-100 pb-5 bg-cover d-flex flex-column justify-content-between align-items-center" id="slide3">
                        <div class="container-fluid mt-5 bg-black  d-flex flex-column " style="--bs-bg-opacity: 0.75;">
                            <h1 class="title text-white text-center fw-bold">Austrália</h1>
                        </div>
                        <a href="#linkCards" class="learn-more-btn btn bg-dark-blue text-white px-4 fs-4">Conhecer Mais!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="linkCards" class="min-vh-100 d-flex align-items-center">
    <div class="container h-100 p-4">
        <div class="min-vh-90 row">
            <div class="vh-45 col-md-6 p-2">
                <a class="text-decoration-none" href="./culture.php">
                    <div class="bg-cover link-card h-100 rounded-4 d-flex justify-content-center" id="cultureDiv">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Cultura</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="vh-45 col-md-6 p-2">
                <a class="text-decoration-none" href="./cities.php">
                    <div class="bg-cover link-card h-100 rounded-4 d-flex justify-content-center teste" id="citiesDiv">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Cidades</h2>
                        </div>
                    </div>
                </a>
            </div>

            <div class="vh-45 col-md-6 p-2">
                <a class="text-decoration-none" href="./places.php">
                    <div class="bg-cover link-card h-100 rounded-4 d-flex justify-content-center teste" id="placesDiv">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Onde Ir</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="vh-45 col-md-6 p-2">
                <a class="text-decoration-none" href="./statistics.php">
                    <div class="bg-cover link-card h-100 rounded-4 d-flex justify-content-center teste" id="statisticsDiv">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Dados e Estatísticas</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../components/footer.html';
?>