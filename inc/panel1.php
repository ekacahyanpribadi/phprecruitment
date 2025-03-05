<div class="tab-pane fade in show active" id="tahap1" role="tabpanel">


    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mb-4">

            <p align="left">
            <h3>Informasi Personal</h3>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-4">

            <p align="right">

            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-4">

            <p align="right">
            </p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <hr>
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td width="50%">
                    <?php echo $rs['job_kode']; ?>
                    <div class="mb-3">
                        <label for="filePhoto" class="form-label">Photo</label>
                        <input class="form-control" type="file" name="filePhoto" id="filePhoto"
                            onchange="previewPhoto()">
                    </div>

                </td>
                <td width="50%" rowspan="3" align="center">
                    <p><u>Photo preview</u></p><br>
                    <img id="previewFilePhoto" src="" height="180px" />
                </td>
            </tr>
            <tr>
                <td>
                    <div class="md-form md-outline">
                        <input placeholder="Kode Posisi" type="text" id="kode_posisi" name="kode_posisi"
                            class="form-control" value="<?php echo $rs['job_kode']; ?>" readonly>
                        <label for="kode_posisi" class="active">Kode Posisi</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="md-form md-outline">
                        <input placeholder="Nama Posisi" type="text" id="nama_posisi" name="nama_posisi"
                            class="form-control" value="<?php echo $rs['job_title']; ?>" readonly>
                        <label for="nama_posisi" class="active">Nama Posisi</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
    </div>
    <!-- row -->

    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-6">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col-3">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col-3">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
    </div>
    <!-- row -->

    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-3">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col-3">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
        <!-- col -->
        <div class="col-6">
            <div class="md-form md-outline">
                <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap" class="form-control">
                <label for="namaLengkap" class="active">Nama Lengkap</label>
            </div>
        </div>
    </div>
    <!-- row -->

    




</div>