<?php session_start();
$title = "SIPERU - Search";

require_once "./partials/head.php";
?>

<body>
    <?php
    require_once "./partials/navbar.php";
    ?>

    <div class="container">
        <h1 class="text-center mt-4">Temukan Ruangan Disini</h1>
        <div class="row">
            <div class="card border-0 mt-4 mb-4">
                <div class="card-body mx-auto" style="background-color: #f2c204; border-radius: 10px;">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <select class="form-select-lg" id="kampus" name="kampus">
                                <option selected>Kampus</option>
                                <option value="1">Kampus 1</option>
                                <option value="2">Kampus 2</option>
                                <option value="3">Kampus 3</option>
                                <option value="3">Kampus 4</option>
                                <option value="3">Kampus 5</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control-lg " placeholder="Nama/Kode Ruang" name="namaKode" id="namaKode">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg" name="search" id="searchBtn">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md mb-3">
                <div class="card favCard">
                    <img src="./assets/images/cover1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="./view_room.php">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="button">Button</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card favCard">
                    <img src="./assets/images/cover2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card favCard">
                    <img src="./assets/images/cover1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card favCard">
                    <img src="./assets/images/cover2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    require_once "./partials/loginRegisterForm.php";
    require_once "./partials/footer.php";
    ?>

    <script src="./assets/js/main.js"></script>

</body>