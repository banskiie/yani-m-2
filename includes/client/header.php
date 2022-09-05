<body>
    <div id="inq-head" class="container-fluid d-flex justify-content-center">
        <a href="https://mail.google.com/mail/u/0/#inbox">For inquiries, email: yanimevents@gmail.com</a>
    </div>

    <div id="top-navbar" class="container-fluid d-flex align-items-center justify-content-center">
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="navbar-brand">
            <a href="../views/index.php">
                <img src="../images/yani-transparent.png" alt="" id="home-logo" />
            </a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
        <div class="nav-item">
            <?php
            @session_start();
            if (isset($_SESSION['role']) == 'client' && $_SESSION['loggedIn'] == true) {
                echo '<a class="nav-link" href="client.php">Profile</a>';
            } else {
                echo '<a class="nav-link" href="login.php">Profile</a>';
            }
            ?>
        </div>
        <div class="d-flex">
            <div class="vr"></div>
        </div>
    </div>