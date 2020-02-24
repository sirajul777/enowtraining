<!-- navbar -->
<!-- dropdown -->
<ul id="dropdown1" class="dropdown-content">
    <li class="nav-item"><a href="<?= base_url('superchamp'); ?>">English Now Super Camp</a></li>
    <li class="nav-item"><a href="#!">Online Class</a></li>
    <li class="nav-item"><a href="#!">English Now Community</a></li>
    <li class="nav-item"><a href="#!">One Day English Training</a></li>
    <li class="nav-item"><a href="#!">Corporate Training</a></li>
    <li class="nav-item"><a href="#!">Seminar/Workshop</a></li>
</ul>

<!-- sidenav -->
<ul id="mobile-nav" class="sidenav">
    <li><a href="<?= base_url('about'); ?>" class="black-text">About Us</a></li>
    <li class="drop">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Dropdown<i class="material-icons right">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="<?= base_url('superchamp'); ?>">English Now Super Camp</a></li>
                        <li><a href="#!">Online Class</a></li>
                        <li><a href="#!">English Now Community</a></li>
                        <li><a href="#!">One Day English Training</a></li>
                        <li><a href="#!">Corporate Training</a></li>
                        <li><a href="#!">Seminar/Workshop</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="#" class="black-text">Ebook</a></li>
    <li><a href="#" class="black-text">Blog</a></li>
    <li><a href="#" class="btn tombol" type="button">Join Us</a></li>
</ul>
<!-- end sidenav -->
<div id="tambah">
    <nav class="white">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?= base_url(); ?>" class="brand-logo"><img class="logo" src="<?= base_url('assets'); ?>/img/fixlogo.png" alt="logo" /></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger
                        indigo-text darken-4"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= base_url('about'); ?>" class="black-text">About Us</a></li>
                    <li><a class="dropdown-trigger black-text" href="" data-target="dropdown1">Our Programs<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="#" class="black-text">Ebook</a></li>
                    <li><a href="#" class="black-text">Blog</a></li>
                    <li><a href="#" class="btn tombol" type="button">Join Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<!-- end navbar -->