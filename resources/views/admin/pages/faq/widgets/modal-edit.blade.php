<!-- modal edit -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="editFaq" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="form-edit" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editFaq">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2">Pertanyaan</label>
                            <textarea class="form-control" id="question-edit" rows="3" name="question"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-2 pt-3">Jawaban</label>
                            <textarea class="form-control" id="answer-edit" rows="3" name="answer"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-light-danger text-danger"
                        data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-rounded btn-light-success text-success">Simpan
                        perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
