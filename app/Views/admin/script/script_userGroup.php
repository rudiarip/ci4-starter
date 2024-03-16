<div class="modal fade" id="modal-add" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form enctype="multipart/form-data" id="inputform">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah <?= $subjudul ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="level">Level</label>
                            <select id="level" name="level" class="form-control" required>
                                <option value="" disabled selected>Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="dokter">Dokter</option>
                                <option value="pasien">Pasien</option>
                            </select>
                        </div>
                        <div id="opt-dokter" class="form-group mb-3" style="display: none;">
                            <label for="select_dokter">Pilih Dokter</label>
                            <select id="select_dokter" name="select_dokter" class="form-control select-dokter">
                            </select>
                        </div>
                        <div id="opt-pasien" class="form-group mb-3" style="display: none;">
                            <label for="select_pasien">Pilih Pasien</label>
                            <select id="select_pasien" name="select_pasien" class="form-control select-pasien">
                            </select>
                        </div>
                        <div id="opt-nama" class="form-group mb-3" style="display: none;">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password2">Ulangi Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="1" selected>Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn-simpan"><i class="fas fa-save"></i> Simpan</button>
                </div>

        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form enctype="multipart/form-data" id="editform">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Edit <?= $subjudul ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="kodedit" name="kodedit">
                    <div class="row">
                        <!-- <div class="form-group mb-3">
                            <label for="elevel">Level</label>
                            <select id="elevel" name="elevel" class="form-control" required>
                                <option value="" disabled selected>Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="dokter">Dokter</option>
                                <option value="pasien">Pasien</option>
                            </select>
                        </div>
                        <div id="opt-dokter" class="form-group mb-3" style="display: none;">
                            <label for="eselect_dokter">Pilih Dokter</label>
                            <select id="eselect_dokter" name="eselect_dokter" class="form-control select-dokter">
                            </select>
                        </div>
                        <div id="opt-pasien" class="form-group mb-3" style="display: none;">
                            <label for="eselect_pasien">Pilih Pasien</label>
                            <select id="eselect_pasien" name="eselect_pasien" class="form-control select-pasien">
                            </select>
                        </div> -->
                        <div class="form-group mb-3">
                            <label for="enama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="enama" name="enama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="eemail">Email</label>
                            <input type="email" class="form-control" id="eemail" name="eemail" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="epassword1">Password</label>
                            <input type="password" class="form-control" id="epassword1" name="epassword1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="epassword2">Ulangi Password</label>
                            <input type="password" class="form-control" id="epassword2" name="epassword2">
                        </div>
                        <div class="form-group mb-3">
                            <label for="estatus" class="form-label">Status</label>
                            <select name="estatus" id="estatus" class="form-control" required>
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary " id="btn_edit"><i class="fas fa-save"></i> Simpan</button>
                </div>

        </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {

        $(".select-dokter").select2({
            theme: 'bootstrap4',
            placeholder: "Pilih",
            dropdownParent: $("#modal-add"),
            allowClear: true
        });

        $(".select-pasien").select2({
            theme: 'bootstrap4',
            placeholder: "Pilih",
            dropdownParent: $("#modal-add"),
            allowClear: true
        });

        // fetchDokter();
        // fetchPasien();
        // tampildata();

        $('#level').change(function(e) {
            e.preventDefault();
            val = $(this).val()

            if (val == 'dokter') {
                $('#opt-dokter').fadeIn()
                $('#opt-pasien').fadeOut()
                $('#opt-nama').fadeOut()
            } else if (val == 'pasien') {
                $('#opt-dokter').fadeOut()
                $('#opt-nama').fadeOut()
                $('#opt-pasien').fadeIn()
            } else {
                $('#opt-nama').fadeIn()
                $('#opt-dokter').fadeOut()
                $('#opt-pasien').fadeOut()
            }

        });

        function tampildata() {
            $('#user').DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "paging": true,
                "serverSide": true, // Enable server-side processing
                "searching": true, // Aktifkan fitur pencarian
                "language": {
                    "processing": "Loading. Please wait..."
                },
                "ajax": {
                    url: "<?= base_url() ?>usermanajemen/getdata",
                    type: "POST",
                    data: function(d) {
                        d.search = $('#user_filter input').val(); // Mengambil nilai pencarian dari input DataTable
                    }
                },
            });
        }

        // INPUT
        $('#inputform').submit(function(e) {
            e.preventDefault();

            var pass1 = $('#password1').val()
            var pass2 = $('#password2').val()

            if (pass1 != pass2) {
                toastr.error('Password 1 dan 2 Tidak Cocok');

                return false;
            }

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>usermanajemen/simpan",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(response) {
                    if (response == "ada") {

                        toastr.error('Email sudah pernah terdaftar');
                    } else if (response == "success") {

                        $('#modal-add').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        toastr.success('Data berhasil disimpan');
                        $('#user').DataTable().ajax.reload();

                    } else {
                        toastr.warning('Data gagal disimpan');
                    }
                },

                error: function(response) {
                    Swal.fire({
                        type: 'error',
                        title: 'OOPS!!',
                        text: 'Server Error!'
                    });
                }
            });
        });

        //editview
        $('#user').on('click', '.bedit', function() {
            var id = $(this).attr('data');
            $.ajax({
                type: "GET",
                url: "<?php echo base_url() ?>usermanajemen/showedit",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $.each(data, function(judul) {
                        $('#modal-edit').modal('show');
                        $('[name="kodedit"]').val(data.kode);
                        $('[name="enama"]').val(data.nama);
                        $('[name="eemail"]').val(data.email);
                        $('[name="estatus"]').val(data.status);
                    });
                }
            });
            return false;
        });

        $('#editform').submit(function(e) {
            e.preventDefault();

            var epass1 = $('#epassword1').val()
            var epass2 = $('#epassword2').val()

            if (epass1 != epass2) {
                toastr.error('Password 1 dan 2 Tidak Cocok');

                return false;
            }

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>usermanajemen/simpan_edit",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                beforeSend: function() {
                    $('#btn_edit').html('<i id="spinn" class="fa fa-spinner fa-spin fa-1x fa-fw"></i><span> LOADING...</span>')
                    $('#btn_edit').attr('disabled', '');
                },
                success: function(response) {

                    $('#btn_edit').removeAttr('disabled', '');
                    $("#btn_edit").html('<i class="fas fa-save"></i> Simpan')

                    if (response == "ada") {

                        toastr.error('Email sudah pernah terdaftar');
                    } else if (response == "success") {

                        $('#modal-edit').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        toastr.success('Data berhasil diedit');
                        $('#user').DataTable().ajax.reload();

                    } else {
                        toastr.warning('Data gagal diedit');
                    }
                },

                error: function(response) {
                    $('#btn_edit').removeAttr('disabled', '');
                    $("#btn_edit").html('<i class="fas fa-save"></i> Simpan')

                    Swal.fire({
                        type: 'error',
                        title: 'OOPS!!',
                        text: 'Server Error!'
                    });
                }
            });
        });

        // modal hapus

        $('#user').on('click', '.bhapus', function() {
            var id = $(this).attr('data');
            swal.fire({
                title: 'Yakin Menghapus data User ini?',
                text: "Tekan ya jika anda yakin ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url() ?>usermanajemen/hapus',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id
                        },

                        success: function(jqXHR, textStatus) {
                            if (respon == "success") {
                                toastr.success('Data berhasil dihapus');

                                $('#user').DataTable().ajax.reload();
                            } else {
                                toastr.warning('Data gagal dihapus');

                            }
                        },
                        complete: function() {
                            swal.hideLoading();
                        },

                        error: function(a, textStatus) {
                            if (a.responseText == 'success') {
                                $('#user').DataTable().ajax.reload();
                                toastr.success('Data berhasil dihapus');

                            } else if (a.responseText == 'ada') {

                                toastr.warning('Data gagal dihapus');

                            }
                        }

                    });
                }
            });

        });

        $('#modal-add').on('hidden.bs.modal', function() {
            $('#opt-nama').hide()
            $('#opt-dokter').hide()
            $('#opt-pasien').hide()

            $('#nama').val('')
            $('#select_dokter').val('')
            $('#select_pasien').val('')
            $('#level').val('')
            $('#email').val('')
            $('#password1').val('')
            $('#password2').val('')
            $('#status').val('1')
        });

        $('#modal-edit').on('hidden.bs.modal', function() {
            $('#opt-nama').hide()
            $('#opt-dokter').hide()
            $('#opt-pasien').hide()

            $('#kodedit').val('')
            $('#enama').val('')
            $('#eselect_dokter').val('')
            $('#eselect_pasien').val('')
            $('#elevel').val('')
            $('#eemail').val('')
            $('#epassword1').val('')
            $('#epassword2').val('')
            $('#estatus').val('1')
        });

    })

    fetchDokter = async () => {
        let url = "<?= base_url('usermanajemen/list_dokter_js') ?>";

        let response = await fetch(url, {
            method: 'GET',
        });

        let result = await response.json();

        if (!result.status) {
            return;
        }

        let dokters = result.data;

        let dokt = '<option value="" selected>Pilih</option>';
        dokters.forEach(res => {
            dokt += `<option value="${res.id}">${res.nama}  -  ${res.spesialis}</option>`;
        });

        $(".select-dokter").html(dokt);
        return;
    }

    fetchPasien = async () => {
        let url = "<?= base_url('usermanajemen/list_pasien_js') ?>";

        let response = await fetch(url, {
            method: 'GET',
        });

        let result = await response.json();

        if (!result.status) {
            return;
        }

        let pasiens = result.data;

        let passi = '<option value="" selected>Pilih</option>';
        pasiens.forEach(res => {
            passi += `<option value="${res.id}">${res.nama}  -  ${res.tgl_lahir}  -  ${res.no_rm}</option>`;
        });

        $(".select-pasien").html(passi);
        return;
    }
</script>