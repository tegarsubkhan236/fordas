<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span class="h5 list-group-item-heading h5"><center>Detail Donasi</center></span>
    <form class="mt-3">
        <table border="1px">
            <tbody>
                <tr>
                    <th>NAMA DONATUR</th>
                    <th>JENIS KELAMIN</th>
                    <th>NOMER HP</th>
                    <th>ALAMAT</th>
                </tr>
                <tr>
                    <td>{{$data->detail_donatur->name}}</td>
                    <td>{{$data->detail_donatur->gender = "L" ? "Laki-Laki" : "Perempuan"}}</td>
                    <td>{{$data->detail_donatur->no_hp}}</td>
                    <td>{{$data->detail_donatur->alamat}}</td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
