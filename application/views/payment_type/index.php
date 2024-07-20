<div class="container mt-4">
        <h2 class="mb-4">Ödəniş Növləri</h2>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Ödəniş Növü</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payment_types as $payment_type): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($payment_type['name']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

