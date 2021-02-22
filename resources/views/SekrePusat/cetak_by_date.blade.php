<!DOCTYPE html>
 <html>
 <head>
  <title>Laporan by Date</title>
    <style>
        a { text-decoration: none; color: #0903E8; font-family: verdana; }
        a:hover { color: #FA3C3C; }
    </style>
 </head>

 <body>
     @foreach ($data as $item)
        <h2>{{$loop->index+1}}. {{$item->judul}}</h2><br>
        <h5>Kota : {{$item->Wilayah_da->wilayah->nama}}</h5>
        <hr>
        <form action="" method="get">
            <table width="100%" border="0">
                <tr>
                    <td width="200">Perihal</td>
                    <td><input type="text" value="{{$item->proposal_kategori->nama}}"></td>
                </tr>
                <tr>
                    <td width="200">Waktu dan Tempat Pelaksanaan</td>
                    <td>
                        <textarea cols="1" rows="1">{{$item->tempat}}-{{ Carbon\Carbon::parse($item->tgl)->format('d-m-Y') }}</textarea>
                    </td>
                </tr>
                <tr>
                    <td width="200">Visibility</td>
                    @if ($item->visibility === 0)
                    <td><input type="text" value="Tidak Di Publikasi"></td>
                    @else
                    <td><input type="text" value="Di Publikasi"></td>
                    @endif
                </tr>
                <tr>
                    <td width="200">Donasi</td>
                    @if ($item->donate === 0)
                    <td><input type="text" value="Tidak Perlu Donasi"></td>
                    @else
                    <td><input type="text" value="Perlu Donasi"></td>
                    @endif
                </tr>
                <tr>
                    <td width="200">Jumlah Donatur</td>
                    <td><input type="text" value={{ $item->donasis->count()}}></td>
                </tr>
                <tr>
                    <td width="200">Total Donasi</td>
                    <td><input type="text" value={{ number_format($item->donasis->sum('total_donasi')) }}></td>
                </tr>
            </table>
        </form>
        {{-- <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;">
            <tr>
                <td rowspan="6" width="120" style="border-right:1px solid #000;"> </td>
                <td width="150" valign="top" > No </td>
                <td valign="top" > : 1 </td>
            </tr>
            <tr>
                <td valign="top" > Telah Diterima Oleh </td>
                <td valign="top" > : {{$data->proposal->wilayah_da->nama}} </td>
                </tr>
            <tr>
                <td valign="top" > Uang Sejumlah </td>
                <td valign="top" > : Rp. {{$data->total_donasi}}</td>
                </tr>
            <tr>
                <td valign="bottom"> <h3>Rp {{$data->total_donasi}} </h3> </td>
                <td valign="top" align="right" height="100">  </td>
            </tr>
        </table>          --}}
     @endforeach
 </body>
 </html>
