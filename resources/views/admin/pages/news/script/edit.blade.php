<script>
    $(document).ready(function() {
        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var news_category_id = $(this).data('news_category_id');
            var image = $(this).data('image');
            var description = $(this).data('description');

            $('#title-edit').val(title);
            $('#news-category-edit').val(news_category_id);
            $('#image-edit').attr('src', image);

            $('#form-edit').attr('action', '{{ route('newses.update', '') }}/' + id);
            $('#modal-edit').modal('show');
        });
    });
</script>
