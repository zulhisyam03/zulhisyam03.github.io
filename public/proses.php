<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color: white;font-size:20px;font-family:calibri;">
<table align="center" width="430px">
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><?= $_POST['nama'];?></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><?= $_POST['nim'];?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?= $_POST['jurusan'];?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $_POST['jk'];?></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td><?= $_POST['hp'];?></td>
            </tr>
        </table>
</body>
</html>