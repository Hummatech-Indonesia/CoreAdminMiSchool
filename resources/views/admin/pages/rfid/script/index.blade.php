<script>
    $(document).ready(function() {

        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/rfid/' + id);
            $('#modal-delete').modal('show');
        });

        $(document).ready(function() {
            $('.rfid-input').focus();
        });

        function resetActiveBtn() {
            $('#btn-all').removeClass('active');
            $('#btn-used').removeClass('active');
            $('#btn-unused').removeClass('active');
        }

        function resetActiveTab() {
            $('#digunakan').removeClass('active');
            $('#belum-digunakan').removeClass('active');
            $('#all').removeClass('active');
        }

        function changeTab() {
            var hash = window.location.hash;
            resetActiveBtn();
            resetActiveTab();
            switch (hash) {
                case '#all':
                    $('#btn-all').addClass('active');
                    $('#all').addClass('active');
                    break;
                case '#digunakan':
                    $('#btn-used').addClass('active');
                    $('#digunakan').addClass('active');
                    break;
                case '#belum-digunakan':
                    $('#btn-unused').addClass('active');
                    $('#belum-digunakan').addClass('active');
                    break;
                default:
                    $('#btn-all').addClass('active');
                    $('#all').addClass('active');
                    break;
            }
        }

        $(window).on('hashchange', function() {
            changeTab();
        });

        changeTab();
    })

</script>