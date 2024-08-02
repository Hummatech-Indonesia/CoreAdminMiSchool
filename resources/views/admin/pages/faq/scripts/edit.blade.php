<script>
    $(document).ready(function() {
        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            var question = $(this).data('question');
            var answer = $(this).data('answer');

            $('#question-edit').val(question);
            $('#answer-edit').val(answer);

            $('#form-edit').attr('action', '/faq/' + id);
            $('#modal-edit').modal('show');
        });
    });
</script>