<div class="container mt-4">
    
    <h2>Yeni Kateqorya Əlavə Et</h2>

    <form action="<?php echo site_url('category/create'); ?>" method="post">
        <div class="form-group">
            <label for="name">Kateqorya Adı:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə Et</button>
    </form>
    </div>