<script>
    $(document).ready(function() {
        $('.btn-detail').click(function() {
            var question = $(this).data('question');
            var answer = $(this).data('answer');

            $('#question-detail').text(question);
            $('#answer-detail').text(answer);

            $('#modal-detail').modal('show');
        });
    });
</script>