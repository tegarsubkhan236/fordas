<!DOCTYPE html>
 <html>
 <head>
  <title>Bukti Donasi</title>
 </head>
 <body>
 <h2>Bukti Donasi {{$data->detail_donatur->name}}</h2>
 <hr>
 <form action="" method="get">
 <table width="100%" border="0">
  <tr>
   <td width="100">Dikirim Oleh</td>
   <td><input type="text" value={{$data->detail_donatur->name}}></td>
  </tr>
  <tr>
   <td width="100">Diterima oleh</td>
   <td><input type="text" name="nama" value={{$data->proposal->wilayah_da->nama}} required></td>
  </tr>
  <tr>
   <td width="100">Nominal Uang</td>
   <td><input type="text" name="nominal" required value="Rp. {{$data->total_donasi}}"></td>
  </tr>
  <tr>
   <td width="100">Untuk Pembayaran</td>
   <td>
   <textarea name="pembayaran" cols="40" rows="3">{{$data->proposal->judul}}</textarea>
   </td>
  </tr>
 </table>
 </form>
 <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;">
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
 </table>
 <style>
 a { text-decoration: none; color: #0903E8; font-family: verdana; }
 a:hover { color: #FA3C3C; }
 </style>
 </body>
 </html>
