<script>
    $(document).ready(function() {
        $('.btn-detail').click(function() {
            var question = $(this).data('question');
            var answer = $(this).data('answer');

            $('#question-detail').val(question);
            $('#answer-detail').val(answer);

            $('#modal-detail').modal('show');
        });
    });
</script>