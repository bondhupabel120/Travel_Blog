<script>
    function getVersion() {
        var id = document.getElementById('version_id').value;
        $.ajax({
            url: '{{ url('admin/get-version') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                $('.sector_id').html(data)
            }
        })
    }
    function getSector() {
        var id = document.getElementById('sector_id').value;
        $.ajax({
            url: '{{ url('admin/get-sector') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                $('.class_id').html(data)
            }
        })
    }
</script>