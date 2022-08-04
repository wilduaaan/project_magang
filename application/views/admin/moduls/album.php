<?php
defined('BASEPATH') or die('No direct script access allowed!');
?>
<div class="page-header">
    <h1>Album</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div style="padding-bottom: 10px;">
            <a href="#tambahalbum" role="button" class="btn btn-primary" data-toggle="modal">Tambah Album</a>
        </div>
        <!-- Modal Tambah Album -->
        <div id="tambahalbum" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('album/create') ?>" method="POST" enctype="multipart/form-data">
                        <input type="reset" class="hidden">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="smaller lighter blue no-margin">Tambah Album</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Album</label>
                                    <input type="text" class="form-control" name="nama_album" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Album (english)</label>
                                    <input type="text" class="form-control" name="nama_album_en" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover" id="datatablesProdukKetersediaan">
            <thead>
                <th>No</th>
                <th>Nama Album</th>
                <th>Nama Album (english)</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($album as $a) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama_album'] ?></td>
                        <td><?= $a['nama_album_en'] ?></td>
                        <td>
                            <a href="#editalbum" type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="btn-edit-album" data-id_album="<?= $a['id_album']; ?>" data-nama_album="<?= $a['nama_album'] ?>" data-nama_album_en="<?= $a['nama_album_en'] ?>"><i class="fa fa-edit"> Edit</i></a>
                            <a href="<?= base_url('album/delete/'); ?><?= $a['id_album']; ?>" type="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="auto" title="Hapus Surat" onclick="return confirm('Yakin ingin menghapus data');"><i class="far fa-trash-alt"> Hapus</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal Edit Album -->
<div id="editalbum" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('album/edit') ?>" method="POST" enctype="multipart/form-data">
                <input type="reset" class="hidden">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="smaller lighter blue no-margin">Edit Album</h3>
                </div>
                <input type="hidden" name="id_album" id="edit_id_album">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nama Album</label>
                            <input type="text" class="form-control" name="nama_album" id="edit_nama_album" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nama Album (english)</label>
                            <input type="text" class="form-control" name="nama_album_en" id="edit_nama_album_en" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm pull-right" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '#btn-edit-album', function() {
        let id_album = $(this).data('id_album');
        let nama_album = $(this).data('nama_album');
        let nama_album_en = $(this).data('nama_album_en');

        $('#edit_id_album').val(id_album);
        $("#edit_nama_album").val(nama_album);
        $('#edit_nama_album_en').val(nama_album_en);
    });
</script>