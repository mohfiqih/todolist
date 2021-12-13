<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="d-flex flex-row align-items-center">
                            <!-- <nav class="breadcrumbs">
                                <a href="#home" class="breadcrumbs__item"><i class="fas fa-home"></i></a>
                                <a href="#shop" class="breadcrumbs__item">Shop</a>
                                <a href="#cart" class="breadcrumbs__item">Cart</a>
                                <a href="#checkout" class="breadcrumbs__item is-active">Checkout</a>
                            </nav> -->
                            <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                                    class="fas fa-calendar-alt fa-lg me-3"
                                    style="float: right;padding-left: 25px;"></i></a>
                            <div class="search-box">
                                <button class="btn-search"><i class="fas fa-search"></i></button>
                                <input type="text" class="input-search" placeholder="Type to Search...">
                            </div>
                            <div class=" align-right" style="float: right;">
                                <a href="<?php echo base_url('Todo/tambah_list'); ?>">
                                    <button type="button" class="btn btn-primary" style="float: right;"><i
                                            class="fas fa-plus"></i>
                                        Add List</button>
                                </a>
                            </div>
                        </div>
                        <!-- <hr class="my-4"> -->
                        <!-- Tabel -->
                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                            style="position: relative; height: 400px">

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jam Mulai</th>
                                        <th scope="col">Jam Selesai</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Progres</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="fw-normal">
                                        <th>
                                            1
                                        </th>
                                        <th>
                                            Fiqih
                                        </th>
                                        <td class="align-middle">
                                            <span>Call Sam For payments</span>
                                        </td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">9.00 WIB</td>
                                        <td class="align-middle">17.00 WIB</td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-success">High priority</span></h6>
                                        </td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">
                                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                                    class="fas fa-check text-success me-3"></i></a>
                                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                    class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="fw-normal">
                                        <th>
                                            2
                                        </th>
                                        <th>
                                            Yuda
                                        </th>
                                        <td class="align-middle">Make payment to Bluedart</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">9.00 WIB</td>
                                        <td class="align-middle">17.00 WIB</td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge bg-danger">Low priority</span></h6>
                                        </td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">
                                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                                    class="fas fa-check text-success me-3"></i></a>
                                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                    class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Tabel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>