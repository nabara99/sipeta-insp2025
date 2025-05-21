<!DOCTYPE html>
<html lang="en">

<?php
use Carbon\Carbon;
setlocale(LC_TIME, 'id_ID');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi</title>
</head>

<body>
    <table border="0" style="text-align: left; width: 100%; font-family: arial;">
        <tr>
            <td rowspan="5"><img src="{{ asset('img/tanbu.png') }}" alt="logo" width="70"
                    class="shadow-light  mb-2 mt-1"></td>
            <td colspan="8" style="font-size: 14pt;">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <b>PEMERINTAH KABUPATEN TANAH BUMBU</b>
            </td>
        </tr>
        <tr>
            <td colspan="9" style="font-size: 16pt">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <b>INSPEKTORAT DAERAH</b>
            </td>
        </tr>
        <tr>
            <td colspan="9" style="font-size: 8pt">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Alamat : Jln. Dharma Praja No. 19 Kel. Gunung Tinggi Kec. Batulicin Kab. Tanah Bumbu
            </td>
        </tr>
        <tr>
            <td colspan="9" style="font-size: 8pt">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Prov. Kalimantan Selatan - Kode Pos 72714
            </td>
        </tr>
        <tr>
            <td colspan="9" style="font-size: 8pt">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Laman: inspektorat.tanahbumbukab.go.id Pos-el: inspektorat.tanahbumbukab@gmail.com
            </td>
        </tr>
        <tr>
            <td colspan="9">
                <hr style="border: none; border-top: 1px solid #000;">
            </td>
        </tr>
        <tr style="text-align: center; font-size: 12pt;">
            <td colspan="9"><b>KWITANSI</b></td>
        </tr>
        <tr style="font-size: 8pt;">
            <td width="22%">Tahun Anggaran</td>
            <td width="1%">:</td>
            <td width="12%" colspan="2">2025</td>
            <td width="1%"></td>
            <td width="22%">Tanggal BKU</td>
            <td width="1%">:</td>
            <td>{{ Carbon::parse($kwitansi->tgl)->isoFormat('D MMMM Y') }}</td>
        </tr>
        <tr style="text-align: left; font-size: 8pt;">
            <td>Kode Program</td>
            <td>: </td>
            <td colspan="2">{{ $kwitansi->anggaran->sub->kegiatan->program->kode_program }}</td>
            <td></td>
            <td>TNT No.</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Kode Kegiatan</td>
            <td>:</td>
            <td colspan="2">
                {{ $kwitansi->anggaran->sub->kegiatan->program->kode_program }}.{{ $kwitansi->anggaran->sub->kegiatan->kode_kegiatan }}
            </td>
            <td></td>
            <td>Buku Kas No.</td>
            <td>:</td>
            <td>{{str_pad($kwitansi->kw_id, 3, '0', STR_PAD_LEFT) }}/SPJ.GU- &nbsp;&nbsp;&nbsp;&nbsp;/ID/2025</td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Kode Sub Kegiatan</td>
            <td>:</td>
            <td colspan="2">
                {{ $kwitansi->anggaran->sub->kegiatan->program->kode_program }}.{{ $kwitansi->anggaran->sub->kegiatan->kode_kegiatan }}.{{ $kwitansi->anggaran->sub->kode_sub }}
            </td>
            <td></td>
            <td>Paraf</td>
            <td>:</td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Kode Rekening</td>
            <td>:</td>
            <td>{{ $kwitansi->anggaran->rekening->kode_rekening }}</td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Terima Dari</td>
            <td>:</td>
            <td colspan="6">Bendahara Pengeluaran Inspektorat Daerah</td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Terbilang</td>
            <td>:</td>
            <td colspan="6">
                {{ Terbilang::make($kwitansi->nilai, ' rupiah') }}
            </td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        <tr style="font-size: 8pt;">
            <td>Uang Sejumlah</td>
            <td>:</td>
            <td>Rp.</td>
            <td style="text-align: right;">
                {{ number_format($kwitansi->nilai) }},-
            </td>
            <td></td>
            <td>Untuk Pembayaran</td>
            <td>:</td>
        </tr>
        @if ($kwitansi->ppn)
            <tr style="font-size: 8pt;">
                <td>PPN</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->ppn) }},-
                </td>
                <td></td>
                <td colspan="3" rowspan="4">{{ $kwitansi->hal }}</td>
            </tr>
        @else
            <tr style="font-size: 8pt;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="3" rowspan="3">{{ $kwitansi->hal }}</td>
            </tr>
        @endif
        <tr style="font-size: 8pt;">
            <td>PPh 21</td>
            <td>:</td>
            <td>Rp. </td>
            <td style="text-align: right;">
                {{ number_format($kwitansi->pph21) }},-
            </td>
        </tr>
        @if ($kwitansi->pph22)
            <tr style="font-size: 8pt;">
                <td>PPh 22</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->pph22) }},-
                </td>
            </tr>
        @endif
        @if ($kwitansi->pph23)
            <tr style="font-size: 8pt;">
                <td>PPh 23</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->pph23) }},-
                </td>
            </tr>
        @endif
        @if ($kwitansi->pdaerah)
            <tr style="font-size: 8pt;">
                <td>Pajak Daerah</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->pdaerah) }},-
                </td>
            </tr>
        @endif
        @if ($kwitansi->iwp1)
            <tr style="font-size: 8pt;">
                <td>IWP 1</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->iwp1) }},-
                </td>
            </tr>
        @endif
        @if ($kwitansi->iwp8)
            <tr style="font-size: 8pt;">
                <td>IWP 8</td>
                <td>:</td>
                <td>Rp. </td>
                <td style="text-align: right;">
                    {{ number_format($kwitansi->iwp8) }},-
                </td>
            </tr>
        @endif
        <tr style="font-size: 8pt;">
            <td>Jumlah Dibayarkan</td>
            <td>:</td>
            <td>Rp. </td>
            <td style="text-align: right;">
                {{ number_format($kwitansi->sisa) }},-
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>
    <table border="0" style="text-align: left; width: 100%; font-family: arial; font-size: 8pt;">
        <tr>
            <td width="24%" style="text-align: center;">Mengetahui/ Menyetujui</td>
            <td width="24%"></td>
            <td width="24%"></td>
            <td width="27%" colspan="2">
                Batulicin, {{ Carbon::parse($kwitansi->tgl)->isoFormat('D MMMM Y') }}
            </td>
        </tr>
        <tr style="text-align: center; font-size: 8pt;">
            <td>Pengguna Anggaran</td>
            <td>PPTK</td>
            <td>Bendahara Pengeluaran</td>
            <td colspan="2" style="text-align: left;">
                Yang Terima
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td colspan="3"></td>
            <td width="5%">Nama</td>
            <td>: {{ $kwitansi->penerima->nama_penerima }}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>Jabatan</td>
            <td>: {{ $kwitansi->penerima->jabatan_penerima }}</td>
        </tr>
        <tr style="text-align: center;">
            <td>

                <b><u></u></b>
            </td>
            <td>

                <b><u></u></b>
            </td>
            <td>

                <b><u></u></b>
            </td>
            <td style="text-align: left;">Alamat</td>
            <td style="text-align: left;">
                : {{ $kwitansi->penerima->alamat }}
            </td>
        </tr>
        <tr style="text-align: center;">
            <td>
                @foreach ($pengelolas as $item)
                @endforeach
                {{ $item->nama_pa }} <br>
                NIP.{{ $item->nip_pa }}
            </td>
            <td>
                {{ $kwitansi->anggaran->sub->pptk->nama_pptk }} <br>
                NIP.{{ $kwitansi->anggaran->sub->pptk->nip_pptk }}
            </td>
            <td>
                {{ $item->nama_bp }} <br>
                NIP. {{ $item->nip_bp }}
            </td>
            <td colspan="2" style="text-align: left">Cap/Stempel</td>
        </tr>
    </table>
</body>

</html>
