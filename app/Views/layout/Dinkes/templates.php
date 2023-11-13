<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="/assets/img/logo2.png">

    <title>Dinas Kesehatan</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/sb_admin/vendor/fontawesome-free/css/all.min.css'); ?> " rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/sb_admin/css/sb-admin-2.min.css'); ?> " rel="stylesheet">
    <link href="<?= base_url('assets/sb_admin/vendor/datatables/dataTables.bootstrap4.min.css'); ?> " rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dinkes/dashboard'); ?> ">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dinas Kesehatan<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dinkes/dashboard'); ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dinkes/data_penyakit'); ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Penyakit</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dinkes/user'); ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Daftar Fasilitas Kesehatan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/sb_admin/img/undraw_profile.svg'); ?> ">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('Dinkes/profile'); ?> ">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <?= $this->renderSection('content'); ?>




                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>LaporKES 2023</a>, All Right Reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?> ">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/sb_admin/vendor/jquery/jquery.min.js'); ?> "></script>
    <script src="<?= base_url('assets/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/sb_admin/vendor/jquery-easing/jquery.easing.min.js') ?> "></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/sb_admin/js/sb-admin-2.min.js') ?> "></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/sb_admin/vendor/datatables/jquery.dataTables.min.js'); ?> "></script>
    <script src="<?= base_url('assets/sb_admin/vendor/datatables/dataTables.bootstrap4.min.js'); ?> "></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/sb_admin/js/demo/datatables-demo.js'); ?> "></script>

    <script src="https://cdn.tiny.cloud/1/5nfw0lz0fvtes1qd1oir7y0me09cify33c00npe2hze5k55v/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>



    <script>
    function togglePassword() {
        var passwordField = document.getElementById("passwordInput");
        var showPasswordButton = document.getElementById("showPasswordButton");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            showPasswordButton.textContent = "Sembunyikan Password";
        } else {
            passwordField.type = "password";
            showPasswordButton.textContent = "Tampilkan Password";
        }
    }


    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }

    tinymce.init({
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Nuralam Paku Bumi',
        mergetags_list: [{
                value: 'Nuralam',
                title: 'Alam'
            },
            {
                value: 'nuralampakubumi01@gmail.com',
                title: 'nuralampakubumi01@gmail.com'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            "See docs to implement AI Assistant"))
    });

    const blogPosts = [{
            title: "Example blog post title 1",
            date: "January 15, 2023"
        },
        {
            title: "This is another blog post title 2",
            date: "January 14, 2023"
        },
        {
            title: "Longer blog post title: This one has multiple lines! 3",
            date: "January 13, 2023"
        },
        {
            title: "Longer blog post title: This one has multiple lines! 4",
            date: "January 12, 2023"
        },
        {
            title: "Longer blog post title: This one has multiple lines! 5",
            date: "January 11, 2023"
        },
        {
            title: "Longer blog post title: This one has multiple lines! 6",
            date: "January 10, 2023"
        }
        // Add more blog post items as needed
    ];

    const postsPerPage = 4;
    let currentPage = 1;

    function displayBlogPosts(page) {
        const startIdx = (page - 1) * postsPerPage;
        const endIdx = startIdx + postsPerPage;

        const postsContainer = document.getElementById('blog-posts').getElementsByTagName('ul')[0];
        postsContainer.innerHTML = '';

        for (let i = startIdx; i < Math.min(blogPosts.length, endIdx); i++) {
            const post = blogPosts[i];
            const postElement = createPostElement(post);
            postsContainer.appendChild(postElement);
        }
    }

    function createPostElement(post) {
        const li = document.createElement('li');
        li.innerHTML = `
            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="col-lg-8">
                    <h6 class="mb-0">${post.title}</h6>
                    <small class="text-body-secondary">${post.date}</small>
                </div>
            </a>
        `;
        return li;
    }

    function updatePagination() {
        const pagination = document.getElementById('pagination');

        if (blogPosts.length > postsPerPage) {
            pagination.style.display = 'block';
        } else {
            pagination.style.display = 'none';
        }

        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');

        if (currentPage === 1) {
            prevBtn.classList.add('disabled');
        } else {
            prevBtn.classList.remove('disabled');
        }

        const maxPage = Math.ceil(blogPosts.length / postsPerPage);
        const pageNumbers = document.getElementById('page-numbers');
        pageNumbers.innerHTML = '';

        for (let i = 1; i <= maxPage; i++) {
            const li = document.createElement('li');
            li.className = 'page-item';

            const a = document.createElement('a');
            a.className = 'page-link';
            a.href = '#';
            a.textContent = i;

            a.addEventListener('click', (event) => {
                event.preventDefault();
                currentPage = i;
                displayBlogPosts(currentPage);
                updatePagination();
            });

            li.appendChild(a);
            pageNumbers.appendChild(li);
        }

        if (currentPage === maxPage) {
            nextBtn.classList.add('disabled');
        } else {
            nextBtn.classList.remove('disabled');
        }
    }

    document.getElementById('prev').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayBlogPosts(currentPage);
            updatePagination();
        }
    });

    document.getElementById('next').addEventListener('click', () => {
        const maxPage = Math.ceil(blogPosts.length / postsPerPage);
        if (currentPage < maxPage) {
            currentPage++;
            displayBlogPosts(currentPage);
            updatePagination();
        }
    });

    // Initially display the first page of blog posts
    displayBlogPosts(currentPage);
    updatePagination();
    </script>

</body>

</html>