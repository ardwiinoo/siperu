<?php
$title = "SIPERU - Home";

require_once "./partials/head.html";
?>

<body>

    </div>
    <?php
    require_once "./partials/navbar.html";
    ?>

    <div class="container" id="first">
        <div class="row mt-4">
            <div class="searchBox">
            <div class="col">
                <div class="card hero border-0">
                    <div class="card-body">
                        <h1>Pinjam Ruangan<br>Lebih Mudah Dengan Siperu.</h1>
                    </div>
                </div>
                    <div class="card p-3 mr-3 searchHero">
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
        </div>
    </div>

    <div class="container mt-4">
        <div class="ruangFav">
            <h2 class="mb-3">Ruang Favorit</h2>
            <div class="row mt-2">
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
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-3">Mengapa Menggunakan Siperu?</h2>
        <div class="row mt-4 reason">
            <div class="col-sm">
                <div class="card border-0">
                    <div class="card-body">
                        <h4><i class="bi bi-stopwatch-fill"></i> Akses Kapan Saja</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus fuga, qui dignissimos enim culpa, expedita aperiam totam, dolorum excepturi dicta vitae saepe? Explicabo et qui consequuntur vitae corporis delectus suscipit?</p>
                    </div>
                </div>

            </div>
            <div class="col-sm">
                <div class="card border-0">
                    <div class="card-body">
                        <h4><i class="bi bi-diagram-3-fill"></i> Terintegrasi SIMERU</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus fuga, qui dignissimos enim culpa, expedita aperiam totam, dolorum excepturi dicta vitae saepe? Explicabo et qui consequuntur vitae corporis delectus suscipit?</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-4 reason">
            <div class="col-sm">
                <div class="card border-0">
                    <div class="card-body">
                        <h4><i class="bi bi-cloud-upload-fill"></i> Ajukan dulu lengkapi kemudian</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus fuga, qui dignissimos enim culpa, expedita aperiam totam, dolorum excepturi dicta vitae saepe? Explicabo et qui consequuntur vitae corporis delectus suscipit?</p>
                    </div>
                </div>

            </div>
            <div class="col-sm">
                <div class="card border-0">
                    <div class="card-body">
                        <h4><i class="bi bi-smartwatch"></i> Hemat waktu</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus fuga, qui dignissimos enim culpa, expedita aperiam totam, dolorum excepturi dicta vitae saepe? Explicabo et qui consequuntur vitae corporis delectus suscipit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-3">Kami Bekerjasama Dengan</h2>
        <div class="container text-center mb-3">
            <img src="./assets/images/uad-logo.png" class="img-fluid">
            <img src="./assets/images/uad-logo.png" class="img-fluid">
            <img src="./assets/images/uad-logo.png" class="img-fluid">
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="card border-0" style="background-color: #f2c204;">
            <div class="card-body">
                <div class="row p-4">
                    <div class="col-md">
                        <h3 class="mt-3"><b>Ayo Pinjam Ruangan Sekarang</b></h3>
                    </div>
                    <div class="col-md">
                        <a href="#first"><button class="btn float-end btn-lg w-75 text-white" style="height: 4rem; background-color: #21476c;" type="button">Cari</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once "./partials/footer.html";
    ?>
</body>