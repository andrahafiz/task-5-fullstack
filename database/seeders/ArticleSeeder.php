<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert(
            [
                [
                    'title' => 'Cegah Stunting, Siapa Takut?',
                    'content' => '<p>Kekurangan gizi masa anak-anak selalu dihubungkan dengan kekurangan&nbsp; vitamin&nbsp; mineral&nbsp; yang&nbsp; spesifik dan berhubungan dengan mikronutrien maupun makronutrien tertentu. Beberapa tahun terakhir ini telah banyak penelitian mengenai dampak dari kekurangan intake zat gizi, dimulai dari meningkatnya risiko terhadap penyakit infeksi dan kematian yang dapat menghambat pertumbuhan dan perkembangan mental.</p><p>Masalah balita pendek (<em>stunting)</em> adalah masalah gizi dunia yang sedang dihadapi oleh negara-negara berkembang salah satunya adalah Indonesia. Pada tahun 2018 Kementerian Kesehatan melakukan Riset Kesehatan Dasar (Riskesdas) yang dilakukan oleh Badan Penelitian dan Pengembangan Kesehatan (Litbangkes) tentang pravelensi stunting, berdasarkan penelitian tersebut angka stunting didapatkan sebesar 30,8%. Hal tersebut dapat menjadi indikasi bahwa pravelensi balita stunting di Indonesia masih tergolong tinggi dari ambang batas yang ditetapkan WHO yaitu 20%.</p>',
                    'image' => 'stunting.jpg',
                    'user_id' => '1',
                    'category_id' => '1'
                ],
                [
                    'title' => 'Bola Piala Dunia 2022',
                    'content' => '<h2 style="text-align: justify;">Bola resmi Piala Dunia 2022</h2><p style="text-align: justify;">Piala Dunia tahun ini juga nggak kalah keren, kok. Untuk pertandingan di Qatar, diluncurkan bola khusus yang diberi nama Al Rihla. Kerennya, Al Rihla jadi bola Piala Dunia yang paling ramah lingkungan karena hanya dibuat dengan tinta dan lem berbahan dasar air.&nbsp;<i>Trendy </i>abis!</p><p style="text-align: justify;">Bola Adidas yang satu ini juga digadang-gadang sebagai bola tercepat yang pernah ditampilkan dalam kompetisi, loh. Al Rihla dirancang untuk bergerak lebih cepat di udara daripada bola Piala Dunia lainnya dalam sejarah.</p>',
                    'image' => 'olahraga.jpg',
                    'user_id' => '1',
                    'category_id' => '2'
                ],
                [
                    'title' => 'Apa itu NFT?',
                    'content' => '<h2><b>Apa Itu NFT?</b></h2><p>Sebelum membahas cara kerja dan langkah-langkah membelinya, kita perlu mengulas apa itu NFT terlebih dahulu.</p>
                <p><span style="font-weight: 400;">Melansir laman </span><a href="https://www.forbes.com/advisor/investing/nft-non-fungible-token/" target="_blank" rel="noopener"><span style="font-weight: 400;">Forbes</span></a><span style="font-weight: 400;">, NFT adalah sebuah aset digital yang mewakili objek dunia nyata seperti lukisan, seni musik,</span><i><span style="font-weight: 400;"> item</span></i><span style="font-weight: 400;"> dalam </span><i><span style="font-weight: 400;">game</span></i><span style="font-weight: 400;">, hingga video pendek. </span></p>
                <p><span style="font-weight: 400;">Mereka dibeli dan dijual secara </span><i><span style="font-weight: 400;">online</span></i><span style="font-weight: 400;">, sering kali dibayar dengan </span><i><span style="font-weight: 400;">cryptocurrency</span></i><span style="font-weight: 400;">, dan umumnya dikodekan menggunakan </span><i><span style="font-weight: 400;">software</span></i><span style="font-weight: 400;"> dasar yang serupa dengan aset </span><i><span style="font-weight: 400;">crypto</span></i><span style="font-weight: 400;"> lainnya.</span></p>
                <p><span style="font-weight: 400;">Meskipun sudah ada sejak tahun 2014, NFT kini semakin terkenal karena mereka dianggap sebagai metode yang praktis untuk membeli dan menjual karya seni digital. </span></p>
                <p><span style="font-weight: 400;">NFT juga umumnya dinilai sebagai salah satu dari proses transaksi yang sangat terbatas dan memiliki kode pengenal yang unik.</span></p>
                <p><span style="font-weight: 400;">Fakta tersebut sangat bertolak belakang dengan kebanyakan kreasi digital, yang pasokannya hampir selalu tak terbatas. </span></p>
                <p><span style="font-weight: 400;">Nah, meskipun demikian, siapa pun bisa melihat secara keseluruhan karya digital yang sedang dijual.</span></p>
                <p><span style="font-weight: 400;">Lalu, mengapa orang-orang sangat menginginkan </span><i><span style="font-weight: 400;">non fungible token</span></i><span style="font-weight: 400;">? Ini terjadi karena NFT memungkinkan pembeli untuk memiliki </span><i><span style="font-weight: 400;">item </span></i><span style="font-weight: 400;">aslinya. </span></p>
                <p><span style="font-weight: 400;">Tidak hanya itu, NFT juga berisi otentikasi bawaan, yang berfungsi sebagai bukti kepemilikan.</span></p>',
                    'image' => 'teknologi.jpg',
                    'user_id' => '2',
                    'category_id' => '3'
                ]
            ]
        );
    }
}
