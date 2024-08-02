<script>
    $(document).ready(function() {
        var quote = $('<blockquote class="quote">hello<footer>world</footer></blockquote>')[0];

        $('#content').summernote({
            blockquoteBreakingLevel: 2,
            height: 520,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['link', ['link']],
                ['picture', ['picture']],
                ['video', ['video']],
                ['codeview', ['codeview']],
                ['help', ['help']],
                ['insert', ['ul', 'blockquote']] // Include Blockquote button in 'insert' dropdown
            ],

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact',
                'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana'
            ],
            fontNamesIgnoreCheck: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica',
                'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana'
            ]

        });
    });
</script>