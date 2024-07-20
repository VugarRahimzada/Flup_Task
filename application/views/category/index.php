
    <div class="container mt-4">
        <h2 class="mb-4">Kateqoryalar</h2>

        <p class="mb-4">
            <a href="<?php echo site_url('category/create'); ?>" class="btn btn-primary">Yeni katigorya Əlavə et</a>
        </p>

        <h3 class="mb-3">Mövcud Kateqoriyalar:</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kateqorya Adı</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $index => $category): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($category['name']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center">Kateqorya yoxdur.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
