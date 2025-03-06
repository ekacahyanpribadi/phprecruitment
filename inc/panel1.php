<div class="tab-pane fade in show active" id="tahap1" role="tabpanel">
    <?php
    extract($_POST);
    print_r($_POST);
    ?>

    <form id="fm" method="post" novalidate enctype="multipart/form-data">
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
                        <font size="1">Format ( *.png)</font>

                    </td>
                    <td width="50%" rowspan="3" align="center">
                        <p><u>Photo preview</u></p><br>
                        <img id="previewFilePhoto" src="" height="180px" />
                        <p>
                            <font>Catatan : Kolom dengan atribut asterix (<b>*</b>) wajib di isi.
                        </p>
                        </p>
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
            <div class="col-6">
                <div class="md-form md-outline">
                    <input placeholder="Nama Lengkap" type="text" id="namaLengkap" name="namaLengkap"
                        class="form-control">
                    <label for="namaLengkap" class="active">* Nama Lengkap</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form md-outline">
                    <input placeholder="Nama Panggilan" type="text" id="namaPanggilan" name="namaPanggilan"
                        class="form-control">
                    <label for="namaPanggilan" class="active">* Nama Panggilan</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-3">
                &nbsp;
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-6">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="jenisKelamin"
                    name="jenisKelamin">
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">Wanita</option>
                    <option value="1">Pria</option>
                </select>
                <label class="mdb-main-label">* Jenis Kelamin</label>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form md-outline">
                    <input placeholder="Tempat Lahir" type="text" id="tempatLahir" name="tempatLahir"
                        class="form-control">
                    <label for="tempatLahir" class="active">* Tempat Lahir</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form">
                    <input placeholder="Tanggal Lahir" type="text" id="tanggalLahir" name="tanggalLahir"
                        class="form-control datepicker">
                    <label for="tanggalLahir" class="active">* Tanggal Lahir</label>
                </div>

            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-6">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="statusPerkawinan"
                    name="statusPerkawinan">
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">Lajang</option>
                    <option value="1">Nikah</option>
                    <option value="2">Duda/Janda</option>
                </select>
                <label class="mdb-main-label">* Status Perkawinan</label>
            </div>
            <!-- col -->
            <div class="col-6">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="agama" name="agama">
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">Islam</option>
                    <option value="1">Kristen Katolik</option>
                    <option value="2">Kristen Protestan</option>
                    <option value="3">Hindu</option>
                    <option value="4">Buddha</option>
                    <option value="5">Konghocu</option>
                    <option value="6">Lainnya</option>
                </select>
                <label class="mdb-main-label">* Agama</label>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="tipeIDentitas"
                    name="tipeIDentitas">
                    <option value="" disabled selected>Pilih</option>
                    <option value="0">KTP</option>
                    <option value="1">Passport</option>
                </select>
                <label class="mdb-main-label">* Tipe Identitas</label>
            </div>
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="No Identitas" type="text" id="noIdentitas" name="noIdentitas"
                        class="form-control">
                    <label for="noIdentitas" class="active">No Identitas</label>
                </div>
            </div>
            <!-- col -->
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Dikeluarkan di" type="text" id="dikeluarkanDi" name="dikeluarkanDi"
                        class="form-control">
                    <label for="dikeluarkanDi" class="active">Dikeluarkan di</label>
                </div>
            </div>
            <!-- col -->
            <div class="col">
                <div class="md-form">
                    <input placeholder="Tanggal Terbit" type="text" id="tanggalTerbit" name="tanggalTerbit"
                        class="form-control datepicker">
                    <label for="tanggalTerbit" class="active">* Tanggal Terbit</label>
                </div>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-6">
                <div class="mb-6">
                    <label for="fileKtp" class="form-label">* Upload KTP</label>
                    <input class="form-control" type="file" name="fileKtp" id="fileKtp" onchange="previewKtp()">
                </div>
                <font size="1">Format ( *.png)</font>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-6">
            <div class="md-form md-outline">
                    <input placeholder="No. NPWP" type="text" id="noNpwp" name="noNpwp"
                        class="form-control">
                    <label for="noNpwp" class="active">No. NPWP</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-6">
                <div class="mb-6">
                    <label for="fileNpwp" class="form-label">* Upload NPWP</label>
                    <input class="form-control" type="file" name="fileNpwp" id="fileNpwp" onchange="previewKtp()">
                </div>
                <font size="1">Format ( *.png)</font>
            </div>
        </div>
        <!-- row -->

        <hr>
        <!-- row sample -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">
                        <font color="red">*</font>Sampel
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
            <!-- col -->
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
            <!-- col -->
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-6">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-3">
                <select class="mdb-select md-form">
                    <option value="" disabled selected>
                        * Jenis Kelamin
                    </option>
                    <option value="0">Wanita</option>
                    <option value="1">Pria</option>
                </select>
                <button class="btn-save btn btn-primary btn-sm">Save</button>
            </div>
            <!-- col -->
            <div class="col-3">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
            <!-- col -->
            <div class="col-6">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="md-form md-outline">
                    <input placeholder="Sampel" type="text" id="sampel" name="sampel" class="form-control">
                    <label for="sampel" class="active">Sampel</label>
                </div>
            </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <button type="submit" id="btTahap1" name="btTahap1" value="1" class="btn btn-primary">Save</button>
            </div>
        </div>
        <!-- row -->





    </form>
</div>