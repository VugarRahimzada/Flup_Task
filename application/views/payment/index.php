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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#category-filter').on('change', function() {
        var category_id = $(this).val();
        
        $.ajax({
            url: '<?php echo site_url('payment/filter'); ?>',
            method: 'POST',
            data: { category_id: category_id },
            dataType: 'json',
            success: function(response) {
                var payments = response.payments;
                var total_amount = response.total_amount;
                var rows = '';
                var running_total = 0;

                $.each(payments, function(index, payment) {
                    if (payment.payment_type_name == 'Medaxil') {
                        running_total += parseFloat(payment.amount);
                    } else if (payment.payment_type_name == 'Mexaric') {
                        running_total -= parseFloat(payment.amount);
                    }

                    rows += '<tr>';
                    rows += '<td>' + parseFloat(payment.amount).toFixed(2) + ' ' + payment.currency_name + '</td>';
                    rows += '<td>' + payment.payment_type_name + '</td>';
                    rows += '<td>' + payment.feedback + '</td>';
                    rows += '<td class="running-total">' + running_total.toFixed(2) + '</td>';
                    rows += '</tr>';
                });

                $('tbody').html(rows);
                $('#total-amount').text(total_amount);
            }
        });
    });
});
</script>
