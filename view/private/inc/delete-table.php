<div class="container text-center w-25">
    <p class="h4">Êtes-vous sur vous voulez supprimer ce lieu?</p>
    <div class="border border-warning rounded-5">
        <p><?=$mapDelete["id"]?></p>
        <p><?=$mapDelete["nom"]?></p>
    </div>
    <div class="mt-2">
        <a href="?page=adminHome&action=delete&item=<?=$mapDelete["id"]?>&confirm=ok"><span class="btn btn-danger mx-3">Oui</span></a>
        <a href="?page=adminHome"><span class="btn btn-info mx-3">Non</span></a>
    </div>
</div>