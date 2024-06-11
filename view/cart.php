<?php
include __DIR__ . '/header.php';

$cartController = new CartController();
$cartItems = $cartController->viewCart();
$total = 0;
?>
<section class="back" style="margin:0; background-color: #f7f8fa; padding: 20px;">
    <div class="container" style="padding-top: 7%; padding-bottom: 20%;">
        <h2>Panier</h2>
        <hr><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $item) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td><?php echo htmlspecialchars($item['price']); ?>€</td>
                        <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                        <td><?php echo $item['price'] * $item['quantity']; ?>€</td>
                    </tr>
                    <?php $total += $item['price'] * $item['quantity']; ?>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <th><?php echo $total; ?>€</th>
                </tr>
            </tfoot>
        </table><br>
        <form method="post" action="../gestion/order.php">
            <button type="submit" class="btn btn-success" style="background-color:#212529; border:currentColor">Commander</button>
        </form>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>