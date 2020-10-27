<?php
    $page = 'blank';
    
    if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
    }
    
    if (isset($_REQUEST['region'])) {
        $region = $_REQUEST['region'];
        $page = 'centres';
    }
    
    switch ($page) {
        case 'blank':
            {
                ?>
                <ul id="navigation">
                    <li><a href="index.php?page=blank" title="Go Home" style="opacity: 1;">Accueil</a></li>
                    <li><a href="index.php?page=centres" title="Go Centres">Centres d'entretien</a></li>
                    <li><a href="index.php?page=forfaits" title="Go Forfaits">Forfaits révisions</a></li>
                    <li><a href="index.php?page=pieces" title="Go pieces">Pièces et accessoires</a></li>
                    <li><a href="index.php?page=pneus" title="Go Pneus">Pneus motos et scooters</a></li>
                </ul>
                <?php
                break;
            }
        case 'centres' :
            {
                ?>
                <ul id="navigation">
                    <li><a href="index.php?page=blank" title="Go Home">Accueil</a></li>
                    <li><a href="index.php?page=centres" title="Go Centres" style="opacity: 1;">Centres d'entretien</a></li>
                    <li><a href="index.php?page=forfaits" title="Go Forfaits">Forfaits révisions</a></li>
                    <li><a href="index.php?page=pieces" title="Go pieces">Pièces et accessoires</a></li>
                    <li><a href="index.php?page=pneus" title="Go Pneus">Pneus motos et scooters</a></li>
                </ul>
                <?php
                break;
            }
        case 'forfaits':
            {
                ?>
                <ul id="navigation">
                    <li><a href="index.php?page=blank" title="Go Home">Accueil</a></li>
                    <li><a href="index.php?page=centres" title="Go Centres">Centres d'entretien</a></li>
                    <li><a href="index.php?page=forfaits" title="Go Forfaits" style="opacity: 1;">Forfaits révisions</a></li>
                    <li><a href="index.php?page=pieces" title="Go pieces">Pièces et accessoires</a></li>
                    <li><a href="index.php?page=pneus" title="Go Pneus">Pneus motos et scooters</a></li>
                </ul>
                <?php
                break;
            }
        case 'pieces':
        {
            ?>
            <ul id="navigation">
                <li><a href="index.php?page=blank" title="Go Home">Accueil</a></li>
                <li><a href="index.php?page=centres" title="Go Centres">Centres d'entretien</a></li>
                <li><a href="index.php?page=forfaits" title="Go Forfaits">Forfaits révisions</a></li>
                <li><a href="index.php?page=pieces" title="Go pieces" style="opacity: 1;">Pièces et accessoires</a></li>
                <li><a href="index.php?page=pneus" title="Go Pneus">Pneus motos et scooters</a></li>
            </ul>
            <?php
            break;
        }
        case 'pneus':
            {
                ?>
                <ul id="navigation">
                    <li><a href="index.php?page=blank" title="Go Home">Accueil</a></li>
                    <li><a href="index.php?page=centres" title="Go Centres">Centres d'entretien</a></li>
                    <li><a href="index.php?page=forfaits" title="Go Forfaits">Forfaits révisions</a></li>
                    <li><a href="index.php?page=pieces" title="Go pieces">Pièces et accessoires</a></li>
                    <li><a href="index.php?page=pneus" title="Go Pneus" style="opacity: 1;">Pneus motos et scooters</a></li>
                </ul>
                <?php
                break;
            }
    }
    
    include("vues/v_entete.php");
    
    $region = '0';
    if (isset($_REQUEST['region'])) {
        $region = $_REQUEST['region'];
    }
    
    switch ($page) {
        case 'blank':
            {
                include("vues/v_home.php");
                break;
            }
        case 'centres' :
            {
                include("vues/v_centres.php");
                switch ($region){
                    case '0':
                        {
                            break;
                        }
                    case '1':
                        {
                            include("vues/v_centres1.php");
                            break;
                        }
                    case '2':
                        {
                            include("vues/v_centres2.php");
                            break;
                        }
                    case '3':
                        {
                            include("vues/v_centres3.php");
                            break;
                        }
                    case '4':
                        {
                            include("vues/v_centres4.php");
                            break;
                        }
                    case '5':
                        {
                            include("vues/v_centres5.php");
                            break;
                        }
                }
                break;
            }
        case 'forfaits':
            {
                include("vues/v_forfaits.php");
                break;
            }
        case 'pieces':
            {
                include("vues/v_pieces.php");
                break;
            }
    }
    
    include("vues/v_pied.php");