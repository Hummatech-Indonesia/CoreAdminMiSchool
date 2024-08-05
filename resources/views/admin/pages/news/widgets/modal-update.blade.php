<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importPegawai">Edit Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="" class="mb-2">Judul</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category" class="mb-2 pt-3">Kategori</label>
                        <select class="form-select select2-create-student" name="classroom_id">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="1">Kategori 1</option>
                            <option value="2">Kategori 2</option>
                            <option value="3">Kategori 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 pt-3">Thumbnail</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 pt-3">Isi Berita</label>
                        <textarea class="form-control" id="update-news-content" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                    data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-rounded btn-light-success text-success">Tambah</button>
            </div>
        </div>
    </div>
</div>

