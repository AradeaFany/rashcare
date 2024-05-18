<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utsara');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Sejarah",
        "description" => " Ras Store Home Care didirikan pada tahun 2021 oleh Aradea Fany Sopandi Futry, seorang perawat terdaftar dengan pengalaman lebih dari 4 tahun di bidang perawatan kesehatan di rumah. Ras Store Home Care memiliki visi untuk memberikan layanan perawatan kesehatan di rumah yang berkualitas tinggi dan berbelas kasih kepada pasien di Majalengka Regency, West Java, Indonesia.",
        "image" => "2.jpg",
        "visi" => " Menjadi penyedia layanan perawatan kesehatan di rumah terdepan di Majalengka Regency, West Java, Indonesia, yang terkenal dengan layanan berkualitas tinggi, berbelas kasih, dan berpusat pada pasien.", 
        "misi" => "Memberikan layanan perawatan kesehatan di rumah yang berkualitas tinggi dan berbelas kasih kepada pasien di lingkungan yang nyaman dan aman di rumah mereka sendiri.", 
        "misi1" => "Menghormati privasi dan martabat pasien kami.",
        "misi2" => "Menciptakan lingkungan kerja yang positif dan suportif bagi karyawan kami.", 
        "misi3" => "Memberikan dukungan emosional dan praktis kepada pasien dan keluarga mereka.",
        "misi4" => "Bekerja sama dengan pasien dan keluarga mereka untuk mengembangkan rencana perawatan yang dipersonalisasi.", 
        "pendiri" => "Aradea Fany Sopandi Futry",
        "jabatan" => "Pendiri & CEO",
        "pengalaman" =>  "4 tahun di bidang home care",
        "kualifikasi" => "Magister Kesehatan",
        "pendiri1" => "Luthfi Mufty Ramadhan",
    ]);
});
Route::get('/perawatan', function () {
    return view('perawatan', [
        "lansia" => "Perawatan lansia",
        "descriptionl" => " Membantu lansia dengan aktivitas sehari-hari seperti mandi, berpakaian, makan, dan mobilitas.
        ",
        "pascaop" => "Perawatan pasca operasi",
        "descriptionop" => " Membantu pasien pulih dari operasi dengan memberikan perawatan luka, manajemen obat, dan terapi fisik.", 
        "layanan" => "Layanan keperawatan",
        "descriptionlyn" => " Memberikan perawatan medis kepada pasien di rumah, seperti pemberian obat, penggantian balutan, dan pemantauan tanda-tanda vital.
        ", 
    ]);
});
Route::get('/terapi', function () {
    return view('terapi', [
        "fisik" => "Terapi fisik",
        "descriptionf" => "Membantu pasien meningkatkan kekuatan, mobilitas, dan fungsionalitas mereka melalui latihan dan terapi.",
        "okupasi" => "Terapi okupasi",
        "descriptiono" => "Membantu pasien belajar melakukan aktivitas sehari-hari secara mandiri dengan aman dan efisien.", 
    ]);
});
Route::get('/sunat', function () {
    return view('sunat', [
        "name" => "Ras Home Care",
        "description" => " menyediakan layanan sunat (sirkumisi) untuk anak-anak dan orang dewasa di Majalengka Regency, West Java, Indonesia. Kami menawarkan berbagai metode sunat yang aman dan nyaman, termasuk:",
        "li" => "Sunat konvensional: Metode tradisional dengan pisau bedah.",
        "li1" => "Sunat laser: Metode modern yang menggunakan laser untuk memotong kulup.", 
        "li2" => "Sunat metode clamp: Metode yang menggunakan klem khusus untuk menghentikan aliran darah ke kulup sebelum dipotong.", 
        "li3" => "Sunat metode elektrokauter: Metode yang menggunakan arus listrik untuk memotong dan membekas kulup.",
        "why" => "Mengapa memilih Ras Home Care untuk layanan sunat?", 
        "li4" => "Tim dokter yang berpengalaman dan berbelas kasih",
        "li5" => "Berbagai metode sunat yang aman dan nyaman", 
        "li6" => "Layanan sunat di rumah untuk kenyamanan Anda",
        "li7" => "Biaya yang terjangkau",
        "biaya" =>  "Biaya layanan sunat di Ras Store Home Care bervariasi tergantung pada metode sunat yang dipilih dan lokasi layanan. Silakan hubungi kami untuk informasi lebih lanjut tentang biaya.",
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "telp" => " +62 812-3456-7890",
        "mail" => "rasmedical23@gmail.com",
        "link" => " https://rasmedical.com/usedpre-owned-equipment/ "
  ]);
});
Route::get('/index', function () {
    return view('index', [
        "telp" => " +62 812-3456-7890",
        "mail" => "rasmedical23@gmail.com",
        "link" => " https://rasmedical.com/usedpre-owned-equipment/ "
  ]);
});
Route::get('/portofolio', function () {
    return view('portofolio', [
        "a" => "Pengembangan rencana perawatan yang dipersonalisasi",
        "aa" => "Tim perawatan kesehatan di Ras Store Home Care bekerja sama dengan pasien dan keluarga mereka untuk memahami kebutuhan individu setiap pasien dan mengembangkan rencana perawatan yang dipersonalisasi. Rencana perawatan ini mungkin termasuk berbagai layanan, seperti perawatan fisik, terapi okupasi, layanan keperawatan, dan dukungan emosional.",        "b" => " Penyediaan layanan perawatan kesehatan di rumah",
        "b" => " Penyediaan layanan perawatan kesehatan di rumah",
        "bb" => " Ras Store Home Care menyediakan berbagai layanan perawatan kesehatan di rumah, seperti perawatan lansia, perawatan pasca operasi, perawatan rehabilitasi, perawatan paliatif, perawatan anak, layanan pendampingan, terapi fisik, terapi okupasi, dan layanan keperawatan. Staf kami yang berpengalaman dan berbelas kasih dapat memberikan perawatan berkualitas tinggi di lingkungan yang nyaman dan aman di rumah pasien.",
        "c" => " Dukungan emosional",
        "cc" => "Ras Store Home Care menyediakan dukungan emosional kepada pasien dan keluarga mereka yang menghadapi penyakit atau cedera. Staf kami yang berbelas kasih dapat menawarkan pendengaran, bimbingan, dan dukungan praktis untuk membantu pasien dan keluarga mereka mengatasi tantangan emosional dari penyakit atau cedera.",

  ]);
});