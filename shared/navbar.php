    <?php

        // this works
        include($_SERVER['DOCUMENT_ROOT'] . "/lib/cookie.php");
        if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] !== null){
            $_SESSION['cookie'] = getCookieUserid();

        }
        

    
        // this doesnt work ( the include )

        // include("../lib/cookie.php");
        // if (isset($_COOKIE['name']) && $_COOKIE['name'] !== null){
        //     $_SESSION['cookie'] = $_COOKIE['name'];

        // }



    ?>
    
    
    <nav class="navbar navbar-expand-lg " style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php"> <img src="/public/logo.png" width="30px" height="30px" /></a>
            <h2>Hajz</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events/explore.php">Explore</a>
                    </li>

                </ul>
                <?php if (isset($_SESSION['cookie']) && $_SESSION['cookie'] != null): ?>

                <form class="d-flex" role="search">
                    <a class="btn m-1 " href="/auth/logout.php" style="border: 1px solid #6518ff; color:#6518ff ;"  >logout</a>
                </form>

                <?php else: ?>
                    <form class="d-flex" role="search">
                    <a class="btn m-1" href="/auth/sign-in.php" style="border: 1px solid #6518ff; color:#6518ff ;"  >Register</a>
                    <a class="btn  m-1" href="/auth/login.php" style="background-color: #6518ff; color: white;"     >Login</a>
                    </form>
                <?php endif; ?>


            </div>
        </div>
    </nav>