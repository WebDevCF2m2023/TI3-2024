<?php

// si on veut se déconnecter

if (isset($_GET['disconnect'])) {
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}