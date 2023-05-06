$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) 
{
    if (confirm('Xóa mà không thể khôi phục. Bạn có Chắc ?')) {
        $.ajax( {
            type : 'DELETE',
            datatype: 'json',
            data : {id},
            url: url,
            success: function (result) {
                if (result.error === false) {
                    alert(result.message);
                    location.reload();

                } else {
                    alert('Xóa lỗi vui lòng thử lại');
                }
            }
        })
    }
}