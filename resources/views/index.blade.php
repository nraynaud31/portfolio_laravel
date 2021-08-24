<!DOCTYPE html>
<html lang="FR">
<head>
    <title>{{ __("infos.title") }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="https://kit.fontawesome.com/66d7d10694.js" crossorigin="anonymous"></script>
    <script src="resources/js/app.js"></script>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <meta name="keywords" content="nicolas, raynaud, developpeur">
    <meta name="copyright" content="© 2021 Nicolas RAYNAUD">
    <meta charset="utf-8">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-home" aria-hidden="true"> {{__("infos.nav_home")}}</i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#about"><i class="far fa-id-card"> {{__("infos.nav_about")}}</i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#formation"><i class="fas fa-graduation-cap"> {{__("infos.nav_school")}}</i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#experience"><i class="fas fa-briefcase"> {{__("infos.nav_experiences")}}</i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact"><i class="fas fa-address-book"
                                                   aria-hidden="true">{{__("infos.nav_contact")}}</i></a>
        </li>
    </ul>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="avatar">
    <img class="avatar" alt="" src="public/photo.jpg">
</div>
<br>
<h1>{{__("infos.full_name")}}</h1>
<br>
<h2>{{__("infos.job_name")}}</h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3><i class="far fa-id-card"> <b><u>{{__("infos.about_title")}}</u></b></i></h3>
                <br>
                <ul>
                    <p>Agé de
                        <script>getAge(new Date(2003, 2, 18))</script>
                        ans, je suis passionné d'Informatique.
                    </p>
                    <p>{{__("infos.about_2_paragraph")}}</p>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5><i class="fas fa-id-card-alt"> <b><u>{{__("infos.identity_title")}}</u></b></i></h5>
                <br>
                <p>{{__("infos.identity_born")}}</p>
                <p>{{__("infos.identity_nationality")}}</p>
                <p>{{__("infos.permis_am")}}</p>
                <p>{{__("infos.permis_b")}}</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div id="formation">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3><i class="fas fa-graduation-cap"> <b><u>{{__("infos.school_info_tile")}}</u></b></i></h3>
                <br>
                <div class="premiere_gale">
                    <ul>
                        <li><p class="title">{{__("infos.school_1re_gale_title")}}</p>
                        </li>
                        <p class="period">{{__("infos.school_1re_gale_period")}}</p>
                        <p class="details">{{__("infos.school_1re_gale_desc")}}</p>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <h5><i class="fas fa-globe"> <b><u>{{__("infos.lang_title")}}</u></b></i></h5>
                <br>
                <p><img alt="" src="images/anglais.png">{{__("infos.lang_en")}}</p>
                <p><img alt="" src="images/espagnol.png">{{__("infos.lang_es")}}</p>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div id="experience">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4><i class="fas fa-briefcase"> <b><u>{{__("infos.experience_title")}}</u></b></i></h4>
                <br>
                <div class="simplon_stage">
                    <ul>
                        <li><p class="title">{{__("infos.simplon_stage_title")}}</p>
                        </li>
                        <p class="period">{{__("infos.simplon_stage_period")}}</p>
                        <p class="details">{{__("infos.simplon_details_1")}}</p>
                        <p class="details">{{__("infos.simplon_details_2")}}</p>
                        <p class="details">{{__("infos.simplon_details_3")}}</p>
                    </ul>
                </div>
                <div class="badblock">
                    <ul>
                        <li><p class="title">{{__("infos.badblock_title")}}</p>
                        </li>
                        <p class="period">{{__("infos.badblock_period")}}</p>
                        <p class="details">{{__("infos.badblock_period")}}</p>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <h5><i class="fas fa-cubes"> <b><u>{{__("infos.skills_title")}}</u></b></i></h5>
                <br>
                <div class="bootstrap">
                    <p><i class="fab fa-bootstrap"> <b>{{__("infos.skills_bootstrap")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">45%
                        </div>
                    </div>
                </div>
                <br>
                <div class="html">
                    <p><i class="fab fa-html5"> <b>{{__("infos.skills_html")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">50%
                        </div>
                    </div>
                </div>
                <br>
                <div class="css3">
                    <p><i class="fab fa-css3-alt"> <b>{{__("infos.skills_css")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">65%
                        </div>
                    </div>
                </div>
                <br>
                <div class="javascript">
                    <p><i class="fab fa-js-square"> <b>{{__("infos.skills_js")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">30%
                        </div>
                    </div>
                </div>
                <br>
                <div class="php">
                    <p><i class="fab fa-php"> <b>{{__("infos.skills_php")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">30%
                        </div>
                    </div>
                </div>
                <br>
                <div class="mysql">
                    <p><i class="fas fa-database"> <b>{{__("infos.skills_mysql")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" ,
                             aria-valuemin="0" aria-valuemax="100">65%
                        </div>
                    </div>
                </div>
                <br>
                <div class="git">
                    <p><i class="fab fa-git-alt"> <b>{{__("infos.skills_git")}}</b></i></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100">80%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4><i class="fas fa-address-book"> <b><u>{{__("infos.contact_title")}}</u></b></i></h4>
                <br>
                <div class="adresse">
                    <ul>
                        <li><p><i class="fas fa-map-marker-alt"></i> {{__("infos.contact_location")}}</p>
                        </li>
                    </ul>
                </div>
                <div class="phone">
                    <ul>
                        <li><p><i class="fas fa-phone-square-alt"></i> <a
                                    href="tel:0632500120">{{__("infos.contact_phone")}}</a></p>
                        </li>
                    </ul>
                </div>
                <div class="email">
                    <ul>
                        <li><p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                    href="mailto:contact@nicolas-raynaud.fr">{{__("infos.contact_email")}}</a></p></li>
                    </ul>
                </div>
                <div class="linkedin">
                    <ul>
                        <li><p><i class="fab fa-linkedin"></i> <a
                                    href="https://www.linkedin.com/in/nicolas-raynaud-55b883204">{{__("infos.contact_linkedin")}}</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<span></span>
<footer id="footer" class="m-0 p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-0">
                <p>© Copyright
                    <script>document.write(new Date().getFullYear())</script>
                    . Tous droits réservés.
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
