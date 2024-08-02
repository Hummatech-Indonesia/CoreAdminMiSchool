<script>
    $(document).ready(function() {
        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            
            $('#form-delete').attr('action', '/faq/' + id);
            $('#modal-delete').modal('show');
        });
    });
</script>