<?php
    $lang="en";
    if(isset($_COOKIE['lang'])) {
        $lang=$_COOKIE['lang'];
    }
    include("../lang/".$lang.".php");
?>

<div class="navbar navbar-dark bg-dark navbar-expand-md px-3">

    <a href="index.php" class="navbar-brand">
        <img src="../../assets/logo.png" alt="PokeMarts" ezimgfmt="rs rscb1 src ng ngcb1" width="200px" height="50px">
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="menu">
        <ul class="navbar-nav ms-auto" style="list-style:none">
            <li class="nav-item mx-3">
                <a href="index.php" class="nav-link"><?php echo $home?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="" class="nav-link"><?php echo $help?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="" class="nav-link" ><?php echo $about?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="" class="nav-link"><?php echo $signin?></a>
            </li>
            <li class="nav-item mx-3">
                    <form class="d-flex" action="">
                        <button class="btn btn-outline-light" type="submit">
                            <?php echo $signup?>
                        </button>
                    </form>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=<?php echo $index_path ?>><i class="bi bi-house-door-fill"></i> <?php echo $home?></a></li>
                    <li><a class="dropdown-item" href=<?php echo $news_path ?>><i class="bi bi-file-text-fill"></i> <?php echo $news?></a></li>
                    <li><a class="dropdown-item" href=<?php echo $partners_path ?>><i class="bi bi-diamond-fill"></i> <?php echo $partners?></a></li>
                    <li><a class="dropdown-item" href=<?php echo $login_path ?>><i class="bi bi-person-circle"></i> <?php echo $signin?></a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#languageModal"><img src=<?php echo "https://img.icons8.com/color/48/null/" . $flag . "-circular.png"?> width="16" height="16"/> <?php echo $languages?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>  

<header class="head-banner text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="inner-form">
                    <div class="input-field">
                        <div class="search-bar">
                            <input class="search-input" type="text" placeholder="Search...">
                        </div>
                        <button class="btn-search" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>