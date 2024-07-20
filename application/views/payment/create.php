<h2>Add Payment</h2>

<form action="<?php echo site_url('payment/create'); ?>" method="post">
    <div class="form-group">
        <label for="amount">Məbləğ</label>
        <input type="number" name="amount" id="amount" class="form-control" step="0.01" min="0" required>
    </div>
    
    <div class="form-group">
        <label for="category_id">Kateqorya</label>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="" disabled selected>Kateqorya Seç</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="currency_id">Valyuta</label>
        <select name="currency_id" id="currency_id" class="form-control" required>
            <option value="" disabled selected>Valyuta Seç</option>
            <?php foreach ($currencies as $currency): ?>
                <option value="<?php echo $currency['id']; ?>"><?php echo htmlspecialchars($currency['name']); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="payment_type_id">Payment Type</label>
        <select name="payment_type_id" id="payment_type_id" class="form-control" required>
            <option value="" disabled selected>Ödəniş Növü</option>
            <?php foreach ($payment_types as $payment_type): ?>
                <option value="<?php echo $payment_type['id']; ?>"><?php echo htmlspecialchars($payment_type['name']); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="feedback">Rəy</label>
        <textarea name="feedback" id="feedback" class="form-control" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Göndər</button>
</form>
