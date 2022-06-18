<!-- Favicons -->
<link href="Views/assets/img/logo.jpg" rel="icon">

<div class="d-flex bg-light">

    <!-- SIDE BARE -->
    <?php include_once "Views/Includes/sidebar/index.php" ?>
    <div class="tables d-flex flex-column justify-content-between w-100 m-2 p-2">
        <h3 class="text-secondary"><u>Listes des Commandes</u></h3>

        <div class="container">
            <div class="d-flex flex-wrap">
                <?php

                // foreach ($commandes as $commande) :
                ?>
                <div class="cards w-25 p-4" style="height: 300px;">
                    <div class="text-center" style="height: 100%;">
                        <div style="height: 100%; height : 100%;">
                            <input type="hidden" name="id_commande" value="<?php  ?>">
                            <button class="btn" style="width:100%; height : 90%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <img src="Views/assets/img/Delivery-bro.svg" alt="commande" style="width:100%; height : 100%;">
                            </button>
                            <h6>Cliquer pour voir le détail de commande</h6>
                        </div>
                    </div>
                </div>
                <?php
                // endforeach; 
                ?>


                <!-- Modal DETAIL COMMANDE-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Détails de commande</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ICI JE VAIS AFFICHER LE DETAIL DE LA COMMANDE
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-primary">Confirmer la commande</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal DETAIL COMMANDE-->
            </div>
        </div>
    </div>
</div>