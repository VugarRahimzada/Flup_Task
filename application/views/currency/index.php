
    <div class="container mt-4">
        <h2 class="mb-4">Valyuta</h2>

        <p class="mb-4">
            <a href="<?php echo site_url('currency/create'); ?>" class="btn btn-primary">Yeni Valyuta Əlavə Et</a>
        </p>

        <h3 class="mb-3">Existing Currencies:</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Valyuta Adı</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($currencies)): ?>
                    <?php foreach ($currencies as $index => $currency): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($currency['name']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center">yoxdur</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
