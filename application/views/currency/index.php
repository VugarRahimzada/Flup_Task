<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valyuta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .text-center {
            font-style: italic;
        }
    </style>
</head>
<body>
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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
