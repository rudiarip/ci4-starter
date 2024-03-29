<div class="modal fade" id="modal-add" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form enctype="multipart/form-data" id="inputform">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama">Nama Group</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Group" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="" rows="3" placeholder="Masukkan Keterangan" required></textarea>
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
                    <div class="form-group mb-3">
                        <label for="enama">Nama Group</label>
                        <input type="text" class="form-control" id="enama" name="enama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="eketerangan">Keterangan</label>
                        <textarea class="form-control" name="eketerangan" id="eketerangan" cols="" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"> Close</button>
                    <button type="submit" class="btn btn-primary " id="btn_edit"><i class="fas fa-save"></i> Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        tampildata();

        function tampildata() {
            $('#module').DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "paging": true,
                "serverSide": true,
                "searching": true,
                "language": {
                    "processing": "Loading. Please wait..."
                },
                "ajax": {
                    url: "<?= base_url() ?>module/datatables",
                    type: "POST",
                    data: function(d) {
                        d.search = $('#module_filter input').val(); // Mengambil nilai pencarian dari input DataTable
                    }
                },
            });
        }

        // INPUT
        $('#inputform').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>module/store",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: 'JSON',
                success: function(response) {
                    if (response.status) {

                        toastr.success(response.message);

                        $('#module').DataTable().ajax.reload();
                        $('#modal-add').modal('hide');
                    } else {
                        toastr.error(response.message);
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
        $('#module').on('click', '.bedit', function() {
            var id = $(this).attr('data');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>module/showedit",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.status) {
                        let data = response.data

                        $('#modal-edit').modal('show');
                        $('[name="kodedit"]').val(data.id);
                        $('[name="enama"]').val(data.nama);
                        $('[name="eketerangan"]').val(data.keterangan);
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
            return false;
        });

        //aksi edit
        $('#editform').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>module/store_edit",
                data: new FormData(this),
                processData: false,
                contentType: false,
                dataType: 'JSON',
                beforeSend: function() {
                    $('#btn_edit').html('<i id="spinn" class="fa fa-spinner fa-spin fa-1x fa-fw"></i><span> LOADING...</span>')
                    $('#btn_edit').attr('disabled', '');
                },
                success: function(response) {

                    $('#btn_edit').removeAttr('disabled', '');
                    $("#btn_edit").html('<i class="fas fa-save"></i> Simpan')

                    if (response.status) {
                        toastr.success(response.message);
                        $('#module').DataTable().ajax.reload();
                        $('#modal-edit').modal('hide');
                    } else {
                        toastr.warning(response.message);
                    }
                },

                error: function(response) {
                    $('#btn_edit').removeAttr('disabled', '');
                    $("#btn_edit").html('<i class="fas fa-save"></i> Simpan')

                    Swal.fire({
                        type: 'error',
                        title: 'OOPS!!',
                        text: 'Server Error!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });

        // hapus
        $('#module').on('click', '.bhapus', function() {
            var id = $(this).attr('data');
            swal.fire({
                title: 'Yakin Menghapus data ini?',
                text: "Tekan YES jika anda yakin ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url() ?>module/destroy',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.status) {
                                toastr.success(response.message);

                                $('#module').DataTable().ajax.reload();
                            } else {
                                toastr.warning(response.message);

                            }
                        },
                        error: function(response) {
                            data = JSON.parse(response.responseText);
                            Swal.fire({
                                icon: 'error',
                                text: data.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }

                    });
                }
            });

        });

        $('#modal-add').on('hidden.bs.modal', function() {
            $('#nama').val('')
            $('#keterangan').val('')
        });

        $('#modal-edit').on('hidden.bs.modal', function() {
            $('#kodedit').val('')
            $('#enama').val('')
            $('#eketerangan').val('')
        });

    })
</script>