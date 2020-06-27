<link href="style/menu.css" rel="stylesheet">
<nav class="navbar navbar-expand-md navbar-dark  sticky-top navig-backg" id="coll-menu">
<div class="container-fluid" >
    <a class="navbar-brand" href="#"><img id="logo" src="img/logo/logo_v4.png">OmniCompare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
<li class="nav-item <?php if ($page == "home") {?>active<?php } ?> ">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Connect</a>
            </li>
        </ul>
    </div>
</div>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("coll-menu").style.top = "0";
  } else {
    document.getElementById("coll-menu").style.top = "-90px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</nav>
