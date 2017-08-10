<!DOCTYPE html>
<html lang="<?php echo $Site->language() ?>">

<head>
    <?php include(PATH_THEME_PHP.'head.php') ?>
</head>

    <body>
        <!-- Plugins Site Body Begin -->
        <?php Theme::plugins('siteBodyBegin') ?>   
        <!--      Hier die navigation .....  -->
        <div class="row header">
            <div class="section">
                <nav>
                    <a href="<?php echo $Site->url() ?>" class="home-link">
                        WILLI</br>THOMCZYK
                    </a>
                    <label for="menu-toggle" id="menu-toggle-label">
                    </label>
                    <input id="menu-toggle" type="checkbox" />
                    <div class="icon-menu"></div>
                    <ul class="menu">
                        <?php
                            //  pages
                            $parents = $pagesParents[NO_PARENT_CHAR];
                            foreach(array_reverse($parents) as $Parent) {
                                echo '<li class="float-right">'
                                     .'<a href="'.$Parent->permalink().'">'.$Parent->title().'</a>'
                                     .'</li>';
                            }
                        ?>
                        <li class="float-right">
                            <a href="<?php echo $Site->url()?>blog">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--      welche seiten typ??  -->
        <?php
            if( ($Url->whereAmI()=='home') ||  ($Url->whereAmI()=='blog') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='search') ) {
                include(PATH_THEME_PHP.'home.php');
            } elseif($Url->whereAmI()=='post') {
                include(PATH_THEME_PHP.'post.php');
            } elseif($Url->whereAmI()=='page') {
                include(PATH_THEME_PHP.'page.php');
            }
        ?>
        <!-- footer -->
        <div class="row footer center">
            <div class="section">
                <i class="icon-vital i3x"></i>
                <ul>
                    <li>
                        <a href="https://de-de.facebook.com/willem.wemser">FACEBOOK</a>
                    </li>
                    <li>│</li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC89Go9Jf11AQG8o5wuklPtg">YOUTUBE</a>
                    </li>
                    <li>│</li>
                    <li>
                        <a href="https://soundcloud.com/willi-wemser/">SOUNDCLOUD</a>
                    </li>
                </ul>
                <hr class="small">
                <a href="<?php echo $Site->url();?>kontakt/impressum">
                    <p>© WILLI THOMCYK / IMPRESSUM</p>
                </a>
                <hr class="small">
                <a href="<?php echo $Site->url() ?>admin">
                    <p>login</p>
                </a>
            </div>
        </div>
        <!-- Plugins Site Body End -->
        <?php Theme::plugins('siteBodyEnd') ?>
    </body>
</html>
