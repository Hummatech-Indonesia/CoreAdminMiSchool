<!-- modal tambah -->
<div class="modal fade" id="modal-import" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('faq.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="importPegawai">Tambah FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="" class="mb-2">Pertanyaan</label>
                            <textarea class="form-control" rows="3" name="question"></textarea>
                            @error('question')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-2 pt-3">Jawaban</label>
                            <textarea class="form-control" rows="3" name="answer"></textarea>
                            @error('answer')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
