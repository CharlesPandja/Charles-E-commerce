<?php
include __DIR__ . '/header.php';

$orderController = new OrderController();
$orders = $orderController->listUserOrders();
?>
<section class="back" style="margin:0; background: #f7f8fa; padding: 20px;">
    <div class="container" style="padding-top: 7%; padding-bottom: 20%;">
        <h2>Commandes</h2>
        <hr><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id commande</th>
                    <th>Id produit</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($order['id']); ?></td>
                        <td><?php echo htmlspecialchars($order['product_id']); ?></td>
                        <td><?php echo htmlspecialchars($order['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($order['total']); ?>€</td>
                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>