<?= $this->extend('layout/Dinkes/templates') ?>

<?= $this->Section('content') ?>

<div class="container-fluid">

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Enter content"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" onchange="previewImage(event)">
        </div>

        <div class="form-group">
            <img id="preview" src="" alt="Image Preview" style="max-width: 50%; display: none;">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>