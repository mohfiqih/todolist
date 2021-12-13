<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3"><?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?>
                                Tambah List</h4>

                            <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                method="POST">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_nama" placeholder="Nama Pengguna"
                                        autocomplete="off" required>
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_password"
                                        placeholder="Password Pengguna" autocomplete="off" required>
                                    <label>Pekerjaan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time" required>
                                    <label>Jam Mulai</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time" required>
                                    <label>Jam Selesai</label>
                                </div>

                                <!-- <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_namalengkap"
                                    autocomplete="off" required>
                                    <label>Jam Selesai</label>
                                </div> -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <button type="button" class="btn btn-danger">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3"></h4>

                            <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                method="POST">

                                <div class="form-floating mb-3">
                                    <select class="form-select" name="user_level"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Level</option>
                                        <option value="1"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 1 ? "selected" : ""; ?>>
                                            High</option>
                                        <option value="2"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 2 ? "selected" : ""; ?>>
                                            Medium</option>
                                        <option value="3"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 3 ? "selected" : ""; ?>>
                                            Low</option>
                                    </select>
                                    <label for="example-select-floating">Level</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>