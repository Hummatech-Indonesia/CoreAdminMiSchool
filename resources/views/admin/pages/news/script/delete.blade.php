<script>
    $(document).ready(function() {
        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            
            $('#form-delete').attr('action', '{{ route('news.destroy', '') }}/' + id);
            $('#modal-delete').modal('show');
        });
    });
</script>