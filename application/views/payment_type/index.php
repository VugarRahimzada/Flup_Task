<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödəniş Növləri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .container {
            margin-top: 2rem;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
