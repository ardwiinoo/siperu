<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div id="log" style="display: block;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="./process/loginCheck.php">
                <div class="col-12">
                    <input type="number" class="form-control-lg " placeholder="Nomor Induk Mahasiswa" name="nim" id="nim">
                </div>

                <div class="col-12">
                    <input type="password" class="form-control-lg " placeholder="Password" name="password" id="password">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg" name="search" id="searchBtn">Login</button>
                </div>
            </form>
            <a href="#" onclick="changeLogReg()">Daftar</a>
        </div>
    </div>
    <div id="reg" style="display: none;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="./process/loginCheck.php">
                <div class="col-12">
                    <input type="number" class="form-control-lg " placeholder="Nomor Induk Mahasiswa" name="nim" id="nim">
                </div>

                <div class="col-12">
                    <input type="number" class="form-control-lg " placeholder="Nomor Induk Mahasiswa" name="nim" id="nim">
                </div>

                <div class="col-12">
                    <input type="number" class="form-control-lg " placeholder="Nomor Induk Mahasiswa" name="nim" id="nim">
                </div>

                <div class="col-12">
                    <input type="password" class="form-control-lg " placeholder="Password" name="password" id="password">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg" name="search" id="searchBtn">Register</button>
                </div>
            </form>
            <a href="#" onclick="changeLogReg()">Login</a>
        </div>
    </div>
</div>