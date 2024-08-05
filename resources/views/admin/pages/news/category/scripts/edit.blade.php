<script>
    $(document).ready(function() {
        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $('#name-edit').val(name);

            $('#form-update-category').attr('action', '/news-category/' + id);
            $('#modal-update-category').modal('show');
        });
    });
</script>