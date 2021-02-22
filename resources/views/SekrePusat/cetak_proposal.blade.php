<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <table align="center" border="0">
                    {{-- HEAD --}}
                    <tbody>
                    <tr>
                        <td colspan="3">
                            <div align="center">
                                <span style="font-size: x-small;">
                                    <b>{!!$data->judul!!}</b>
                                </span>
                            </div>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td colspan="3">
                            <table border="0">
                                    <tr>
                                        <td>
                                            <span style="font-size: x-small;">No</span>
                                        </td>
                                        <td>
                                            <span style="font-size: x-small;">:</span>
                                        </td>
                                        <td>
                                            <span style="font-size: x-small;">{!!$data->id!!}/{!! Carbon\Carbon::parse($data->created_at)->format('d-m-Y') !!}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span style="font-size: x-small;">Perihal</span>
                                        </td>
                                        <td>
                                            <span style="font-size: x-small;">:</span>
                                        </td>
                                        <td>
                                            <span style="font-size: x-small;">{!!$data->proposal_kategori->nama!!}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="right">
                                               <span style="font-size: x-small;">{!!$data->tempat!!}, {!! Carbon\Carbon::parse($data->created_at)->format('d-m-Y') !!}</span>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            </table>
                        </td>
                    </tr> --}}
                    <tr>
                        <td colspan="3">
                            <div align="justify">
                                <br>
                                <h5>A. Latar Belakang</h5>
                                <span style="font-size: x-small;">
                                    {!! $data->latar_belakang !!}
                                </span>
                                <br>
                                <h5>B. Maksud dan Tujuan</h5>
                                <span style="font-size: x-small;">
                                    {!! $data->maksud_tujuan !!}
                                </span>
                                <br>
                                <h5>C. Waktu dan Tempat Pelaksanaan</h5>
                                <table border="0" style="width: 352px;">
                                    <tbody>
                                        <tr>
                                            <td width="80">
                                                <span style="font-size: x-small;">hari/tanggal</span>
                                            </td>
                                            <td width="10">
                                                <span style="font-size: x-small;">:</span>
                                            </td>
                                            <td width="248">
                                                <span style="font-size: x-small;">{{ Carbon\Carbon::parse($data->tgl)->format('l, Y-m-d') }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="font-size: x-small;">waktu</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">:</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">{{ Carbon\Carbon::parse($data->waktu)->format('h:i') }} WIB</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="font-size: x-small;">tempat</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">:</span>
                                            </td>
                                            <td>
                                                <span style="font-size: x-small;">{{$data->tempat}}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h5>D. Peserta</h5>
                                <span style="font-size: x-small;">
                                    {!! $data->peserta !!}
                                </span>
                                <br>
                                <h5>E. Narasumber</h5>
                                <span style="font-size: x-small;">
                                    {!! $data->narasumber !!}
                                </span>
                                <br>
                                <h5>F. Bahasan Acara</h5>
                                <span style="font-size: x-small;">
                                    {!! $data->bahasan !!}
                                </span>
                                <span style="font-size: x-small;">
                                    Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri kegiatan ini. sekian dan terima kasih.
                                </span>
                                <br>
                            </div>
                        </td>
                    </tr>
                    {{-- FOOTER --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <br><br>
                            <div align="center">
                                <span style="font-size: x-small;">Mengetahui</span>
                            </div>
                            <div align="center">
                                <span style="font-size: x-small;">Ketua Forum DAS Jawa Barat,</span>
                            </div>
                            <br><br>
                            <div align="center">
                                <span style="font-size: x-small;">..............................................</span>
                            </div>
                        </td>
                    </tr>
                    </tbody>
            </table>
            <br>
        </div>
    </div>
    </div>
</body>
</html>
