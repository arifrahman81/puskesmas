<?= $this->extend('layout/Dinkes/templates'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Blok Page</h1>

    <a href="<?= base_url('admin/t_blog') ?> " class="btn btn-primary mb-3">Tambah Blog</a>

    <div class="col-md-6">
        <div id="blog-posts">
            <ul class="list-unstyled">
                <li>
                    <!-- Content for the blog post item 1 -->
                </li>
                <!-- Add more blog post items as needed -->
            </ul>
        </div>

        <nav id="pagination" aria-label="Page navigation" style="display: none;">
            <ul class="pagination justify-content-center">
                <li class="page-item" id="prev">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo; Previous</span>
                    </a>
                </li>
                <li class="page-item" id="next">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


</div>

<?= $this->endSection(); ?>