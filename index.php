<?php require 'inc/data/products.php'; ?>

<?php
if(empty(session_id()))
    session_start();
if(isset($_GET['add_to_cart'])){    //s'il y a un cookie de sélectionné
    $cookie_id = $_GET['add_to_cart'];
    //ajout des infos du produit sélectionné (name et description) à une session "cookies" bidimensionnelle comme catalog.
    //si l'id est déjà présent, on modifie seulement le champ quantité

     if(isset($_SESSION['cookies'][$cookie_id]))
        $_SESSION['cookies'][$cookie_id]['quantity']+=1;
    else
        $_SESSION['cookies'][$cookie_id] = $catalog[$cookie_id];
}

?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
