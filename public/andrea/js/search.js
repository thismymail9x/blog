$(document).ready(function () {
    $('#search-user').on('change', function () {
        $.ajax({
            url: "http://localhost:8000/admin/search",
            dataType: "json",
            success: function (response) {
                if (response.status == 'success'){
                    var result = '';
                    $.each( response.data, function( key, value ) {
                        result += '<tr>\n' +
                            '                            <td>'+value.id+'</td>\n' +
                            '                            <td>'+value.title+'</td>\n' +
                            '                            <td><p>'+value.description+'</p></td>\n' +
                            '                            <td>\n' +
                            '                                <img src="" alt="" style="width: 100px; height: 100px">\n' +
                            '                            </td>\n' +
                            '                            <td></td>\n' +
                            '                            <td></td>\n' +
                            '                            <td>\n' +
                            '                                <a href="" class="btn btn-primary">Edit</a>\n' +
                            '                                <a href="" onclick="return confirm(\'Warning, it will be delete\')" class="btn btn-danger">Delete</a>\n' +
                            '                            </td>\n' +
                            '                        </tr>'
                    });
                    $('#data-users').html(result);
                }

            }
        });
    });
});