<?php
    $lang="en";
    if(isset($_COOKIE['lang'])) {
        $lang=$_COOKIE['lang'];
    }
    include("../lang/".$lang.".php");
?>

<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="footer-links col-lg-3">
                <strong><?php echo $about?></strong>
            </div>
            <div class="footer-links col-lg-3">
                <strong><?php echo $help?></strong>
            </div>
            <div class="footer-links col-lg-3">
                <strong><?php echo $legal?></strong>
            </div>
            <div class="footer-links col-lg-3">
                <strong>Social</strong>
            </div>
        </div>
        <p class="m-0 text-center text-white">Copyright &copy; PokeMarts 2023</p>
    </div>
</footer>