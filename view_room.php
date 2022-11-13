<?php session_start();
$title = "SIPERU - Details";

require_once "./partials/head.php";
?>

<body>
    <?php
    require_once "./partials/navbar.php";
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md mb-3">
                <div class="card bg-secondary border-0">
                    <div class="card-body">
                        <img src="./assets/images/cover1.png" class="img-fluid float-start">
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card bg-secondary border-0">
                    <div class="card-body">
                        <h1>kalender nya disini coy</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (isset($_SESSION['nim'])) {
            ?>
                <div class="col-md">
                    <div class="card bg-secondary border-0">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Alasan pinjam</label>
                                </div>
                                <label for="floatingInputValue">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                                <label for="floatingInputValue">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">

                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary border-0">
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">07.00 - 08.40</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">08.45 - 10.25</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">10.30 - 12.10</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="button">Ajukan Pinjam</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col">
                    <div class="card bg-secondary border-0">
                        <div class="card-body">
                            <h1>Login untuk melanjutkan</h1>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <?php
    require_once "./partials/loginRegisterForm.php";
    require_once "./partials/footer.php";
    ?>

    <script src="./assets/js/main.js"></script>

</body>