<?php

use Illuminate\Database\Seeder;

class ProposalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proposal')->delete();
        
        \DB::table('proposal')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by' => 1,
                'judul' => 'test',
                'tgl' => '2021-10-11',
                'waktu' => '09:21:00',
                'tempat' => 'test',
                'latar_belakang' => '<p>test</p>',
                'maksud_tujuan' => '<p>test</p>',
                'peserta' => '<p>test</p>',
                'narasumber' => '<p>test</p>',
                'bahasan' => '<p>test</p>',
                'kategori_id' => 1,
                'status' => 2,
                'visibility' => 1,
                'donate' => 1,
                'keterangan' => NULL,
                'created_at' => '2021-01-17',
                'updated_at' => '2021-01-26',
                'files' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_by' => 1,
                'judul' => 'FORUM KOORDINASI DAS CISADANE',
                'tgl' => '2021-01-15',
                'waktu' => '18:27:00',
                'tempat' => 'Universitas Nusa Bangsa',
                'latar_belakang' => '<p style="text-align: justify; ">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak
untuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi
factor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi
ekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap
lingkungan, demikian juga sebaliknya.
Pengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.
Pemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak
tertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego
sektoral yang sampai saat ini belum teratasi.
Mengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah
berlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.
Pengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin
meruncingnya ego sektoral.&nbsp;<br></p>',
                'maksud_tujuan' => '<p style="text-align: justify; ">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi
jembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka
memperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal
pengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif
sehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.<br></p>',
                'peserta' => '<p style="text-align: justify; ">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya
Masyarakat, Budayawan, serta berbagai pihak terkait (terlampir)&nbsp;<br></p>',
                'narasumber' => '<p style="text-align: justify; ">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>',
                'bahasan' => '<p style="text-align: justify; ">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang
dibahas dalam kegiatan tersebut adalah :
</p><p style="text-align: justify; ">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane
</p><p style="text-align: justify; ">2. Sosialisasi Fordas Cisadane
</p><p style="text-align: justify; ">3. Pembahasan program kerja tahun anggaran 2019<br></p>',
                'kategori_id' => 1,
                'status' => 2,
                'visibility' => 1,
                'donate' => 0,
                'keterangan' => NULL,
                'created_at' => '2021-01-22',
                'updated_at' => '2021-01-26',
                'files' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_by' => 2,
                'judul' => 'FORUM KOORDINASI DAS CISADANE',
                'tgl' => '2019-09-24',
                'waktu' => '12:00:00',
                'tempat' => 'Universitas Nusa Bangsa',
                'latar_belakang' => '<p style="text-align: justify; ">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak
untuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi
factor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi
ekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap
lingkungan, demikian juga sebaliknya.
Pengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.
Pemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak
tertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego
sektoral yang sampai saat ini belum teratasi.
Mengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah
berlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.
Pengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin
meruncingnya ego sektoral.<br></p>',
                'maksud_tujuan' => '<p style="text-align: justify; ">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi
jembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka
memperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal
pengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif
sehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.&nbsp;<br></p>',
                'peserta' => '<p style="text-align: justify; ">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya
Masyarakat, Budayawan, serta berbagai pihak terkait (terlampir)<br></p>',
                'narasumber' => '<p style="text-align: justify; ">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>',
                'bahasan' => '<p style="text-align: justify; ">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang
dibahas dalam kegiatan tersebut adalah :
</p><p style="text-align: justify; ">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane
</p><p style="text-align: justify; ">2. Sosialisasi Fordas Cisadane
</p><p style="text-align: justify; ">3. Pembahasan program kerja tahun anggaran 2019<br></p>',
                'kategori_id' => 1,
                'status' => 1,
                'visibility' => 1,
                'donate' => 0,
                'keterangan' => 'proposal dikonfirmasi',
                'created_at' => '2021-01-18',
                'updated_at' => '2021-01-18',
                'files' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_by' => 2,
                'judul' => 'FORUM KOORDINASI DAS CISADANE 2',
                'tgl' => '2021-01-18',
                'waktu' => '12:00:00',
                'tempat' => 'Tasik',
                'latar_belakang' => '<p>abcde</p>',
                'maksud_tujuan' => '<p>abcde<br></p>',
                'peserta' => '<p>abcde<br></p>',
                'narasumber' => '<p>abcde<br></p>',
                'bahasan' => '<p>abcde<br></p>',
                'kategori_id' => 1,
                'status' => 2,
                'visibility' => 1,
                'donate' => 0,
                'keterangan' => 'di tolak',
                'created_at' => '2021-01-18',
                'updated_at' => '2021-01-18',
                'files' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_by' => 1,
                'judul' => 'FORUM KOORDINASI DAS CISADANE',
                'tgl' => '2021-01-22',
                'waktu' => '19:19:00',
                'tempat' => 'Universitas Nusa Bangsa',
                'latar_belakang' => '<p style="text-align: justify; ">Fenomena kerusakan lingkungan yang semakin meningkat menjadi peringatan bagi semua pihak
untuk lebih peduli terhadap lingkungan di sekitarnya. Daya dukung lingkungan yang menurun menjadi
factor penting yang harus segera diatasi. Daya dukung lingkungan sangat berhubungan dengan kondisi
ekosistem daerah aliran sungai (DAS). DAS yang baik akan memberikan efek positif terhadap
lingkungan, demikian juga sebaliknya.
Pengelolaan DAS tidak terlepas dari banyaknya konflik antar pihak yang berkepentingan.
Pemanfaatan sumberdaya alam seringkali disalah gunakan demi memuluskan ambisi pihak-pihak
tertentu dalam mengeksploitasi alam secara berlebihan. Kondisi demikian diperparah dengan issu ego
sektoral yang sampai saat ini belum teratasi.
Mengingat setiap bagian dari bumi terbagi habis ke dalam DAS dan sub DAS maka tidaklah
berlebihan jika setiap kegiatan pengelolaan lingkungan hendaknya berbasis pada wilayah DAS.
Pengelolaan lingkungan berbasis pada wilayah administrasi semata berbuah pada semakin
meruncingnya ego sektoral.&nbsp;<br></p>',
                'maksud_tujuan' => '<p style="text-align: justify; ">Forum DAS adalah suatu wadah bagi semua pihak terkait dalam wilayah DAS. Forum DAS menjadi
jembatan untuk menemukan solusi bersama atas permasalahan lingkungan global. Dalam rangka
memperkuat organisasi, Forum DAS Cisadane berkepentingan untuk melakukan konsolidasi internal
pengurus. Konsolidasi merupakan bagian yang utuh bagi terciptanya suasan Forum yang kondusif
sehingga mampu memberikan efek positif bagi kegiatan pengelolaan DAS Cisadane.<br></p>',
                'peserta' => '<p style="text-align: justify; ">Peserta terdiri dari pengurus Forum DAS Cisadane, Perguruan Tinggi, Lembaga Swadaya
Masyarakat, Budayawan, serta berbagai pihak terkait (terlampir)&nbsp;<br></p>',
                'narasumber' => '<p style="text-align: justify; ">Narasumber acara terdiri dari Ketua Forum DAS Cisadane<br></p>',
                'bahasan' => '<p style="text-align: justify; ">Agenda kegiatan berupa penguatan organisasi Forum DAS Cisadane. Adapun hal-hal yang
dibahas dalam kegiatan tersebut adalah :
</p><p style="text-align: justify; ">1. Penguatan dan konsolidasi kelembagaan Fordas Cisadane
</p><p style="text-align: justify; ">2. Sosialisasi Fordas Cisadane
</p><p style="text-align: justify; ">3. Pembahasan program kerja tahun anggaran 2019<br></p>',
                'kategori_id' => 1,
                'status' => 2,
                'visibility' => 1,
                'donate' => 0,
                'keterangan' => NULL,
                'created_at' => '2021-01-22',
                'updated_at' => '2021-01-26',
                'files' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_by' => 17,
                'judul' => 'Bahan Persiapan Koordinasi Permasalahan Banjir',
                'tgl' => '2020-04-06',
                'waktu' => '10:00:00',
                'tempat' => 'Sukajaya',
                'latar_belakang' => '<p><span style="font-family: &quot;Times New Roman&quot;;">Banjir merupakan suatu masalah yang sampai saat masih perlu adanya
penanganan khusus dari berbagai pihak, baik dari pemerintah maupun
masyarakat. Banjir bukan masalah yang ringan.</span></p><p><span style="font-family: &quot;Times New Roman&quot;;">Banjir dapat terjadi akibat naiknya permukaan air lantaran curah hujan
yang diatas normal, perubahan suhu, tanggul/ bendungan yang bobol,
pencairan salju yang cepat, terhambatnya aliran air di tempat lain. Sedikitnya ada lima faktor penting penyebab banjir di Indonesia yaitu
faktor hujan, faktor hancurnya retensi Daerah Aliran Sungai (DAS), faktor
kesalahan perencanaan pembangunan alur sungai, faktor pendangkalan sungai, faktor kesalahan tata wilayah dan pembangunan sarana dan prasarana, dan faktor terjadinya longsor dari tanah pegunungan.</span><br></p>',
                'maksud_tujuan' => '<p><span style="font-family: &quot;Times New Roman&quot;;">Maksud dari penelitian ini adalah untuk mengkaji sejauh mana masyarakat Sukajaya peduli dan siap dalam menghadapi bencana longsor serta upaya-upaya apa saja yang sudah dilakukan pemerintah terhadap Sukajaya dalam
menanggulangi bencana longsor.</span></p><p><span style="font-family: &quot;Times New Roman&quot;;">Tujuan penelitian ini adalah untuk mengetahui tingkat kesiapsiagaan masyarakat
di Sukajaya dan menganalisis upaya apa saja yang dapat dilakukan untuk
meningkatkan kesiapsiagaan masyarakat di Sukajaya, baik oleh masyarakat
itu sendiri ataupun pemerintah.</span><span style="font-family: &quot;Times New Roman&quot;;"><br></span><br></p>',
                'peserta' => '<p>Sekretaris Jendral Kementerian KLHK , organisasi Forum DAS Ciujung, dan lainnya dengan masyarakat</p>',
                'narasumber' => '<p><span style="font-family: &quot;Times New Roman&quot;;">Narasumber acara terdiri dari Ketua Forum DAS Ciujung</span><br></p>',
                'bahasan' => '<p><span style="font-size: 1rem; font-family: &quot;Times New Roman&quot;;">Agenda kegiatan berupa penguatan organisasi Forum DAS Ciujung. Adapun hal-hal yang
dibahas dalam kegiatan tersebut adalah :</span><span style="font-family: &quot;Times New Roman&quot;;">﻿</span></p><p><span style="font-family: &quot;Times New Roman&quot;;">Mengetahui tingkat kesiapsiagaan masyarakat dalam menghadapi bencana banjir.</span></p><p><span style="font-family: &quot;Times New Roman&quot;;">Sosialisasi Fordas Ciujung.</span><br></p>',
                'kategori_id' => 2,
                'status' => 1,
                'visibility' => 1,
                'donate' => 1,
                'keterangan' => 'Laksanakan',
                'created_at' => '2021-01-26',
                'updated_at' => '2021-01-26',
                'files' => NULL,
            ),
        ));
        
        
    }
}