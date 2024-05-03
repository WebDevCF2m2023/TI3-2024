<header>
    <?php if (isset($errorMessage)) {
        ?>
        <h1 class="errorMessage"><?=$errorMessage?></h1>
        <?php
        }else{
            ?>
        <h1>Bienvenue, ceci est une refonte complète du TI</h1>
    <?php
        }
        ?>
        <button id="loginCall" class="loginCallButton">Connectez-vous</button>
        <h4 id="loginError"></h4>
</header>