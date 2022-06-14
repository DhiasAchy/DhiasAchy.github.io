// cek connection
function cek_connection() {
    // alert('bbisa');

    $.post("index.php", {
        segment: cek_connection
    }, function(data,status){
        if (status=='success') {
            alert(data);
        }
    });
}