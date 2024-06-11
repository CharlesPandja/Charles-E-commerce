<?php
include __DIR__ . '/header.php';

$productController = new ProductController();
$products = $productController->listProducts();
?>
<section class="back" style="margin:0; background-color: #f7f8fa; padding: 20px;">
    <div class="container" style="padding-top: 7%; padding-bottom: 20%;">
        <h2>Produits</h2>
        <hr>
        <br>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm" style="width: 100%; display: flex; flex-direction: column;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($product['price']); ?>€</p>
                            <form method="post" action="../gestion/cart.php" class="mt-auto">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <div class="input-group mb-3">
                                    <input type="number" name="quantity" value="1" min="1" class="form-control">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary" style="background-color:#212529; border:currentColor">Ajouter au panier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>