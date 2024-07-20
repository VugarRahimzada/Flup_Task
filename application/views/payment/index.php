<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödəniş</title>
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
        .running-total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Ödəniş</h2>

        <p class="mb-4">
            <a href="<?php echo site_url('payment/create'); ?>" class="btn btn-primary">Yeni Ödəniş Əlavə Et</a>
        </p>

        <h3 class="mb-3">Existing Payments:</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Məbləğ (Valyuta)</th>
                    <th>Növü</th>
                    <th>Rəy</th>
                    <th>Qalıq</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $running_total = 0;
                foreach ($payments as $payment):
                    if ($payment['payment_type_name'] == 'Medaxil') {
                        $running_total += $payment['amount'];
                    } elseif ($payment['payment_type_name'] == 'Mexaric') {
                        $running_total -= $payment['amount'];
                    }
                ?>
                    <tr>
                        <td><?php echo number_format($payment['amount'], 2) . ' ' . $payment['currency_name']; ?></td>
                        <td><?php echo $payment['payment_type_name']; ?></td>
                        <td><?php echo $payment['feedback']; ?></td>
                        <td class="running-total"><?php echo number_format($running_total, 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
