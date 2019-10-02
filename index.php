<?php

    include 'utils.inc.php';

    start_page('Accueil');


    echo '<hr/><br/><strong>Accueil</strong><br/><br/><hr/>';
    echo '<br/>';

    $page2 = 'Nos Livres';
    $page2adr = 'livres.php';

    $page3 = 'Nous contacter';
    $page3adr = 'contact.php';


    echo '<a href="' . $page2adr . '">' . $page2 . '</a><br/>';
    echo '<a href="' . $page3adr . '">' . $page3 . '</a>';

    end_page();

?>