$(".select2-multiple").select2({
    placeholder: "Select model",
    allowClear: true
});
$(".select2-single").select2();

function sendFile(file, id, link) {
    var data = new FormData();
    data.append("file", file);
    data.append("_token", $('meta[name="csrf-token"]').attr('content'));
    $.ajax({
        data: data,
        type: "POST",
        url: link,
        cache: false,
        contentType: false,
        processData: false,
        success: function (path) {
            var image = $('<img>').attr('src', path);
            $('#' + id).summernote("insertNode", image[0]);
        },
        error: function (data) {
            console.log(data);
        }
    });
}