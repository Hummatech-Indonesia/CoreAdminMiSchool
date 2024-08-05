<div class="modal fade" id="modal-import" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importPegawai">Tambah Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="" class="mb-2">Judul</label>
                        <input type="text" placeholder="Masukan judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 pt-3">Thumbnail</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 pt-3">Kategori</label>
                        <input type="text" placeholder="Masukan kategori" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="mb-2 pt-3">Isi Berita</label>
                        <textarea class="form-control" id="news-content" placeholder="Masukan isi berita" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-light"
                    data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>