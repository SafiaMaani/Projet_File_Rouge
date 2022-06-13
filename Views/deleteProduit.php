<?php

if (isset($_POST['delete'])) {
    $byeProf = new ProduitController();
    $byeProf->deleteProduit();
}
