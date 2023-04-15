<?php
$page = basename($_SERVER['PHP_SELF'],'.php');
?>
<nav class=" navbar navbar-expand-md mynavcolor">
    <div class="container">

        <a href="index.php"
           class="navbar-brand  ">
            <img
                class="d-block align-top"
                src ="pictures/logo3-removebg-preview.png "
                width="150px" height="75px"
            />

        </a>

        <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle ="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="true"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center "
             id="navbarNav">
            <ul class="navbar-nav ">
                <li class="navbar-item ">
                    <a href="index.html" class="nav-link <?php echo ($page == 'index') ? 'active' :''?> ">
                        Home
                    </a>
                </li>
                <li class="navbar-item   ">
                    <a href="/content/studio.php" class="nav-link <?php echo ($page == 'studio') ? 'active' :''?>">
                        Studio
                    </a>
                </li>
                <li class="navbar-item dropdown <?php echo ($page == 'biography' || 'motivation' || 'study') ? 'active' :''?>">
                    <a href="#"
                       class="nav-link dropdown-toggle"
                       id="navbarDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false"
                    >
                        About Me
                    </a>
                    <ul class="dropdown-menu dropdowncolor" aria-labelledby="navbarDropdown"  >
                        <li><a class="dropdown-item <?php echo ($page == 'biography') ? 'active' :''?>" href="/content/biography.php">Biography</a></li>
                        <li><a class="dropdown-item <?php echo ($page == 'motivation') ? 'active' :''?>" href="/content/motivation.php">Motivation</a></li>
                        <li><a class="dropdown-item <?php echo ($page == 'study') ? 'active' :''?>" href="/content/study.php">Study</a></li>
                    </ul>
                </li>
                <li class="navbar-item  ">
                    <a href="/content/projects.php" class="nav-link <?php echo ($page == 'projects') ? 'active' :''?>">
                        Projects
                    </a>
                </li>
                <li class="navbar-item ">
                    <a href="/content/contact.php" class="nav-link <?php echo ($page == 'contact') ? 'active' :''?>">
                        Contact
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
