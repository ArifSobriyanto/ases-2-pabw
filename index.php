<!DOCTYPE html>
<html>
<head>
    <title>notaris dokumen</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="tabel_notaris"></div>

    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'notaris.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Proses dan tampilkan data dalam bentuk tabel
                var html = '<table border="1">';
                html += '<tr><th>iddok</th><th>nama_user</th><th>nama_dok</th><th>keterangan</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                    html += '<td>' + data[i].iddok + '</td>';
                    html += '<td>' + data[i].nama_user + '</td>';
                    html += '<td>' + data[i].nama_dok +'</td>';
                    html += '<td>' + data[i].keterangan + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#tabel_notaris').html(html);
            }
        });
    });
    </script>
</body>
</html>
