 <div style="background-color: #f2c204; height: 3px;"></div>
 <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark">
     <div class="container">
         <a class="navbar-brand" href="http://localhost:8080/pwd/siperu/"><b>SIPERU</b></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="main_nav">


             <ul class="navbar-nav ms-auto">
                 <li class="nav-item"><a class="nav-link" href="#"> Menu 1 </a></li>
                 <li class="nav-item"><a class="nav-link" href="#"> Menu 2 </a></li>
                 <li class="nav-item dropdown">
                     <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown </a>
                     <ul class="dropdown-menu dropdown-menu-right">
                         <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                         <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                     </ul>
                 </li>
                 <?php
                    if (isset($_SESSION['nim'])) {
                    ?>
                     <li class="nav-item dropdown">
                         <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> <?= $_SESSION['name']; ?> </a>
                         <ul class="dropdown-menu dropdown-menu-right">
                             <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                             <li><a class="dropdown-item" href="./process/logout.php">Logout</a></li>
                         </ul>
                     </li>
                 <?php
                    } else {
                    ?>
                     <li class="nav-item"><a class="nav-link btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="btnLogin">Login</button></a></li>
                 <?php
                    }
                    ?>
             </ul>

         </div>
     </div>
 </nav>