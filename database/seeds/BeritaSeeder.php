<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beritas = array(
            array('id' => '1', 'pengunjung_id' => '1' ,'gunung_id' => '49','judul' => 'Sembalun di Kaki Gunung Rinjani Kini bak Kota Mati','text_pembuka' => 'Pendakian di Gunung Rinjani adalah nadi bagi warga Desa Sembalun, Lombok Timur. Namun, gempa memporak-porandakannya.','berita' => '<p><strong>Liputan6.com, Mataram -</strong>&nbsp;Siluet Gunung Rinjani dan Bukit Pegasingan terlihat samar seusai hujan sepanjang Selasa sore hingga malam, 21 Agustus 2018, menambah kesenduan&nbsp;Sembalundulu selalu ramai oleh hilir mudik para pendaki gunung dan kini senyap setelah diguncang gempa.</p>
          
          <p>Nama Sembalun tidak asing bagi para pelancong, khususnya pendaki gunung, yaitu kawasan di Kabupaten Lombok Timur, Nusa Tenggara Barat (NTB) yang merupakan pintu masuk menuju jalur pendakian ke Gunung Rinjani yang memiliki ketinggian 3.726 Meter di atas permukaan laut (Mdpl).</p>
          
          <p>Terlebih saat musim pendakian setiap Juli dan Agustus, tempat itu selalu dipenuhi para pendaki. Tidak jarang, para pendaki harus tidur di jalanan dengan menggunakan matras atau tenda akibat kamar hotel atau penginapan sudah habis dipesan tamu sebelum mereka mendaki ke Gunung Rinjani.</p>
          
          <p>Dilansir&nbsp;<em>Antara</em>, pascagempa 6,4 Skala Richter (SR) pada 29 Juli 2018 yang berujung evakuasi ratusan pendaki dari gunung tersebut, pesona&nbsp;Desa Sembalun&nbsp;itu berbalik&nbsp;180 derajat bak kota hantu.</p>
          
          <p>Suasana makin sepi setelah gempa susulan dengan kekuatan guncangan hingga magnitudo 7 pada 5 Agustus 2018 dengan kekuatan 7 SR dan 19 Agustus 2018 dengan 6,9 SR.</p>
          ','lampiran' => 'images/local/berita/sembalun-di.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:52','updated_at' => '2019-06-11 06:19:52'),
            array('id' => '2', 'pengunung_id' => '2','gunung_id' => '49','judul' => 'Usai Gempa Lombok, Kera-Kera dari Kaki Rinjani Padati Jalanan dan Kebun Warga','text_pembuka' => 'Fenomena kera-kera turun dari kaki Gunung Rinjani ke jalanan disebut yang pertama terjadi.','berita' => '<p><strong>Liputan6.com, Mataram -</strong>&nbsp;Gempa tektonik yang mengguncang&nbsp;Lombok&nbsp;pada Minggu malam, 19 Agustus 2018, berdampak pada kehadiran kera. Banyak kera berkeliaran di ruas jalan utama bagian timur Pulau Lombok serta perkebunan milik warga.</p>
          
          <p>Menurut Hendra warga yang di sekitar lokasi, Kamis, 23 Agustus 2018, hewan tersebut berkumpul di tepi jalan yang diapit oleh pantai dan punggung gunung baik berombongan maupun individu duduk di tepian jalan.</p>
          
          <p>Dilansir&nbsp;<em>Antara</em>, keberadaan kera itu tidak mengganggu para pengguna jalan. Menurut warga, sejak terjadinya gempa, kera-kera tersebut turun dari hutan.</p>
          
          <p>Kera itu dengan leluasa berjalan-jalan di tengah jalanan sehingga sering mengagetkan pengguna jalan. Kera-kera itu juga memakan buah jambu mete milik warga.</p>
          
          <p>Banyaknya hewan primata itu sudah terasa sejak di ruas jalan dari Belanting sampai Obel-Obel, Kecamatan Sambalia yang disambung ke arah Sembalun atau kaki&nbsp;Gunung Rinjani.</p>
          
          <p>&quot;Heran saja jadi banyak kera yang turut ke jalan,&quot; kata warga Sambalia, Lombok Timur, Hendra.</p>
          
          <p>Dia memperkirakan kera itu turun dari gunung atau hutan karena tidak adanya air dan makanan di habitatnya.</p>
          
          <p>Sementara itu, Aisyah, pedagang di Sembalun, mengaku pernah melihat kera naik ke kubah masjid dekat tempat tinggalnya yang roboh. &quot;Itu kera naik ke kubah masjid, ekornya panjang sekali. Saya sempat kaget,&quot; ujarnya.</p>
          
          <p>Ia menyebutkan melihat fenomena tersebut dianggap yang pertama kali selama hidupnya. &quot;Biasanya, monyet itu ada di jalan raya di kaki&nbsp;Gunung Rinjani&nbsp;menuju Kecamatan Sambalia, karena melewati hutan. Tapi, ini berani ke tengah desa,&quot; katanya.</p>
          ','lampiran' => 'images/local/berita/usai-gempa.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:53','updated_at' => '2019-06-11 06:19:53'),
            array('id' => '3', 'pengunjung_id' => '3','gunung_id' => '49','judul' => 'Hari-Hari Berat Manusia Gunung yang Gantungkan Hidup dari Rinjani','text_pembuka' => 'Semula, para manusia gunung berharap bisa mendapatkan pemasukan dari jalur alternatif pendakian di Gunung Rinjani. Kini, harapan itu pupus.','berita' => '<p><strong>Liputan6.com, Lombok Utara -</strong>&nbsp;Mata Nur Saat menerawang tatkala menceritakan nasibnya ke depan pascagempa bumi tektonik di Pulau Lombok, Nusa Tenggara Barat, yang terjadi berulang kali. Ia memikirkan kehidupan keluarganya yang selama ini menggantungkan hidup kepada&nbsp;Gunung Rinjani.</p>
          
          <p>Bukan hanya dirinya, ribuan pramuantar dan pemandu yang lainnya juga mengandalkan pekerjaan itu untuk menjaga asap dapur tetap mengebul bagi keluarganya. Kini, mereka hanya bisa termangu dan mengandalkan hidup dari belas kasihan, bantuan sumbangan.</p>
          
          <p>Nur Saat seorang ekspramuantar yang saat ini menjalankan layanan jasa kepada para pendaki dari penjemputan, dari Kota Mataram ke kaki Gunung Rinjani di Senaru, Kabupaten Lombok Utara, penginapan, penyiapan logistik, sampai mencari tenaga pramuantar serta pemandu pendakian.</p>
          
          <p>&quot;Utang saya ke bank tinggal satu tahun lagi, bagaimana ya jika Gunung Rinjani ini ditutup selama setahun. Uang dari mana ya membayar cicilan ke bank,&quot; katanya lirih, dilansir&nbsp;<em>Antara</em>, Jumat, 24 Agustus 2018.</p>
          
          <p>Untuk sekadar hidup, sebenarnya dia masih bisa memperoleh sumber dari menanam kopi. Namun, tanaman itu panennya hanya setahun sekali dan jumlahnya tidaklah begitu besar.</p>
          
          <p>&quot;Paling dari menanam kopi, jika panen dapat uang sekitar Rp 4 juta,&quot; katanya.</p>
          
          <p>Bagi warga Senaru, Lombok Utara dan Sembalun,&nbsp;Gunung Rinjani&nbsp;menjadi berkah tersendiri dengan keuntungan saling berkaitan dari pengelola Taman Nasional Gunung Rinjani (TNGR), jasa pramuantar atau kuli angkut, pemandu, jasa penginapan, warung makan atau restoran, sampai warung kecil.</p>
          
          <p>Bahkan, petani pun tidak luput menikmati anugerah dari gunung yang memiliki ketinggian 3.726 meter di atas permukaan laut (Mdpl) itu.</p>
          
          <p>Berdasarkan data dari TNGR, jumlah pendaki gunung itu sepanjang 2017 dari wisatawan nusantara sebanyak 43.120 orang, sedangkan wisatawan mancanegara mencapai 39.659 orang.</p>
          
          <p>Pendapatan negara bukan pajak (PNBP) dari retribusi wisatawan pada 2017 mencapai Rp 10,57 miliar atau meningkat 110 persen dibandingkan dengan tahun sebelumnya yang Rp 5,08 miliar. Bisa dibayangkan bagaimana besarnya ketergantungan warga yang tinggal di&nbsp;kaki gunungtersebut untuk hidup.</p>
          
          <p>Meski tidak ada angka resmi, jumlah pramuantar itu mencapai ribuan orang dan pemandu ratusan orang yang berada di dua jalur pendakian, yakni Senaru dan Sembalun. Upah seorang pramuantar Rp 150 ribu per hari, sedangkan pemandu Rp250 ribu per hari.</p>
          
          <p>&quot;Untuk di Senaru saja ada 200 jasa pendakian yang masing-masing memiliki tenaga &#39;porter/guide&#39;,&quot; kata Nur Saat.</p>
          ','lampiran' => 'images/local/berita/hari-hari.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:54','updated_at' => '2019-06-11 06:19:54'),
            array('id' => '4', 'pengunjung_id' => '4','gunung_id' => '49','judul' => 'Bangkitkan Perekonomian Pasca-gempa, Jalur Pendakian Gunung Rinjani Dibuka','text_pembuka' => 'Jalur pendakian Desa Aik Berik, salah satu dari empat jalur pendakian Gunung Rinjani resmi dibuka.','berita' => '<p><strong>Liputan6.com, Lombok -</strong>&nbsp;Jalur pendakian Desa Aik Berik, salah satu dari empat jalur pendakian&nbsp;Gunung Rinjani&nbsp;resmi dibuka. Hal ini diyakini penting dilakukan demi membangkitkan kembali perekonomian masyarakat sekitar taman nasional setelah lumpuh oleh gempa yang melanda Lombok Agustus silam.</p>
          
          <p>Sementara tiga jalur pendakian lain, yakni jalur pendakian Timbanuh, dan Sembalun di Kabupaten Lombok Timur, serta jalur pendakian di Senaru, Kabupaten Lombok Utara masih ditutup. Menurut informasi, jalur pendakian di Kabupaten Lombok Timur dan Lombok Utara kondisinya masih rusak berat.</p>
          
          <p>Bupati Loteng H Moh Suhaili FT mengatakan, dibukanya jalur pendakian&nbsp;Gunung Rinjani&nbsp;melalui wilayah Lombok Tengah ini, untuk ke depan pihaknya akan melakukan penataan sehingga bisa membawa manfaat bagi masyarakat khususnya di wilayah Utara Lombok Tengah. Karena itu, sangat diharapkan dukungan dari semua lapisan masyarakat untuk bersama-sama agar apa yang diikhtiarkan bisa terwujud.</p>
          
          <p>&ldquo;Peluang ini bisa menciptakan lapangan kerja masyarakat, sehingga bisa dijadikan tempat untuk mencari rizki,&rdquo; jelas Suhaili.</p>
          
          <p>Untuk ke depannya, jalur pendakian di wilayah Lombok Tengah akan ada 5 titik yaitu Desa Karangsidmen, Desa Lantan, Desa Seteling, dan Desa Aik Bual. Jalur tersebut nantinya akan bertemu di satu titik batas wilayah Gunung Rinjani yang dikelola oleh TNGR.</p>
          
          <p>&ldquo;Jalur pendakian ini nanti yang terindah, ternyaman, dan termodern sedunia. &ldquo;Ini juga bisa jadi penyeimbang antara pengembangan pariwisata di selatan dengan di utara,&rdquo; pungkas Suhaili.</p>
          
          <p>Ketua Tim Crisis Center Kementerian Pariwisata, Guntur Sakti, menurut informasi yang diterima Liputan6.com mengatakan, pihaknya menyambut baik pembukaan jalur pendakian Aik Berik Gunung Rinjani itu.</p>
          
          <p>Menurut Guntur, dengan dibukanya pendakian itu akan membuka kembali arus masuk wisatawan ke NTB karena&nbsp;Gunung Rinjani&nbsp;merupakan salah satu atraksi untuk membangkitkan pariwisata di NTB.</p>
          
          <p>&ldquo;Saat ini proses pemulihan untuk NTB sudah berjalan baik dan saat ini lombok sudah mulai ramai di kunjungi wisatawan. Menteri Pariwisata Arief Yahya pada World Travel Market (WTM) 2018 di London awal bulan November silam juga mempromosikan jika NTB sudah bangkit. Lombok sudah aman untuk di kunjungi,&quot; ujar Guntur Sakti.</p>
          
          <p>Sementara itu Kepala TNGR Provinsi NTB, Sudiyono mengatakan, pembukaan jalur ini sudah melalui persyaratan dan melibatkan semua pihak, karena hanya jalur ini yang layak, baik dari segi keamanan dan kebutuhan air bagi para pendaki.</p>
          
          <p>&quot;Jalur pendakian di Aik Berik dibuka resmi hari ini dalam rangka menghilangkan dahaga pendaki pecinta Rinjani,&quot; kata Sudiyono.</p>
          
          <p>Disamping itu, melalui jalur pendakian ini, para pendaki dapat menikmati destinasi wisata seperti air terjun, padang sapan, dan keindahan alam lainya. Sehingga para pendaki bisa lebih nyaman.</p>
          
          <p>Saat ini pihaknya juga sudah melengkapi fasilitas pendukung lainya seperti penunjuk arah, serta para petugas porter. Sementara Jalur Senaru dan Sembalun masih ditutup, karena kondisi belum aman pasca gempa.</p>
          ','lampiran' => 'images/local/berita/bangkitkan-perekonomian.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:55','updated_at' => '2019-06-11 06:19:55'),
            array('id' => '5', 'pengunjung_id' => '2','gunung_id' => '49','judul' => 'Kisah Gunung Rinjani dan Sasak, Pesan Nabi Adam kepada Ratu Anjani','text_pembuka' => 'Penamaan Gunung Rinjani tidak terlepas dari Dewi Anjani ibunya Hanoman yang dituturkan dalam berbagai versi penganut Islam di ','berita' => '<p><strong>Liputan6.com, Mataram -</strong>&nbsp;Gunung Rinjani&nbsp;terlihat begitu anggun berdiri kokoh di atas Pulau Lombok. Dan Lombok, Nusa Tenggara Barat dikenal juga sebagai pulaunya Suku Sasak.</p>
          
          <p>Suasana demikian terekam jika kita beranjangsana ke Sembalun Lawang yang menjadi pintu gerbang pendakian gunung yang memiliki ketinggian 3.726 Meter di atas permukaan laut (Mdpl) itu. Gunung Rinjani menjadi pusar bumi pulau yang dahulunya disebut Sunda Kecil karena posisinya yang berada tepat di tengah Pulau Lombok atau &#39;ibunya&#39; Suku Sasak.</p>
          
          <p>Sehingga tidaklah mengherankan keberadaannya memiliki nilai spiritualitas tersendiri bagi Suku Sasak, dan sampai sekarang masih dihormati serta dijaga&nbsp;Suku Sasak. Mereka percaya bahwa Suku Sasak berasal dari sana dan juga menjadi pusat peradaban.</p>
          
          <p>Dilansir&nbsp;<em>Antara</em>, penamaan Gunung Rinjani tidak terlepas dari Dewi Anjani, ibunya Hanoman yang dituturkan dalam berbagai versi penganut Islam di Lombok Barat maupun versi yang dituangkan dalam sejumlah naskah kuno berbahasa Sasak.</p>
          
          <p>Pemangku adat Sasak di sekitar Pura Lingsar, Suparman Taufik (81) meyakini Raden Ayu Mas Dewi Anjani yang mendirikan kerajaan di Sembalun atau di kaki Gunung Rinjani sekaligus menyebarkan Islam di sana.</p>
          
          <p>Raden Mas Ayu Anjani itu beradik kakak dengan Raden Mas Abdul Malik dan Raden Mas Abdul Rauf, sama seperti Anjani, keduanya juga dipercaya menjadi penyebar agama Islam di tanah Lombok.</p>
          
          <p>Ketiga beradik kakak itu berkaitan dengan tradisi Perang Topat (perang ketupat) di Pura Lingsar, Kabupaten Lombok Barat setiap bulan November dan Desember.</p>
          
          <p>Buku Bunga Rampai Kutipan Naskah Lama dan Aspek Pengetahuannya, Museum Negeri Nusa Tenggara Barat menyebutkan Nama Gunung Rinjani sangat mungkin berasal dari kata Rara Anjani yang berubah menjadi Renjani dan selanjutnya menjadi Rinjani seperti yang dikenal saat ini.</p>
          
          <p>Sehingga tidaklah mengherankan di daerah&nbsp;Lombok&nbsp;Timur juga dapat ditemui Desa Anjani sebagai bukti bahwa masyarakat sangat menghormati dan menghargai nama tersebut.</p>
          
          <h2><strong>Kisah Dewi Anjani</strong></h2>
          
          <p>Di dalam Naskah Doyan Neda berbahasa Sasak yang sudah diterjemahkan ke bahasa Indonesia pada buku bunga rampai itu, menyebutkan:</p>
          
          <p>1. Takdir Allah ada ratu jin perempuan, julukannya, Ratu Mas Prawira, Dewi Anjani namanya, serta mempunyai anak ayam, jantan betina dua ekor besar sekali, kukunya terbuat dari melela, di puncak gunung itulah, ia bermain mancakar-cakar tanah, lalu terhamparlah bumi, di puncak gunung Rinjani, setelah lama kemudian.</p>
          
          <p>2. Dewi Anjani lalu berkeliling, banyak iringan, dan patih Songan, perjalanannya terhalang-halang saja, karena banyak pohon kayu, gelap gulita dan sunyi senyap, lalu berkatalah beliau, wahai paman patih agung kuberi nama pulau ini pulau Sasak, hatur patih memberitahukan sesuatu.</p>
          
          <p>3. Menurut pesan kakek tuanku sang Nabi, Nabi Adam itulah, tuan hamba disebutkan, menguasai jin seantero bumi, Pulau Lombok julukannya, menjadi induk (tempat menyusu) semua bumi, benar sekarang aku ingat itu, aku telah disuruh oleh kakekku si Nabi Adam, agar jin bangsawan, aku keluarkan dari alam jin, untuk menjadi manusia.</p>
          
          <p>Teks yang tertuang dalam daun lontar itu bisa dikatakan bagaimana terciptanya manusia yang menghuni Pulau Lombok.</p>
          
          <p>Bait pertama itu membuktikan adanya proses geologi berupa pengikisan gunung dan bukit oleh kekuatan alam, bait kedua, menceritakan perjalanan Dewi Anjani bersama Patih Songan yang terhalang oleh pepohonan yang sangat rapat dan bersesakan sehingga pulau baru itu pun dinamainya Pulau Sasak (Sesak).</p>
          
          <p>Bait ketiga menceritakan bahwa setelah pulau itu diberi nama pulau Sasak maka Patih Songan mengingatkan Dewi Anjani akan pesan kakeknya Nabi Adam. Nabi Adam berpesan kepada Dewi Anjani agar ia menjadi raja dari seluruh jin di dunia. Dan iapun dipesan untuk mengisi pulau yang dijuluki pulau sasak atau Lombok itu dengan mengubah sekelompok jin bangsawan menjadi manusia.</p>
          
          <h2><strong>Tempat Pertapa</strong></h2>
          
          <p>Pusat kosmos Budayawan L Satria Wangsa menyebutkan dalam masyarakat Sasak, Rinjani dipandang sebagai pusat kosmos yang termanifestasi dalam dimensi kepercayaan, ritus-ritus, dan mitologi-mitologi.</p>
          
          <p>&quot;Kawasan Puncak Rinjani sangat disakralkan masyarakat Sasak, ada keyakinan bahwa di sana adalah tempat bermukim Ratu Jin Dewi Anjani. Dalam mitologi Sasak Dewi Anjani laksana ibu yang menurunkan Suku Sasak,&quot; katanya seminar tentang Interpretasi Babad Lombok pada 23 Mei 2017 di Museum NTB.</p>
          
          <p>Sebagian meyakini bahwa di Puncak Rinjani para ulama Waliyullah bermudzakarah pada waktu-waktu tertentu, bagi peminat ilmu-ilmu mistik, Rinjani merupakan tempat bertapa atau Nyenjariq yang paling baik untuk memperoleh ilmu-ilmu tersebut.</p>
          
          <p>Bahkan umat Hindu memilih Danau Segara Anak sebagai lokasi penyelenggaraan Upacara Mulang Pekelem.</p>
          
          <p>Dikatakan, di lingkar Rinjani di masyarakat-masyarakat adat juga sangat banyak dipraktikkan ritus-ritus berkenaan dengan pemuliaan alam. Di Sembalun ada upacara Nyayu-Ayu, di Lenek Upacara Rowah Gawah, di Selelos Benteq ada Memarek Bebekeq, di Gangga ada Muha Tahun-Muja Balit.</p>
          
          <p>&quot;Prosesi-prosesi adat juga hampir merata ada kita temui di komunitas-komunitas adat di lingkar Rinjani. Pun aturan-aturan adat yang disebut awig-awig yang berfungsi menjaga kelestarian alam, banyak diberlakukan di kawasan ini,&quot; katanya.</p>
          
          <p>Karena itu, kata dia, tidak dapat disangkal lagi Rinjani menempati posisi sentral dalam masyarakat Sasak, Rinjani merupakan &quot;pansek gumi&quot; demikian ungkapan Orang Sasak. &quot;Kalau panseknya kokoh maka bumi akan kokoh, tapi kalau panseknya goyah maka bumi khususnya Pulau Lombok akan goyah pula,&quot; katanya.</p>
          
          <p>&quot;Rinjani merupakan sumber dan penyangga kehidupan masyarakat Sasak, untuk itu melestarikan dan memuliakannya adalah tanggung jawab kita bersama,&quot; katanya.</p>
          ','lampiran' => 'images/local/berita/kisah-gunung.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:56','updated_at' => '2019-06-11 06:19:56'),
            array('id' => '6', 'pengunjung_id' => '4','gunung_id' => '49','judul' => 'Cuaca Ekstrem, 5 Gunung Ditutup untuk Para Wisatawan Pendaki','text_pembuka' => 'Kemenpar menyebut banyak yang berwisata ekstrem, termasuk mendaki gunung, demi kebutuhan untuk diakui.','berita' => '<p><strong>Liputan6.com, Jakarta &ndash;</strong>&nbsp;Ketua Tim TCC (Tourism Crisis Center) Kemenpar Guntur Sakti menyebut berwisata saat ini identik dengan kebutuhan untuk diakui dan menyenangi berwisata yang terkadang ekstrem dan berbeda. Meskipun begitu, para wisatawan yang memilih&nbsp;mendakiharus tetap memenuhi aspek-aspek baik keamanan, fisik dan keselamatan.</p>
          
          <p>Sejumlah Balai Taman Nasional yang mengelola jalur pendakian di Indonesia juga sudah mengeluarkan edaran mulai dari waspada cuaca ekstrem ataupun penutupan terkait pemulihan ekosistem dengan tenggat waktu yang berbeda.</p>
          
          <p>&quot;Wisatawan atau pendaki diharapkan untuk mematuhi peratuan tersebut,&quot; kata Guntur yang juga menjabat Kepala Biro Komunikasi Publik Kemenpar di Jakarta, Kamis, seperti dilansir&nbsp;<em>Antara</em>, Kamis, (10/1/2019).</p>
          
          <p>Saat ini, lima gunung ditutup untuk aktivitas pendakian. Jalur&nbsp;pendakian Gunung&nbsp;Merbabu, Jawa Tengah, ditutup sejak 30 Desember 2018 hingga waktu yang belum ditentukan. Jalur pendakian Gunung Gede Pangrango di Jawa Barat ditutup selama tiga bulan, mulai 1 Januari 2019 sampai 31 maret 2019.</p>
          
          <p>Selain itu, jalur pendakian Gunung Rinjani di Lombok, Nusa Tenggara Barat, ditutup mulai Selasa, 1 Januari 2019 hingga pemberitahuan selanjutnya. Jalur pendakian Gunung Prau akan ditutup selama tiga bulan, mulai dari 6 Januari hingga 5 April 2019. Sementara itu, Gunung Semeru di Jawa Timur ditutup secara total mulai 3 Januari 2019 hingga batas waktu yang belum ditentukan.</p>
          
          <p>Curah hujan yang tinggi, lanjut Guntur,&nbsp; ditambah angin kencang membuat suhu di permukaan yang lebih tinggi tentu lebih dingin, termasuk di atas gunung dan jalur pendakian, sehingga hipotermia menjadi salah satu hal yang bisa dialami&nbsp;pendaki.&nbsp;Hipotermia merupakan kondisi yang mana suhu tubuh menurun sampai di bawah 37 derajat celcius yang menjadi suhu tubuh normal manusia.&nbsp;</p>
          
          <p>&nbsp;</p>
          
          <h2><strong>Jatuh Korban tapi Tetap Aman</strong></h2>
          
          <p>Berdasarkan laporan yang diterima Tim TCC (Tourism Crisis Center) Kemenpar, beberapa wisatawan minat khusus mengalami hipotermia di beberapa gunung yang menjadi favorit wisatawan mendaki, seperti Gunung Semeru dan Gunung Slamet. Selain hipotermia, jalur pendakian yang licin juga bisa menjadi salah satu tantangan saat&nbsp;mendaki di cuaca ekstrem.</p>
          
          <p>Menurut Guntur, memperhatikan secara penuh arahan pengelola menjadi hal utama yang harus dilakukan wisatawan minat khusus. Selain itu, juga melakukan persiapan yang baik dan matang atas segala kebutuhan yang diperlukan untuk mendaki, mulai dari logistik, peralatan dan perlengkapan mendaki. Perhatikan juga karakter jalur dan trek jalur pendakian yang akan didaki.</p>
          
          <p>Hingga saat ini, Guntur memastikan tak ada wisatawan minat khusus yang mengalami kendala serius. Kemenpar melalui Tim TCC mereka juga akan terus memantau lokasi-lokasi pendakian yang menjadi favorit wisatawan.</p>
          
          <p>&quot;Tentunya kami juga terus berkoordinasi dengan kementerian/lembaga dan pihak-pihak terkait lainnya untuk sama-sama memantau perkembangan jalur&nbsp;pendakian&nbsp;di Indonesia. Karena seperti yang kita ketahui bersama, Indonesia memiliki daya tarik wisata alam yang sangat tinggi. Keindahan puncak gunung serta&nbsp;landscape&nbsp;yang ada di bawahnya selalu menarik wisatawan baik Nusantara ataupun mancanegara untuk berkunjung,&quot; ujar Guntur Sakti.</p>
          ','lampiran' => 'images/local/berita/cuaca-ekstrem.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:57','updated_at' => '2019-06-11 06:19:57'),
            array('id' => '7', 'pengunjung_id' => '3','gunung_id' => '49','judul' => 'Anjangsana Gunung Rinjani, Bermanja dengan \'Ibunya\' Suku Sasak','text_pembuka' => 'Gunung Rinjani menjadi pusar bumi pulau yang dahulunya disebut Sunda Kecil karena posisinya yang berada tepat di tengah Pulau Lombok atau ','berita' => '<p><strong>Liputan6.com, Lombok -</strong>&nbsp;Gunung Rinjani&nbsp;terlihat begitu anggun berdiri kokoh di atas Pulau&nbsp;Lombok. Dan Lombok, Nusa Tenggara Barat dikenal juga sebagai pulaunya Suku Sasak.</p>
          
          <p>Suasana demikian terekam jika kita beranjangsana ke Sembalun Lawang yang menjadi pintu gerbang pendakian gunung yang memiliki ketinggian 3.726 Meter di atas permukaan laut (Mdpl) itu.</p>
          
          <p>Gunung Rinjani menjadi pusar bumi pulau yang dahulunya disebut Sunda Kecil karena posisinya yang berada tepat di tengah Pulau Lombok atau &#39;ibunya&#39; Suku Sasak.</p>
          
          <p>Sehingga tidaklah mengherankan keberadaannya memiliki nilai spiritualitas tersendiri bagi Suku Sasak, dan sampai sekarang masih dihormati serta dijaga&nbsp;Suku Sasak. Mereka percaya bahwa Suku Sasak berasal dari sana dan juga menjadi pusat peradaban.</p>
          
          <p>Dilansir&nbsp;<em>Antara</em>, penamaan&nbsp;Gunung Rinjani&nbsp;tidak terlepas dari Dewi Anjani, ibunya Hanoman yang dituturkan dalam berbagai versi penganut Islam di Lombok Barat maupun versi yang dituangkan dalam sejumlah naskah kuno berbahasa Sasak.</p>
          
          <p>Pemangku adat Sasak di sekitar Pura Lingsar, Suparman Taufik (81) meyakini Raden Ayu Mas Dewi Anjani yang mendirikan kerajaan di Sembalun atau di kaki Gunung Rinjani sekaligus menyebarkan Islam di sana.</p>
          
          <p>Raden Mas Ayu Anjani itu beradik kakak dengan Raden Mas Abdul Malik dan Raden Mas Abdul Rauf, sama seperti Anjani, keduanya juga dipercaya menjadi penyebar agama Islam di tanah Lombok.</p>
          
          <p>Ketiga beradik kakak itu berkaitan dengan tradisi Perang Topat (perang ketupat) di Pura Lingsar, Kabupaten Lombok Barat setiap bulan November dan Desember.</p>
          
          <p>Buku Bunga Rampai Kutipan Naskah Lama dan Aspek Pengetahuannya, Museum Negeri Nusa Tenggara Barat menyebutkan, Nama Gunung Rinjani sangat mungkin berasal dari kata Rara Anjani yang berubah menjadi Renjani dan selanjutnya menjadi Rinjani seperti yang dikenal saat ini.</p>
          
          <p>Sehingga tidaklah mengherankan di daerah&nbsp;Lombok&nbsp;Timur juga dapat ditemui Desa Anjani sebagai bukti bahwa masyarakat sangat menghormati dan menghargai nama tersebut.</p>
          ','lampiran' => 'images/local/berita/anjangsana-gunung.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:58','updated_at' => '2019-06-11 06:19:58'),
            array('id' => '8', 'pengunjung_id' => '1','gunung_id' => '49','judul' => 'Ayo Ramai-Ramai Menjaga Rinjani dari Ulah Setan Pembakar Lahan','text_pembuka' => 'Pada musim kemarau, kobaran api bisa tiba-tiba muncul menghanguskan sabana dan pepohonan di pegunungan yang memiliki ketinggian 3.726 ','berita' => '<p><strong>Liputan6.com, Mataram -</strong>&nbsp;Ancaman kebakaran hutan selalu mengintai kawasan Taman Nasional&nbsp;Gunung Rinjani, Pulau Lombok, Nusa Tenggara Barat.</p>
          
          <p>Pada musim kemarau, kobaran api bisa tiba-tiba muncul menghanguskan sabana dan pepohonan di pegunungan yang memiliki ketinggian 3.726 meter di atas permukaan laut (mdpl) tersebut.</p>
          
          <p>Hampir setiap tahun, api menghanguskan sebagian kawasan sabana dan pepohonan besar di atas gunug tertinggi kedua di Indonesia setelah Gunung Kerinci di Pulau Sumatera dengan ketinggian 3.805 mdpl.</p>
          
          <p>Meskipun demikian, kebakaran hutan dan lahan di Provinsi NTB selama ini, termasuk di kawasan Gunung Rinjani, tidak separah di provinsi lainnya yang menyebabkan terjadinya kabut asap.</p>
          
          <p>Data Balai Taman Nasional&nbsp;Gunung Rinjani&nbsp;(BTNGR), ratusan hektare sabana hangus terbakar. Api membakar kawasan yang didominasi rumput ilalang pada 19 September 2015. Kejadian sejak siang hari tersebut berlangsung hingga beberapa hari lamanya, dilansir&nbsp;<em>Antara</em>.</p>
          
          <p>Peristiwa serupa juga terjadi pada 9 Oktober 2017. Api membakar rumput ilalang dan pohon cemara saat panas tering matahari. Api begitu cepat menjalar ke segala penjuru kawasan TNGR. Total luas kawasan yang terbakar mencapai puluhan hektare.</p>
          
          <p>Bahkan, kobaran api sempat mengarah ke pemukiman penduduk Kecamatan Sembalun, Kabupaten Lombok Timur, yang posisinya berada di kaki Gunung Rinjani. Namun, petugas berhasil mencegahnya.</p>
          
          <p>Perjuangan memadamkan api yang dilakukan petugas taman nasional bersama TNI-Polri dibantu warga lokal juga terjadi pada Juni 2018. Sekitar 20 hektare sabana hangus menjadi abu setelah terbakar api beberapa jam lamanya.</p>
          
          <p>Menurut Kepala BTNGR Sudiyono, upaya memadamkan api di dalam kawasan Gunung Rinjani, relatif sulit. Pasalnya, lahan yang terbakar berada pada kemiringan yang sulit dijangkau oleh petugas.</p>
          
          <p>Pemadaman api dilakukan dengan menyiramkan air menggunakan alat penyemprot sederhana (jet sutter). Pasokan air dibawa menggunakan mobil tangki ke dalam kawasan yang masih memungkinkan untuk masuk kendaraan roda empat.</p>
          
          <p>BTNGR memiliki dua mobil tangki air untuk memadamkan api dan membantu penyiraman material longsor yang menutup badan jalan di sekitar lingkar&nbsp;Gunung Rinjani.</p>
          
          <p>Namun, upaya pemadaman api menggunakan peralatan semprot terkadang menemui hambatan jika lokasi api jauh dari tempat parkir mobil tangki. Kondisi tersebut diperparah dengan tidak adanya sumber mata air di sekitar lokasi kebakaran.</p>
          
          <p>Dalam kondisi demikian, upaya pemadaman dilakukan secara tradisional (gepyok) agar api tidak meluas. Petugas bersama warga memukul kobaran api yang membakar rerumputan dengan &quot;gepyok&quot; yang terbuat dari ranting pepohonan basah.</p>
          
          <h2><strong>Ulah Manusia</strong></h2>
          
          <p>&nbsp;</p>
          
          <p>Setiap peristiwa kebakaran di dalam hutan Gunung Rinjani, selalu muncul dugaan terjadi akibat pembakaran lahan kebun di sekitar kawasan.</p>
          
          <p>&nbsp;</p>
          
          <p>Ada juga dugaan disebabkan ulah manusia yang membuang puntung rokok ke areal sabana. Api akhirnya berkobar karena rerumputan yang kering mudah terbakar meskipun hanya terkena api dari puntung rokok.</p>
          
          <p>Kebakaran seperti itu sering terjadi ketika musim pendakian. Rata-rata jumlah pendaki mencapai 2.000-an orang per hari. Namun, belum pernah ada warga yang diproses hukum. Pasalnya, pihak berwenang kesulitan mendapatkan bukti-bukti kuat, meskipun penyebab kebakaran diduga kuat karena perilaku manusia yang tidak bertanggung jawab.</p>
          
          <p>Kebakaran Permukaan Menurut Sudiyono, kebakaran di dalam kawasan Taman Nasional Gunung Rinjani masih tergolong kebakaran permukaan karena hanya membakar rerumputan kering.</p>
          
          <p>Berbeda dengan di Kalimantan dan Sumatera tergolong kebakaran bawah karena menghanguskan lahan gambut.</p>
          
          <p>Kebakaran permukaan memang tidak begitu berdampak besar terhadap habitat satwa. Pasalnya, hewan-hewan berukuran besar memiliki insting menyelamatkan diri ke kawasan yang ditumbuhi pepohonan besar ketika terjadi kebakaran padang rumput.</p>
          
          <p>Namun, hal yang paling diantisipasi adalah kebakaran bawah menjadi kebakaran atas, yakni terbakarnya pepohonan hingga kobaran api menjulang tinggi.</p>
          
          <p>Hal itu bisa terjadi jika api yang membakar padang rumput dibiarkan menjalar ke dalam kawasan hutan yang ditumbuhi pepohonan.</p>
          
          <p>Apalagi, hal itu tidak ditangani serius. Kobaran api juga bisa merembet ke pemukiman padat penduduk yang berada di bawah kaki Gunung Rinjani, khususnya desa-desa di Kecamatan Sembalun, Kabupaten Lombok Timur.</p>
          
          <p>Aktivitas pendakian sudah ditutup sejak terjadinya rentetan gempa bumi dengan magnitudo 6-7 Skala Richter (SR) yang terjadi pada 29 Juli hingga sepanjang Agustus 2018. Untuk sementara, tidak ada manusia yang naik gunung hingga batas waktu yang belum ditentukan.</p>
          
          <p>Sepinya para pendaki tentu berpengaruh terhadap kecilnya potensi kebakaran akibat ulah pendaki yang membuang puntung rokok sembarangan di dalam kawasan sabana.</p>
          
          <p>Namun, hal yang paling dikhawatirkan adalah pembakaran lahan kebun oleh warga tanpa memperhatikan bahaya yang bisa ditimbulkan. Jika aktivitas tersebut tidak dikontrol, api bisa merembet ke dalam kawasan taman nasional yang jaraknya dekat dengan lahan milik warga.</p>
          
          <p>&nbsp;</p>
          
          <h2><strong>Sosialisasi Bahaya Pembakaran Lahan</strong></h2>
          
          <p>&nbsp;</p>
          
          <p>Untuk mencegah terjadinya kebakaran hebat, BTNGR terus menerus melakukan sosialisasi bahaya pembakaran lahan kepada masyarakat di 38 desa lingkar Gunung Rinjani.</p>
          
          <p>&nbsp;</p>
          
          <p>Sosialisasi dilakukan oleh petugas yang tersebar di Resor Sembalun dan Joben, Kabupaten Lombok Timur, dan Resor Setiling di Kabupaten Lombok Tengah, serta Resor Senaru, Kabupaten Lombok Utara.</p>
          
          <p>Pihaknya juga terus mengaktifkan kelompok masyarakat yang tergabung dalam Masyarakat Peduli Api (MPA). Mereka selalu siap siaga dan cepat melapor kepada pihak berwenang ketika terjadi kebakaran di dalam kawasan hutan.</p>
          
          <p>Kepala Seksi Pengelolaan Taman Nasional Wilayah II BTNGR, Benedictus Rio Wibawanto, menyebutkan jumlah anggota MPA 90 orang. Mereka tersebar di Resor Sembalun 30 orang, Resor Senaru 30 orang, dan gabungan Resor Setiling-Joben 30 orang.</p>
          
          <p>Ada juga Masyarakat Mitra Polisi Kehutanan (MMP). Mereka adalah kelompok masyarakat sekitar hutan yang membantu polisi hutan (polhut) dalam pelaksanaan perlindungan hutan di bawah koordinasi, pembinaan, dan pengawasan instansi pembina.</p>
          
          <p>Anggota MMP lingkar Gunung Rinjani berjumlah 136 orang yang tersebar di empat resor di wilayah kerja BTNGR. Mereka berasal dari berbagai unsur, seperti kepala dusun, guru, dan ibu rumah tangga yang sukarela dan ikhlas membantu menjaga kelestarian kawasan hutan.</p>
          
          <p>BTNGR sebagai instansi vertikal di bawah Kementerian Kehutanan dan Lingkungan Hidup (LHK) juga membentuk kader konservasi. Mereka berasal dari semua kalangan, seperti guru, pecinta alam, anggota pramuka, dan ibu rumah tangga.</p>
          
          <p>Seluruh masyarakat yang memiliki kepedulian terhadap upaya menjaga Gunung Rinjani sudah pernah mendapatkan pelatihan, khususnya tentang teknis pemadaman api.</p>
          
          <p>Materi tersebut diberikan oleh petugas khusus yang ahli memadamkan kebakaran hutan maupun melakukan pencarian dan pertolongan.</p>
          
          <p>BTNGR memiliki dua petugas khusus yang tergabung dalam Satuan Manggala Agni Reaksi Taktis (SMART). Wadah tersebut dibentuk oleh Kementerian LHK dalam rangka menurunkan angka titik panas secara nasional pada 2010.</p>
          
          <p>Pada awal musim kemarau setiap tahun, para pihak terkait dan masyarakat berkumpul dalam suatu apel siaga kebakaran hutan bersama anggota TNI-Polri. Khusus untuk anggota MPA yang terlibat dalam upaya pemadaman api diberikan apresiasi, meskipun nilainya tidak seberapa dibandingkan dengan tugas yang harus dijalankan.</p>
          
          <p>Bahkan, mereka harus menahan haus dan bercucuran keringat karena terbatasnya air bersih untuk diminum ketika berhadapan dengan api.</p>
          
          <p>Semua yang terlibat dalam proses pemadaman api di dalam kawasan Taman Nsional Gunung Rinjani ibaratnya &quot;Pantang pulang sebelum api padam&quot;.</p>
          
          <p>Mereka rela berhari-hari di atas gunung mendirikan kemah pos, sampai api benar-benar tidak menyala lagi.</p>
          ','lampiran' => 'images/local/berita/ayo-ramai.webp','publish' => 'Public','created_at' => '2019-06-11 06:19:59','updated_at' => '2019-06-11 06:19:59'),
            array('id' => '9', 'pengunjung_id' => '3','gunung_id' => '49','judul' => 'Menampung Air Terbang di Kaki Gunung Rinjani','text_pembuka' => 'Jika tengah beruntung, cuaca cerah tepat pada tengah hari konon akan muncul pelangi. Kendati demikian, meski datang dengan cuaca tidak ','berita' => '<p><strong>Liputan6.com, NTB -</strong>&nbsp;Selama ini, air terjun yang dikenal di kaki&nbsp;Gunung Rinjani, Nusa Tenggara Barat, yakni Sendang Gile. Popularitasnya sudah terkenal baik di dalam negeri maupun mancanegara karena kemolekkan alamnya di areal objek wisata tersebut.</p>
          
          <p>Namun, jangan salah, terdapat satu air terjun lagi yang berada di kaki Gunung Rinjani, namanya Tiu Telep yang dalam bahasa lokal adalah tempat menampung air &quot;terbang&quot; yang mengucur tiada hentinya dari atas.</p>
          
          <p>Keduanya berada di Desa Senaru, Lombok Utara, yang tidak jauh dengan pintu gerbang pendakian Gunung Rinjani. Untuk air terjun Tiu Telep ini, dipastikan wisatawan akan takjub melihat lanskap alam yang benar-benar alami tersebut sehingga berat untuk meninggalkannya.</p>
          
          <p>Dengan sejumlah air terjun yang sejajar dan satu air lagi berada di paling atasnya, menjadi magnet tersendiri bagi para travelers penyuka air terjun.</p>
          
          <p>Jika tengah beruntung, cuaca cerah tepat pada tengah hari konon akan muncul pelangi. Kendati demikian, meski datang dengan cuaca tidak cerah, dijamin tidak akan mengurangi keeksotikannya.</p>
          
          <p>Sehingga tidaklah mengherankan mayoritas pengunjung yang mendatangi ke lokasi tersebut, berasal dari mancanegara yang menyukai tantangan tersendiri. Pasalnya bukan apa-apa untuk mencapai lokasi, pengunjung memerlukan perjalanan semi ekstrem.</p>
          
          <p>Dengan menapaki jalan setapak yang mendaki dan melintasi jembatan serta mengikuti aliran irigasi. Sampai menuruni sungai dengan di kiri kanan tebing sisa-sisa longsoran pasca gempa beberapa waktu lalu yang melanda Pulau Lombok. Sehingga memerlukan kesabaran tersendiri.</p>
          
          <p>Bahkan wisatawan sesekali harus melewati pohon yang tumbang. Namun, tantangan itu, merupakan perjalanan yang terasa nikmat jika dilalui dengan keceriaan untuk mencari surga tersembunyi di kaki&nbsp;Gunung Rinjani&nbsp;tersebut.</p>
          
          <p>Rasa lelah terasa namun hilang begitu saja saat dari kejauhan terdengar deru air sehingga akan memaksa langkah kaki untuk mencapai sumber suara itu. Walhasil rasa lelah itu terbayar tuntas saat melihat bentangan alam air terjun Tiu Kelep.</p>
          
          <p>Serta memaksa pengunjung untuk segera berendam di air yang benar-benar menyegarkan, dengan warna bening itu. Seperti diketahui air tersebut berasal dari [Gunung Rinjani](Gunung Rinjani &quot;&quot;).</p>
          
          <p>Jika tidak ingin berendam, pengunjung pun dapat berswafoto ria dengan latar balakang jajaran air terjun atau sekadar memercikan air ke muka setelah hampir 45 menit menapaki jalan setapak dari pintu gerbang objek wisata alam itu.</p>
          
          <h2><strong>Lokasinya Tersembunyi</strong></h2>
          
          <p>&nbsp;</p>
          
          <p>Lokasinya benar-benar tersembunyi di dasar dua punggungan gunung yang mengapit. Itulah yang menjadi nilai jual tersendiri. Meski jauh dari sarana yang memadai, tetap saja tidak mengurangi lokasi yang mirip surga sengaja diturunkan ke bumi.</p>
          
          <p>&nbsp;</p>
          
          <p>&quot;Sebenarnya jalur menuju ke air terjun Tiu Telep ini, bukan lewat sini, tapi lewat atas. Karena kena longsoran gempa, jadi kita harus melintasi sungai,&quot; kata Abdullah, salah seorang warga Desa Senaru.</p>
          
          <p>Ia juga menyebutkan kebanyakan yang mengunjungi objek wisata itu, berasal dari mancanegara seperti Eropa dan China. &quot;Terhitung jarang, wisatawan lokal yang ingin ke air terjun ini. Mungkin mereka berpikir jaraknya yang cukup jauh dan harus melewati jalan setapak yang lumayan ekstrem,&quot; paparnya.</p>
          
          <p>Setelah bosan berendam ria, di aliran air terjun itu. Pengunjung melanjutkan kembali perjalan pulang melewati jalan semula. Kebanyakan mereka akan mampir dahulu ke air terjun Sendang Gile.</p>
          
          <p>Air terjun Sendang Gile memiliki ketinggian sekitar 60 meter, namun aliran airnya hanya ada satu dengan dua umpakkan. Kendati demikian, tetap saja indah untuk dinikmati.</p>
          
          <p>Bagaimana tidak, setelah letih berjuang kembali dari air terjun Tiu Kelep dengan melewati jalan setapak. Pengunjungpun bisa berleha-leha di areal Sendang Gile.</p>
          
          <p>Tinggal memesan segelas kopi atau teh manis, pengunjung tinggal duduk melihat air terjun yang berada di hadapan mata. Tapi kalau belum puas juga bermain air, dipersilakan untuk terjun ke aliran sungai yang menampung curahan deras air tersebut.</p>
          
          <p>Nah di lokasi air terjun Sendang Gile ini, sudah ada warung milik penduduk setempat yang menjual makanan dan minuman serta tersedia juga fasilitas mushala dan tempat pemandian umum.</p>
          
          <p>Biasanya pada akhir pekan atau hari Minggu, banyak wisatawan yang mengunjungi objek wisata air terjun Sendang Gile. Meski saat ini, menurun jumlah wisatawannya pasca gempa.</p>
          
          <p>Menunggu polesan Potensi keindahan alam karya Sang Maha Kuasa itu, sebenarnya saat ini tinggal menunggu polesan manis dari pihak terkait khususnya pemerintah yang menangani bidang pariwisata.</p>
          
          <p>Salah satu yang bisa dipoles seperti membenahi jalan setapak yang ekstrem tersebut demi mengedepankan keselamatan si pengunjung. Kemudian rambu-rambu jalur yang berbahaya.</p>
          
          <p>&quot;Tinggal dipoles sedikit saja, saya yakin objek wisata itu bisa terkenal dan banyak dikunjungi wisatawan baik nusantara maupun luar negeri,&quot; kata Iwan, wisatawan asal Pondok Gede, Kota Bekasi, Jawa Barat.</p>
          
          <p>Setelah aspek prasarana dan sarana dipenuhi, pengelola bisa menjual paket perjalanan dan menjadi solusi ampuh sementara untuk menambah pemasukkan pendapatan warga setelah mata pencaharian selama ini terhenti dari profesi porter atau guide ke Gunung Rinjani.</p>
          
          <p>Seperti diketahui, Gunung Rinjani sampai sekarang masih tertutup untuk pendakian. Namun setidaknya objek wisata alam yang ada dapat dioptimalkan. Paket perjalanan itu bisa ditawarkan melalui media sosial. Hal itu terbukti banyak wisatawan mancanegara yang melancong ke air terjun tersebut.</p>
          
          <p>Kawasan Senaru juga masih menjadi tempat favorit untuk dikunjungi wisatawan mancanegara karena lokasinya berudara sejuk. Hingga tidak salahnya mengikuti tawaran paket perjalanan wisata.</p>
          
          <p>Nah saat ini, tinggal menunggu bagaimana mengembangkan potensi wisata air terjun Tiu Kelep, surga tersembunyi di kaki Gunung Rinjani.</p>
          ','lampiran' => 'images/local/berita/menumpang-air.webp','publish' => 'Public','created_at' => '2019-06-11 06:20:00','updated_at' => '2019-06-11 06:20:00'),
            array('id' => '10', 'pengunjung_id' => '2','gunung_id' => '49','judul' => 'Pendaki Rinjani yang Meninggal Saat Gempa Lombok Tiba di Sembalun Sore Ini','text_pembuka' => 'Pendaki Rinjani yang Meninggal Saat Gempa Lombok Tiba di Sembalun Sore Ini','berita' => '<p><strong>Liputan6.com, Jakarta -</strong>&nbsp;Jenazah Muhammad Ainul Takzim (26), korban meninggal akibat&nbsp;gempa Lombok, Minggu, 29&nbsp;Juli 2018, di kawasan Taman Nasional Gunung Rinjani, Nusa Tenggara Barat, masih dalam proses evakuasi. Jenazah&nbsp;staf Balai Litbang Lingkungan Hidup dan Kehutanan Makassar itu diperkirakan tiba di pintu Bawak Enao, Sembalun, Selasa sore.</p>
          
          <p>&quot;Kalau berangkatnya pagi ini (evakuasi jalur darat) kemungkinan sampai pintu Bawak Enao sekitar jam 15.00 Wita atau jam 16.00 Wita,&quot; kata Kepala Balai TNGR Sudiyono di Resor Sembalun, Selasa (31/7/2018).</p>
          
          <p>Menurut dia, tim penyelamat&nbsp;gempa Lombok&nbsp;yang sudah membawa jenazah Ainul Takzim, masih berada di antara jalur Danau Segara Anak dan Bukit Pelawangan pada pagi ini.</p>
          
          <p>&quot;Jadi kalau dari sini (Resor Sembalun), naik dulu sampai Bukit Pelawangan, kemudian turun ke arah danau. Pertengahan antara Bukit Pelawangan dengan danau, posisinya di situ,&quot; ujar Sudiyono seperti dilansir dari&nbsp;<em>Antara</em>.</p>
          
          <p>Berdasarkan informasinya, korban diduga meninggal dunia karena tertimpa longsor bebatuan ketika beranjak dari Danau Segara Anak, Gunung Rinjani.</p>
          
          <p>Korban yang berada di Gunung Rinjani itu terkena longsor akibat&nbsp;gempa di Lombok&nbsp;dan Pulau Sumbawa, Nusa Tenggara Timur pada Minggu, 29&nbsp;Juli 2018.</p>
          ','lampiran' => 'images/local/berita/pendaki-rinjani.webp','publish' => 'Public','created_at' => '2019-06-11 06:20:01','updated_at' => '2019-06-11 06:20:01')
          );

        DB::table('beritas')->insert($beritas);
    }
}
