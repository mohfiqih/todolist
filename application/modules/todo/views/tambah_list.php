<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3"><?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?>
                                    List</h4>

                                <div class="form-floating mb-3">
                                    <select class="form-select" name="user_nama"
                                        aria-label="Floating label select example" required>
                                        <option value="">Nama</option>
                                        <?php 
                                                foreach($data_user as $row)
                                                { 
                                                echo '<option value="'.$row->user_nama.'">'.$row->user_nama.'</option>';
                                                }
                                                ?>
                                    </select>
                                    <label for="example-select-floating">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="pekerjaan"
                                        placeholder="Password Pengguna" autocomplete="off" required>
                                    <label>Pekerjaan</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="basic-datepicker" class="form-control flatpickr-input active"
                                        name="tanggal" placeholder="Tanggal">
                                    <label class="form-label">Tanggal</label>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3"></h4>

                                <!-- <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                method="POST"> -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control clockpicker" readonly="readonly"
                                        name="jam_mulai" placeholder="Jam Mulai" autocomplete="off">
                                    <label>Jam Mulai</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control clockpicker" name="jam_selesai"
                                        readonly="readonly" placeholder="Jam Selesai" autocomplete="off">
                                    <label>Jam Selesai</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="user_level"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Level</option>
                                        <option value="1"
                                            <?php if (uri(1) == "tambah") echo $edit->level == 1 ? "selected" : ""; ?>>
                                            High</option>
                                        <option value="2"
                                            <?php if (uri(1) == "tambah") echo $edit->level == 2 ? "selected" : ""; ?>>
                                            Medium</option>
                                        <option value="3"
                                            <?php if (uri(1) == "tambah") echo $edit->level == 3 ? "selected" : ""; ?>>
                                            Low</option>
                                    </select>
                                    <label for="example-select-floating">Level</label>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Progres</h4>
                                            <!-- <p class="sub-header">
                                                    Example of square skin
                                                </p> -->
                                            <input type="text" id="range_01" name="progres">
                                        </div>
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>