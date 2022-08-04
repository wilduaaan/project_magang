<?php
defined('BASEPATH') or die('No direct script access allowed!');
?>
<div class="page-header">
    <h1>Kategori</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div style="padding-bottom: 10px;">
            <a href="#tambahkategori" role="button" class="btn btn-primary" data-toggle="modal">Tambah Kategori</a>
        </div>
        <!-- Modal Tambah Kategori -->
        <div id="tambahkategori" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('kategori/create') ?>" method="POST" enctype="multipart/form-data">
                        <input type="reset" class="hidden">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="smaller lighter blue no-margin">Tambah Kategori</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama Kategori (english)</label>
                                    <input type="text" class="form-control" name="nama_kategori_en" required>
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

        <table class="table table-striped table-bordered table-hover" id="datatablesPengalaman">
            <thead>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Nama Kategori (english)</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kategori as $k) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $k['nama_kategori'] ?></td>
                        <td><?= $k['nama_kategori_en'] ?></td>
                        <td>
                            <a href="#editkategori" type="button" class="btn btn-primary btn-xs" data-toggle="modal" id="btn-edit-kategori" data-id_kategori="<?= $k['id_kategori']; ?>" data-nama_kategori="<?= $k['nama_kategori'] ?>" data-nama_kategori_en="<?= $k['nama_kategori_en'] ?>"><i class="fa fa-edit"> Edit</i></a>
                            <a href="<?= base_url('kategori/delete/'); ?><?= $k['id_kategori']; ?>" type="button" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="auto" title="Hapus Surat" onclick="return confirm('Yakin ingin menghapus data');"><i class="far fa-trash-alt"> Hapus</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div id="editkategori" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="formAddPengalaman" action="<?= base_url('kategori/edit') ?>" method="POST" enctype="multipart/form-data">
                <input type="reset" class="hidden">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="smaller lighter blue no-margin">Edit Kategori</h3>
                </div>
                <input type="hidden" name="id_kategori" id="edit_id_kategori">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="edit_nama_kategori" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nama Kategori (english)</label>
                            <input type="text" class="form-control" name="nama_kategori_en" id="edit_nama_kategori_en" required>
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
    $(document).on('click', '#btn-edit-kategori', function() {
        let id_kategori = $(this).data('id_kategori');
        let nama_kategori = $(this).data('nama_kategori');
        let nama_kategori_en = $(this).data('nama_kategori_en');

        $('#edit_id_kategori').val(id_kategori);
        $('#edit_nama_kategori').val(nama_kategori);
        $('#edit_nama_kategori_en').val(nama_kategori_en);
    })
</script>