<?= $this->extend('Views/layout/myrepublic/template') ?>

<?= $this->Section('content'); ?>
<!-- #Carousel----
----------------------------------- -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="100">
            <img src="/asset/img/myrepublic/slide/1.jpg" class="d-block w-100" alt="wifi-murah">
        </div>
        <div class="carousel-item">
            <img src="/asset/img/myrepublic/slide/2.jpg" class="d-block w-100" alt="wifi-unlimited">
        </div>
        <div class="carousel-item">
            <img src="/asset/img/myrepublic/slide/3.jpg" class="d-block w-100" alt="wifi-tangerang-selatan">
        </div>
        <div class="carousel-item">
            <img src="/asset/img/myrepublic/slide/4.jpg" class="d-block w-100" alt="wifi-tangerang-selatan">
        </div>
    </div>
    <!-- End carosel -->

    <section>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width slides/quotes -->
            <div class="mySlides">
                <img src="/asset/img/myrepublic/1.png" alt="" width="100px" class="rounded">
                <h3>INTERNET CEPAT BUKANLAH MITOS</h3>
                <q>Banyak provider 4G LTE yang menjanjikan internet cepat.<br>Padahal kecepatan rata-rata untuk download pada koneksi 4G LTE hanyalah 20Mbps. MyRepublic menawarkan kecepatan hingga 500Mbps.</q>
                <!-- <p class="author">- John Keats</p> -->
            </div>
            <div class="mySlides">
                <img src="/asset/img/myrepublic/2.png" alt="" width="100px" class="rounded">
                <h3>UNLIMITED TANPA FUP</h3>
                <q>Fair Use Policy adalah pembatasan penggunaan kuota. Saat bandwidth telah melampaui batas pemakaian <br> provider akan menurunkan kecepatan internetnya. MyRepublic berkomitmen untuk tidak memberlakukan hal tersebut.</q>
                <!-- <p class="author">- Ernest Hemingway</p> -->
            </div>
            <div class="mySlides">
                <img src="/asset/img/myrepublic/3.png" alt="" width="100px" class="rounded">
                <h3>KONEKSI STABIL TANPA KENDALA</h3>
                <q>My Republic telah teruji kehandalannya. Kebanyakan koneksi internet akan terpengaruh saat cuaca buruk. <br> MyRepublic dengan teknologi fiber optik memastikan internetmu selalu stabil di cuaca apapun</q>
                <!-- <p class="author">- Thomas A. Edison</p> -->
            </div>
            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- Dots/bullets/indicators -->
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <!-- #pricing
---------------------------- -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2 class="text-center mb-5">Harga paket Internet Only</h2>
            </div>


            <div class="row">

                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="box">
                        <h3>Nova</h3>
                        <h3> 100Mbps+ Xtra</h3>
                        <hr>
                        <p class="price-b" style="font-size: 12px !important;color:#707172 !important;border-bottom: 1px solid #e4e4e4;padding-bottom:21px;"> &gt;4 Users / &gt;10 Komputer &amp; gadget </p>
                        <h4>SPEED <br> BOOST</h4>
                        <h3> <sup style="font-size: 12px;">Up TO</sup> 150Mbps</h3>
                        <hr>
                        <div class="card__label">
                            <img class=" lazyloaded" src="/asset/img/myrepublic/routereks.png">
                        </div>
                        <div class="new-prod-set-a"><span>Rp.</span> 469.000<span> NETT</span></div>
                        <div class="new-prod-set-ab">per bulan</div>
                        <div class="btnsty">atau</div>
                        <div class="new-prod-set-a-new"><span>Rp.</span>339.935<span>NETT</span></div>
                        <div class="new-prod-set-abc">per bulan dengan kartu kredit</div>
                    </div>
                    <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Nova 100Mbps SpeedBost Upto 150Mbps Internet only terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                        Saya mau ini </a>
                </div>

                <div class="col-lg-3 col-md-6  mb-2">
                    <div class="box">
                        <h3>Fast</h3>
                        <h3> 50Mbps+ Xtra</h3>
                        <hr>
                        <p class="price-b" style="font-size: 12px !important;color:#707172 !important;border-bottom: 1px solid #e4e4e4;padding-bottom:21px;">2-4 Users / 10 Komputer &amp; gadget </p>
                        <h4>SPEED <br> BOOST</h4>
                        <h3> <sup style="font-size: 12px;">Up TO</sup> 75Mbps</h3>
                        <hr>
                        <div class="new-prod-set-a"><span>Rp.</span> 409.000<span> NETT</span></div>
                        <div class="new-prod-set-ab">per bulan</div>
                        <div class="btnsty">atau</div>
                        <div class="new-prod-set-a-new"><span>Rp.</span>348.935<span>NETT</span></div>
                        <div class="new-prod-set-abc">per bulan dengan kartu kredit</div>
                    </div>
                    <a href="https://api.whatsapp.com/send?text=Halloadmin,Saya ingin pasang Internet MyRepublic paket Fast 50Mbps SpeedBost 75Mbps Internet only terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                        Saya mau ini </a>
                </div>

                <div class="col-lg-3 col-md-6  mb-4">
                    <div class="box">
                        <h3>Value</h3>
                        <h3> 30Mbps+ Xtra</h3>
                        <hr>
                        <p class="price-b" style="font-size: 12px !important;color:#707172 !important;border-bottom: 1px solid #e4e4e4;padding-bottom:21px;"> 1-2 Users / 5 Komputer &amp; gadget </p>
                        <h4>SPEED <br> BOOST</h4>
                        <h3> <sup style="font-size: 12px;">Up TO</sup> 45Mbps</h3>
                        <hr>
                        <div class="new-prod-set-a"><span>Rp.</span> 339.000<span> NETT</span></div>
                        <div class="new-prod-set-ab">per bulan</div>
                        <div class="btnsty">atau</div>
                        <div class="new-prod-set-a-new"><span>Rp.</span>289.425<span>NETT</span></div>
                        <div class="new-prod-set-abc">per bulan dengan kartu kredit</div>
                    </div>
                    <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Value 30Mbps SpeedBost 45Mbps Internet only terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                        Saya mau ini </a>
                </div>

                <div class="col-lg-3 col-md-6  mb-2">
                    <div class="box recommended">
                        <h3>Gamer</h3>
                        <h3> 150Mbps+ Xtra</h3>
                        <hr style="color: #fff;">
                        <p class="price-b" style="font-size: 10px !important;color:#fff !important;border-bottom: 1px solid #e4e4e4;padding-bottom:21px;"> 3 Gammer addict / &gt;10 Komputer &amp; gadget </p>
                        <h4>SPEED <br> BOOST</h4>
                        <h3> <sup style="font-size: 12px;">Up TO</sup> 200Mbps</h3>
                        <hr style="color: #fff;">
                        <div class="card__label">
                            <img class=" lazyloaded" src="/asset/img/myrepublic/routereks.png">
                        </div>
                        <div class=" new-prod-set-a" style="color:#fff "><span>Rp.</span> 679.000<span> NETT</span>
                        </div>
                        <div class="new-prod-set-ab" style="color:#fff ">per bulan</div>
                        <div class="btnsty">atau</div>
                        <div class="new-prod-set-a-new" style="color:#fff "><span>Rp.</span>578.425<span>NETT</span></div>
                        <div class="new-prod-set-abc">per bulan dengan kartu kredit</div>
                    </div>
                    <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Gamer SpeedBost 200Mbps Internet only terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                        Saya mau ini </a>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->


    <section class="section mt-5 mb-5 " style="background:#f7f7f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="asset/img/myrepublic/channeltv.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center mt-4" id="pricingTv">
                    <h2 class="text-center">TV Kabel Terbaik Keluarga</h2>
                    <p class="text-center">Ayo tonton acara apapun yang kamu suka sekarang! Nikmati berbagai pilihan channel TV kabel terbaik keluarga baik lokal maupun internasional yang kami berikan untuk anda secara lebih lengkap, mudah dan menyenangkan. Mulai dari Film Box Office, drama, sports, lifestyle, kartun, sampai siaran edukasi terbaik untuk anda dan keluarga. Lengkapi juga Paket TV Kabel terbaik anda dengan paket Add On yang sesuai kebutuhan anda.</p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Klik untuk Lihat Paket Internet + TV</a>
                </div>
            </div>
        </div>

    </section>



    <section id="pricing" class="pricing">
        <div class="container">
            <div class="row">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="section-title mb-4">
                        <h2 class="text-center">Harga paket Internet Plus Smart TV</h2>
                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="box">
                                <h3>Nova</h3>
                                <h3> 100Mbps+</h3>
                                <hr>
                                <div class="speed-tv">
                                    <p><span class="txt-speed">SPEEDBOST</span> 3 bulan</p>
                                    <p><sup>up to</sup> <span class=" num-speed">150Mbps</span></p>
                                </div>
                                <hr>
                                <h3>Xtra Combo TV</h3>
                                <p>Advance TV 65 Channels</p>
                                <div class="add-on">Termasuk Add-on:</div>
                                <p class="mt-1">Movies + Sport + <br> Entertaiment + <br>
                                    Knowledge & lifestyle</p>
                                <div class="channels">Total 80 Channels</div>
                                <div class="new-prod-set-a-new"><span>Rp.</span>599.000<span>NETT</span></div>
                                <div class="new-prod-set-abc">per bulan </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Nova 100Mbps SpeedBost 150Mps bundling TV  terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                                Saya mau ini </a>
                        </div>


                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="box">
                                <h3>Fast</h3>
                                <h3> 50Mbps+</h3>
                                <hr>
                                <div class="speed-tv">
                                    <p><span class="txt-speed">SPEEDBOST</span> 3 bulan</p>
                                    <p><sup>up to</sup> <span class=" num-speed">75Mbps</span></p>
                                </div>
                                <hr>
                                <h3>Xtra Combo TV</h3>
                                <p>Advance TV 65 Channels</p>
                                <div class="add-on">Termasuk Add-on:</div>
                                <p class="mt-1">Movies + Sport + <br> Entertaiment + <br>
                                    Knowledge & lifestyle</p>
                                <div class="channels">Total 80 Channels</div>
                                <div class="new-prod-set-a-new"><span>Rp.</span>489.000<span>NETT</span></div>
                                <div class="new-prod-set-abc">per bulan </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Fast 50Mbps SpeedBost 70Mbps bundling TV terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                                Saya mau ini </a>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="box">
                                <h3>Value</h3>
                                <h3> 30Mbps+</h3>
                                <hr>
                                <div class="speed-tv">
                                    <p><span class="txt-speed">SPEEDBOST</span> 3 bulan</p>
                                    <p><sup>up to</sup> <span class="num-speed">45Mbps</span></p>
                                </div>
                                <hr>
                                <h3>Xtra Combo TV</h3>
                                <p>Advance TV 65 Channels</p>
                                <div class="add-on">Termasuk Add-on:</div>
                                <p class="mt-1 on-line">Entertaiment + <br>
                                    Knowledge & lifestyle</p>
                                <div class="channels">Total 74 Channels</div>
                                <div class="new-prod-set-a-new"><span>Rp.</span>399.000<span>NETT</span></div>
                                <div class="new-prod-set-abc">per bulan </div>
                            </div>
                            <a href="https://api.whatsapp.com/send?text=Hallo,admin,Saya ingin pasang Internet MyRepublic paket Value 30Mbps SpeedBost 45Mbps bundling TV  terimakasih..&phone=6288214376816" class="card__footer btn--gradient">
                                Saya mau ini </a>
                        </div>
                    </div>
                </div>
    </section>
    <style>
        .speed-tv>p {
            margin: 0;
        }

        .speed-tv>p>.txt-speed {
            font-size: 28px;
            font-weight: bold;
            font-style: italic;
            margin-right: 2px;
        }

        .speed-tv>p>sup {
            font-size: 15px;
        }

        .speed-tv>p>.num-speed {
            font-size: 30px;
            font-weight: bolder;
            font-style: italic;
        }

        .add-on {
            background: rgb(0, 102, 255);
            padding-top: 3px;
            padding-bottom: 3px;
            color: #fff;
            border-radius: .25rem;
            font-weight: bold;
            font-style: italic;
        }

        .channels {
            font-weight: bold;

        }

        .on-line {
            margin-bottom: 2.4rem;
        }
    </style>

    <!-- ------------Promo
------------------------- -->
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="/asset/img/myrepublic/a.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="/asset/img/myrepublic/b.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="/asset/img/myrepublic/c.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <section class="mt-3">
        <div class="container ">
            <div class="wrap-center-frm">
                <p style="padding-bottom: 20px; text-align: center;padding-bottom:8px;" class="font-weight-bold"><strong>Syarat &amp; Ketentuan:</strong></p>
                <ul id="wrapset-term" class="wrapset-term" style="padding:10px;">
                    <li>harga paket hanya berlaku untuk berlangganan via website ini</li>
                    <li><strong>Harga NETT Termasuk biaya sewa perangkat, PPN 10% &amp; admin</strong></li>
                    <li>Harga sudah nett untuk paket TV</li>
                    <li>Kecepatan upload 50% dari download kecuali paket GAMER</li>
                    <li><b style="font-weight: bold;">Gratis biaya instalasi senilai Rp. 500.000 selama periode promosi</b></li>
                    <li>Biaya sewa 1 STB tambahan Rp. 44.000/bln</li>
                    <li>Paket dan channel dapat berubah sewaktu waktu</li>
                    <li><b style="font-weight: bold;">Paket promo berlaku di area tertentu hingga 30 November 2020</b></li>
                    <p>
                    </p>
                </ul>
                <p>
                </p>
            </div>
        </div>
    </section>


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq" style="background:#f7f7f7">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center">
                <h2>COVERED AREA JABODETA</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-toggle="collapse" class="collapsed" href="#faq-list-1">MyRepublic Area Tangerang <i class="icofont-simple-down  icon-show"></i></i><i class="icofont-simple-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                            <p> A DREAM RESIDENCE<br>
                                ANGGREK LOKA II-1<br>
                                ANGGREK LOKA II-2<br>
                                ANGGREK LOKA II-3<br>
                                ANILA<br>
                                ANTHEA<br>
                                APARTEMEN SAVERIA<br>
                                APARTMENT CASA DE PARCO<br>
                                APARTMENT CASA DE PARKO<br>
                                ARINDA PERMAI 1<br>
                                ARINDA PERMAI 2<br>
                                ASSANA FDT 1<br>
                                ASSANA FDT 2<br>
                                AZURA FDT 1<br>
                                AZURA FDT 2<br>
                                BANGUN REKSA INDAH II<br>
                                BANJAR WIJAYA – BLOK A20 RW 11<br>
                                BANJAR WIJAYA – CLUSTER ASIA<br>
                                BANJAR WIJAYA – CLUSTER CATTLEYA<br>
                                BANJAR WIJAYA – CLUSTER CEMARA 1<br>
                                BANJAR WIJAYA – CLUSTER CEMARA 2<br>
                                BANJAR WIJAYA – CLUSTER LANTANA<br>
                                BANJAR WIJAYA – CLUSTER NUSA INDAH<br>
                                BANJAR WIJAYA – CLUSTER VICTORIA<br>
                                BANJAR WIJAYA – CLUSTER VIOLA<br>
                                BARCELONA<br>
                                BUKIT MUTIARA INDAH<br>
                                BUKIT NUSA INDAH RW 13<br>
                                BUKIT NUSA INDAH RW 15<br>
                                BUKIT NUSA INDAH RW 16<br>
                                BUKIT PAMULANG INDAH RW 04<br>
                                BUKIT PAMULANG INDAH RW 13<br>
                                BUNGA PRATAMA PAMULANG<br>
                                CASPIA<br>
                                CASTILLA
                                CLUSTER VINAYA TERRACE<br>
                                DE BRASSIA<br>
                                DE CAJUPUTI<br>
                                DE FRANGIPANI<br>
                                DE HELICONIA<br>
                                De Latinos 1 (Virginia & Clio Vintage & La Vintage)<br>
                                De Latinos 2 (Bahamas & Carribean Island & Buenos Aires)<br>
                                De Latinos 3 A (Hacienda Mexicano)<br>
                                De Latinos 3 B (Brazillia Flamengo)<br>
                                De Latinos 4 (Santiago & De Rio 1 & 2 & Costarica)<br>
                                DEMOLINE Pamulang Permai RW 12<br>
                                De Latinos 5 (Patagonia & Centro Havana)<br>
                                DEMOLINE TANGERANG
                                DELATINOS SANTIAGO<br>
                                Demoline Greenwich Park Weekend Market<br>
                                DEMOLINE PRI<br>
                                DE NAARA<br>
                                DE PARK DE MAJA<br>
                                DUREN VILLAGE<br>
                                EXTREME PARK BSD<br>
                                FORESTA ALBERA<br>
                                FORESTA ALEVARE<br>
                                FORESTA ARIA<br>
                                FORESTA COLLINARE<br>
                                FORESTA FIORE<br>
                                FORESTA FOGLIO<br>
                                FORESTA FRESCO<br>
                                FORESTA GIARDINA<br>
                                FORESTA GIARDINA HEIGHT<br>
                                FORESTA NATURALE<br>
                                FORESTA PLACIDO<br>
                                FORESTA PRIMAVERA<br>
                                FORESTA STUDENTO<br>
                                FORESTA ULTIMO<br>
                                FOUNTAIN BLEAU<br>
                                GIRILOKA 1<br>
                                GIRILOKA 2<br>
                                GIRILOKA 3<br>
                                Golden Vienna II & Kencana Loka XII-3 Blok K & L<br>
                                Golden Vienna I & Kencana Loka XII-2 (Block E,F)<br>
                                GRAHA PERMAI RW 09 FDT 1<br>
                                GRAHA YASA ASRI<br>
                                GRAND PORIS RW 09 (FDT1)<br>
                                GRAND PORIS RW 09 (FDT2)<br>
                                GREENWICH – WHELFORD<br>
                                GREENCOVE<br>
                                GREENWICH PARK (MAYFIELD, SHEFIELD)<br>
                                GREENWICH PARK – WHITSAND<br>
                                GRIYA JAKARTA RW 07<br>
                                GRIYA KENCANA 1<br>
                                GRIYA KENCANA 2 RW 13<br>
                                GRIYA KENCANA 2 RW 14<br>
                                GRIYA KENCANA 2 RW 15<br>
                                GRIYALOKA SEK 1.1<br>
                                GRIYA LOKA SEK 1.2<br>
                                GRIYALOKA SEK 1.2<br>
                                GRIYALOKA SEK 1.2 EXT<br>
                                GRIYALOKA SEK 1.3<br>
                                GRIYALOKA SEK 1.3 EXT<br>
                                GRIYALOKA SEK 1.4<br>
                                GRIYALOKA SEK 1.4<br>
                                GRIYALOKA SEK 1.5<br>
                                GRIYALOKA SEK 1.6<br>
                                GRIYALOKA SEK 1.7<br>
                                GRIYA RAHMAH BINTARO<br>
                                HYLANDS – GREENWICH PARK<br>
                                ICE<br>
                                INIKA ISLAND<br>
                                KENCANA LOKA 12-2 (BLOK C,D,G,H)<br>
                                KENCANA LOKA 12.5<br>
                                Kencana Loka XII-3 (Block J) Taman Chrysant 1<br>
                                KENCANA LOKA XII-4 (BLOCK P) & TAMAN CHRYSANT 2<br>
                                KINTAMANI RESIDENCE<br>
                                KOMPLEK BARATA<br>
                                KOMPLEK GARUDA CIPONDOH<br> RW 06 (FDT 1)<br>
                                KOMPLEK GARUDA CIPONDOH RW 06 (FDT 2)
                                KOMPLEK KEHAKIMAN RW 08<br>
                                KOMPLEK KEHAKIMAN RW 13 – FDT 1<br>
                                KOMPLEK KEHAKIMAN RW 13 – FDT 2<br>
                                LAKESIDE<br>
                                LUXMORE – GREENWICH PARK<br>
                                METRO PERMATA 1 (FDT 1)<br>
                                METRO PERMATA 1 (FDT 2)<br>
                                METRO PERMATA1 RW 07 (FDT 1)<br> <br>
                                METRO PERMATA 1 RW 07 (FDT 2)<br>
                                NAVA PARK FRONT OFFICE<br>
                                NAVA PARK – LR3 (LANCEWOOD)<br>
                                NEO CATALONIA<br>
                                NERADA ESTATE<br>
                                NEW VIVACIA – THE EMINENT<br>
                                NUSALOKA SEK 14.1<br>
                                NUSALOKA SEK 14.2<br>
                                NUSALOKA SEK 14.3<br>
                                NUSALOKA SEK 14.4<br>
                                NUSALOKA SEK 14.5<br>
                                NUSALOKA SEK 14.6<br>
                                PALEM GANDA ASRI 1<br>
                                PAMULANG ASRI RW 04<br>
                                PAMULANG ELOK RW 14<br>
                                PAMULANG ESTATE RW 13<br>
                                PAMULANG ESTATE RW 21<br> FDT 2
                                PAMULANG ESTATE RW 24<br>
                                PAMULANG ESTATE RW 25<br>
                                PAMULANG GARDENIA<br>
                                PAMULANG PERMAI RW 10<br>
                                PAMULANG PERMAI RW 11<br>
                                PAMULANG PERMAI RW 12<br>
                                PAMULANG PERMAI RW 14<br>
                                PAMULANG PERMAI RW 14 (FDT 2)<br>
                                PAMULANG PERMAI RW 15<br>
                                PAMULANG PERMAI RW 23<br>
                                PAMULANG REGENCY RT 08 RW 05<br>
                                PAMULANG VILLAGE<br>
                                PASAR MODERN<br>
                                PAVILION RESIDENCE<br>
                                PERUMAHAN BUKIT INDAH RW 06<br>
                                PERUMAHAN BUKIT INDAH RW 08<br>
                                PERUMAHAN BUKIT INDAH RW 5<br>
                                PERUMAHAN CIPUTAT BARU RW 06<br>
                                PERUMAHAN CIREUNDEU RESIDENCE<br>
                                PERUMAHAN GUNUNG RAYA DALAM RT 05<br>
                                PERUMAHAN PERTAMINA RW 7 & 8<br>
                                PERUM AL-FALAH<br>
                                PERUM BENDA BARU RW 17<br>
                                PERUM BENDA BARU RW 18<br>
                                PERUM SERUA PERMAI RW 04<br>
                                PERUM SERUA PERMAI RW 05<br>
                                PERUM SERUA PERMAI RW 07<br>
                                PONDOK BENDA RESIDENCE<br>
                                PONDOK KACANG PRIMA RW 08<br>
                                PONDOK LAKAH PERMAI RW 16<br>
                                PONDOK PAYUNG MAS<br>
                                PORIS INDAH RW 01 (FDT 1)<br>
                                PORIS INDAH RW 01 (FDT 2)<br>
                                PORIS INDAH RW 02<br>
                                PORIS INDAH RW 05 (FDT 1)<br>
                                PORIS INDAH RW 05 (FDT 2)<br>
                                PORIS INDAH RW 05 (FDT 3)<br>
                                PORIS INDAH RW 06 FDT 1<br>
                                PORIS INDAH RW 06 FDT 2<br>
                                PORIS INDAH RW 06 FDT 3<br>
                                PORIS INDAH RW 07 (FDT 1)<br>
                                PORIS INDAH RW 07 (FDT 2)<br>
                                PRECIA – THE EMINENT<br>
                                PROVENCE PARKLAND<br>
                                PURI KARTIKA RW 06<br>
                                PURI KARTIKA RW 08<br>
                                PURI PAMULANG RW 09<br>
                                PURI PAMULANG RW 25<br>
                                PUSPITA LOKA<br>
                                REGENTOWN GOLD<br>
                                REGENT TOWN<br>
                                RENI JAYA RW 06 KEL PONDOK BENDA<br>
                                RENI JAYA RW 06 KEL PONDOK PETIR<<br>
                                    RENI JAYA RW 07<br>
                                    RENI JAYA RW 08<br>
                                    RENI JAYA RW 12<br>
                                    RENI JAYA RW 14 KEL PONDOK BENDA<br>
                                    RENI JAYA RW 17 KEL PAMULANG BARAT<br>
                                    RENI JAYA RW 20<br>
                                    Residence One Test<br>
                                    RUKO CASA DE PARCO<br>
                                    RUKO FORESTA BUSINESS LOFT 1<br>
                                    RUKO FORESTA BUSINESS LOFT 2<br>
                                    RUKO FORESTA BUSINESS LOFT 3<br>
                                    RUKO FORESTA BUSINESS LOFT SIGNATURE<br>
                                    RUKO GOLDEN BOULEVARD<br>
                                    RUKO GOLDEN MADRID 1<br>
                                    RUKO GOLDEN MADRID 2<br>
                                    RUKO GOLDEN VIENA<br>
                                    RUKO THE ICON<br>
                                    RUKO TOL BOULEVARD<br>
                                    SEVILLA<br>
                                    SF<br>
                                    Sinar Mas Land Custome<br>r Care
                                    SME – GOLDEN ROAD<br>
                                    SME – ITC BSD<br>
                                    SME – MALIBU<br>
                                    SML_PLAZA<br>
                                    TAMAN EDELWEISS<br>
                                    TAMAN GIRILOKA<br>
                                    TAMAN KEDAUNG FDT 1<br>
                                    TAMAN KEDAUNG FDT 2<br>
                                    TAMAN MANGU INDAH<br>
                                    TAMAN MANGU INDAH RW 12<br>
                                    TAMAN PROVENCE<br>
                                    TAMAN ROYAL 3 – CLUSTER EBONY<br>
                                    TAMAN ROYAL 3 – CLUSTER JATI<br>
                                    TAMAN TIRTA GOLF<br>
                                    TELAGA GOLF<br>
                                    TESTING CPE HUAWEI<br>
                                    THE AVANI AMARILLA & LAVANYA<br>
                                    THE AVANI CHADNA & ANANTA<br>
                                    THE AVANI DESHNA DIVENA<br>
                                    THE AVANI LIVENA DHESNA<br>
                                    THE AVANI NITTAYA ALEEKA<br>
                                    THE EMINENT ILLUSTRIA<br>
                                    THE EMINENT INGENIA<br>
                                    THE EMINENT – PRESTIGIA BLOK E<br>
                                    The Green 1 (Mirrage & Blossom Ville & Grand Canyon)<br>
                                    The Green 2 (Montecarlo & Bellagio & Banyan Ville)<br>
                                    The Green 3 (Vineyard & Manhattan Forum & Venetian)<br>
                                    THE ICON EASTERN <br>
                                    THE ICON ETERNITY<br>
                                    THE ICON HORIZON BROADWAY<br>
                                    THE ICON RITZONE<br>
                                    THE ICON SIMPLICITY<br>
                                    THE ICON VERDANTVIEW<br>
                                    THE ICON VERDANT VILLE<br>
                                    THE ICON WESTERN COSMO<br>
                                    TOWN HOUSE GRIYA AVIVA<br>
                                    VERMONT PARKLAND<br>
                                    VICTORIA RIVERPARK<br>
                                    VILLA ALVITA<br>
                                    VILLA BINTARO REGENCY<br>
                                    VILLA BINTARO RW 11<br>
                                    VILLA INDAH PAMULANG<br>
                                    VILLA INTI PERSADA RW 19<br>
                                    VILLA INTI PERSADA RW 19 (FDT 1)<br>
                                    VILLA INTI PERSADA RW 19 RT 07<br>
                                    VILLA INTI PERSADA RW 28 <br>
                                    VILLA MELATI MAS BLOK J<br>
                                    VILLA MELATI MAS BLOK O<br>
                                    VILLA MELATI MAS REGENCY BLOK B<br>
                                    VILLA MELATI MAS RW 09 BLOK C<br>
                                    VILLA MELATI MAS RW 09 BLOK P-T<br>
                                    VILLA MELATI MAS RW 09 FDT 1<br>
                                    VILLA MELATI MAS RW 09 FDT 2<br>
                                    VILLA MELATI MAS RW 09 FDT 3<br>
                                    VILLA PAMULANG MAS 1<br>
                                    VILLA PAMULANG MAS 2<br>
                                    VILLA PAMULANG RW 10<br>
                                    VILLA PAMULANG RW 11<br>
                                    VILLA PAMULANG RW 12<br>
                                    VIRGINIA LAGOON<br>
                                    VIVACIA 1 – THE EMINENT<br>
                                    WISMA PONDOK AREN<br></p>

                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Myrepublic Area Jakarta <i class="icofont-simple-down  icon-show"></i></i><i class="icofont-simple-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                APARTMENT AMBASSADOR<br>
                                APARTMENT CEMPAKA MAS<br>
                                APARTMENT FOUR SEASONS<br>
                                APARTMENT ITC PERMATA HIJAU<br>
                                APARTMENT ROXY MAS<br>
                                APARTMENT TAMAN RASUNA<br>
                                BIILING STORAGE<br>
                                BUNCIT 1<br>
                                BUNCIT 2<br>
                                BUNCIT 3<br>
                                BUNCIT 4<br>
                                BUNCIT 5<br>
                                CEMPAKA PUTIH 1<br>
                                CEMPAKA PUTIH 2<br>
                                CEMPAKA PUTIH 3<br>
                                CEMPAKA PUTIH 4<br>
                                CEMPAKA PUTIH 5<br>
                                CEMPAKA PUTIH 6<br>
                                CEMPAKA PUTIH 7<br>
                                CEMPAKA PUTIH 8<br>
                                CEMPAKA PUTIH 9<br>
                                CILANDAK 1<br>
                                CILANDAK 2<br>
                                CIRACAS 1<br>
                                CIRACAS 2<br>
                                CIRACAS 3<br>
                                CIRACAS 4<br>
                                CIRACAS 5<br>
                                CIRACAS 6<br>
                                CIRACAS 7<br>
                                CITRA GARDEN 3 BLOK A DAN BLOK F<br>
                                CITRA GARDEN 3 BLOK B<br>
                                CITRA GARDEN 3 BLOK C<br>
                                CITRA GARDEN 3 BLOK D<br>
                                CITRA GARDEN 3 BLOK E<br>
                                DEMOLINE APARTMENT TAMAN RASUNA<br>
                                DEMOLINE BUNCIT FUTSAL<br>
                                DEMOLINE HOTEL HEFF<br>
                                DEMOLINE HOUSE OF RELAX<br>
                                DEMOLINE ITC PERMATA HIJAU<br>
                                DEMO LINE KEBAYORAN BARU<br>
                                DEMO LINE KEMANG<br>
                                DEMOLINE MANGGA 2 RUKO BAHAN BANGUNAN<br>
                                DEMO LINE MARKETING EVENT<br>
                                DEMO LINE MENTENG<br>
                                DEMO LINE OLT FOUR SEASON<br>
                                DEMO LINE OLT ITC KUNINGAN<br>
                                DEMO LINE OLT ITC ROXY MAS<br>
                                DEMOLINE PERUM BUDI INDAH<br>
                                DEMO LINE PURI KEMBANGAN<br>
                                DEMO LINE RUKO MEGA GROSIR CEMPAKA MAS<br>
                                DEMO LINE RUKO SETIABUDI 3<br>
                                DEMO LINE RUKO TEXTILE MANGGA DUA<br>
                                DEMOLINE RUMAH MAKAN SUKA SUNDA SUKA<br>
                                DEMOLINE TAMAN SARI 4<br>
                                DEMO LINE TEBET<br>
                                GAMBIR<br>
                                GAMBIR 1<br>
                                GAMBIR 2<br>
                                GAMBIR 3<br>
                                GAMBIR 5<br>
                                GAMBIR 6<br>
                                GAMBIR 7<br>
                                GREEN GARDEN RW 03 (FDT 1)<br>
                                GREEN GARDEN RW 03 (FDT 2)<br>
                                GREEN GARDEN RW 03 (FDT 3)<br>
                                GREEN GARDEN RW 04<br>
                                GREEN VILLE (FDT 1)<br>
                                GREEN VILLE (FDT 2)<br>
                                JAGAKARSA FDT 1<br>
                                JAGAKARSA FDT 3<br>
                                JALAN E RW 03<br>
                                JATINEGARA<br>
                                JATINEGARA INDAH RW 09 (FDT 1)<br>
                                JATINEGARA INDAH RW 09 (FDT 2)<br>
                                KEBAGUSAN<br>
                                KEBAYORAN 1<br>
                                KEBAYORAN BARU<br>
                                KEBAYORAN LAMA FDT 1<br>
                                KEBAYORAN LAMA FDT 2<br>
                                KEBAYORAN LAMA FDT 3<br>
                                KEBAYORAN LAMA FDT 4<br>
                                KEBAYORAN LAMA FDT 5<br>
                                KEBAYORAN LAMA FDT 6<br>
                                KEBAYORAN LAMA FDT 7<br>
                                KEBAYORAN LAMA FDT 8<br>
                                KEBON JERUK RW 08<br>
                                KEMANG<br>
                                KEMAYORAN 1<br>
                                KEMAYORAN 2<br>
                                KOMPLEK BPK<br>
                                KOSAMBI BARU RW 15 (FDT 1)<br>
                                KOSAMBI BARU RW 15 (FDT 2)<br>
                                KS TUBUN 1<br>
                                KS TUBUN 2<br>
                                KS TUBUN 3<br>
                                KS TUBUN 4<br>
                                KS TUBUN 5<br>
                                KS TUBUN 6<br>
                                KS TUBUN 7<br>
                                KS TUBUN 8<br>
                                MAMPANG 1<br>
                                MAMPANG 2<br>
                                MAMPANG 3<br>
                                MANGGARAI<br>
                                MANGGARAI 2<br>
                                MATRAMAN<br>
                                MENTENG<br>
                                PANCORAN 1<br>
                                PANCORAN 2<br>
                                PASAR MINGGU<br>
                                PEMUKIMAN RW 10 KAYU PUTIH (FDT 1)<br>
                                PEMUKIMAN RW 10 KAYU PUTIH (FDT 2)<br>
                                PENJARINGAN 4<br>
                                PERMATA TAMAN PALEM<br>
                                PERUMAHAN DIRJEN PERHUBUNGAN UDARA<br>
                                PERUMAHAN TAMAN MAHKOTA<br>
                                PERUMAHAN UTAMA AREA RW 01 FDT 1<br>
                                PERUMAHAN UTAMA AREA RW 01 FDT 2<br>
                                PERUM BUDI INDAH (FDT 1)<br>
                                PERUM BUDI INDAH (FDT 2)<br>
                                PERUM BUDI INDAH (FDT 3)<br>
                                PLUIT<br>
                                PURI INDAH RW 04<br>
                                PURI INDAH RW 08<br>
                                PURI KEMBANGAN RW 02<br>
                                RUKO BAHAN BANGUNAN MALL MANGGA DUA<br>
                                RUKO BLOK A MALL MANGGA DUA<br>
                                RUKO ITC FATMAWATI<br>
                                RUKO ITC PERMATA HIJAU<br>
                                RUKO ITC ROXY MAS<br>
                                RUKO MALL MANGGA DUA<br>
                                RUKO MEGA GROSIR CEMPAKA MAS<br>
                                RUKO ORION MALL MANGGA DUA<br>
                                RUKO TEXTILE ITC MANGGA DUA<br>
                                RUKO WISMA EKA JIWA MALL MANGGA DUA<br>
                                SAWAH BESAR 1<br>
                                SAWAH BESAR 2<br>
                                SAWAH BESAR 3<br>
                                SETIABUDI 1<br>
                                SETIABUDI 3<br>
                                SETIABUDI 4<br>
                                SRENGSENG SAWAH<br>
                                TAMAN ALFA INDAH RW 05 (FDT 1)(AE)<br>
                                TAMAN ALFA INDAH RW 05 (FDT 2)(AE)<br>
                                TAMAN ALFA INDAH RW 05 (FDT 2)(UG)<br>
                                TAMAN ALFA INDAH RW 07 (FDT 1)(AE)<br>
                                TAMAN ALFA INDAH RW 07 (FDT 1)(UG)<br>
                                TAMAN ALFA INDAH RW 07 (FDT 2)(UG)<br>
                                TAMAN KEDOYA BARU RW 04 (FDT 1)<br>
                                TAMAN KEDOYA BARU RW 04 (FDT 2)<br>
                                TAMAN KEDOYA BARU RW 04 (FDT 3)<br>
                                TAMAN KOTA<br>
                                TAMAN MERUYA RW 04<br>
                                TAMAN PALEM LESTARI RW 15 (FDT 1)<br>
                                TAMAN PALEM LESTARI RW 15 (FDT 2)<br>
                                TAMAN PALEM LESTARI RW 15 (FDT 3)<br>
                                TAMAN PULO GEBANG<br>
                                TAMAN SARI<br>
                                TAMAN SARI 2<br>
                                TAMAN SARI 3<br>
                                TAMAN SARI 4<br>
                                TAMAN SURYA 3 (FDT 1)<br>
                                TAMAN SURYA 3 (FDT 2)<br>
                                TANJUNG DUREN SELATAN RW 03<br>
                                TANJUNG DUREN SELATAN RW 05<br>
                                TANJUNG DUREN UTARA RW 02<br>
                                TANJUNG DUREN UTARA RW 03 (FDT 1)<br>
                                TANJUNG DUREN UTARA RW 03 (FDT 2)<br>
                                TANJUNG DUREN UTARA RW 04<br>
                                TANJUNG DUREN UTARA RW 05<br>
                                TANJUNG DUREN UTARA RW 06 (FDT 1)<br>
                                TANJUNG PRIUK 2<br>
                                TEBET<br>
                                TENDEAN<br>
                                TES LINE OLT ANTAM 3<br>
                                TES LINE OLT LINTAS ARTA-OLT3<br>
                                TESTING CPE FIBER HOME<br>
                                TESTLINE ASHIDDIQIYAH – KEDOYA<br>
                                TESTLINE CDT OFFICE<br>
                                TESTLINE CEMPAKA MAS<br>
                                TESTLINE CEMPAKA MAS 2<br>
                                TESTLINE CEMPAKA MAS 3<br>
                                TESTLINE MODERNLAND<br>
                                TESTLINE PERMATA HIJAU<br>
                                TEST MORATEL<br>
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <a data-toggle="collapse" href="#faq-list-3" class="collapsed">MyRepublic Area Bogor<i class="icofont-simple-down  icon-show"></i></i><i class="icofont-simple-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                ANGGADA<br>
                                BOGOR BARAT 3<br>
                                BOGOR RAYA PERMAI RW 11<br>
                                BOGOR RAYA PERMAI RW 13<br>
                                BOGOR RAYA PERMAI RW 14<br>
                                BOGOR TIMUR GEDE<br>
                                BOGOR UTARA 1<br>
                                BOGOR UTARA 10<br>
                                BOGOR UTARA 2<br>
                                BOGOR UTARA 3<br>
                                BOGOR UTARA 4<br>
                                BOGOR UTARA 5<br>
                                BOGOR UTARA 6<br>
                                BOGOR UTARA 7<br>
                                BOGOR UTARA 8<br>
                                BOGOR UTARA 9<br>
                                BOJONG DEPOK BARU<br>
                                BOJONG DEPOK BARU II RW 13<br>
                                BOJONG DEPOK BARU II RW 14<br>
                                BOJONG DEPOK BARU II RW 16<br>
                                BOJONG DEPOK BARU II RW 17<br>
                                BOJONG DEPOK BARU RW 15<br>
                                BUDI AGUNG<br>
                                BUKIT CIMANGGU VILLA<br>
                                BUKIT KAYU MANIS RW 12<br>
                                BUMI CIBINONG ENDAH RW 10<br>
                                BUMI CIBINONG ENDAH RW 11<br>
                                BUMI CIBINONG ENDAH RW 12<br>
                                BUMI KENCANA ASRI (DHARMAIS) RW 13<br>
                                BUMI MENTENG ASRI<br>
                                BUMI MENTENG ASRI RW 15<br>
                                BUMI MENTENG ASRI RW 16 & RW 20<br>
                                BUMI MENTENG ASRI RW 17<br>
                                BUMI MENTENG ASRI RW 18<br>
                                BUMI PANGGUGAH<br>
                                CEMPLANG BARU TIMUR<br>
                                CIBINONG<br>
                                CILEBUT BUMI PERTIWI RW 12<br>
                                CILEBUT BUMI PERTIWI RW 13<br>
                                CILENDEK INDAH GREEN GARDEN<br>
                                CILUAR 3&4<br>
                                CILUAR PERMAI RW 08<br>
                                CILUAR PERMAI RW 09<br>
                                CIOMAS<br>
                                CIOMAS PERMAI RW 07,RW 09 & RW 11<br>
                                CIOMAS PERMAI RW 07 RT 01,03 & 04<br>
                                CIOMAS PERMAI RW 08 & RW 10<br>
                                CIOMAS PERMAI RW 14<br>
                                CIRIUNG CEMERLANG RW 14<br>
                                DEMOLINE BOGOR 1<br>
                                DEMOLINE BOGOR 2<br>
                                DEMOLINE BOGOR 3<br>
                                DEMOLINE BOGOR 4<br>
                                DEMO LINE RUKO YASMIN 6<br>
                                DUTA KENCANA 2 RW 11<br>
                                GRAHA PUSPASARI 1 RW 14<br>
                                GRAHA PUSPASARI 2 RW 15<br>
                                GRIYA INDAH BOGOR RW 14<br>
                                GRIYA MELATI<br>
                                GRIYA PERSADA RW 04<br>
                                GRIYA TELAGA PERMAI RW 19<br>
                                GRIYA BOGOR RAYA<br>
                                IPB 1<br>
                                IPB 1 RW 04<br>
                                IPB 1 RW 12<br>
                                JOHAR GRANDE<br>
                                KAVLING PANORAMA<br>
                                KEBUN RAYA RESIDENCE<br>
                                KEDUNG BADAK BARU RW 06<br>
                                MAYOR OKING CITEUREUP 2<br>
                                MEGA SENTUL BOUGENVILE RW 07<br>
                                MUTIARA CIMANGGIS RW 16<br>
                                NIRWANA ESTATE RW 13<br>
                                NIRWANA GOLDEN PARK<br>
                                PAKUAN REGENCY<br>
                                PERMATA CIMANGGIS<br>
                                PERSADA DEPOK<br>
                                PERUMAHAN SEMPUR RW 01 dan 02<br>
                                PERUMAHAN TAMAN KENARI<br>
                                PERUM CIBINONG GRIYA ASRI RW 08<br>
                                PERUM GAPERI RW 19<br>
                                PERUM GAPERI RW 20<br>
                                PERUM GAPERI RW 23<br>
                                PERUM GRIYA KALIBARU<br>
                                PERUM HAUR JAYA<br>
                                PERUM KOPWANI VILLAGE 2<br>
                                PERUM MEGA SENTUL ALAMANDA (FDT 1)<br>
                                PERUM MEGA SENTUL ALAMANDA (FDT 2)<br>
                                PERUM PERDAGANGAN RW 07<br>
                                PERUM PESONA LAGUNA RW 20<br>
                                PERUM PURI NIRWANA II RW 13<br>
                                PERUM TAMAN CIMANGGU RW 08<br>
                                PERUM TAMAN CIMANGGU RW 09<br>
                                PERUM TAMAN KENARI JAGORAWI RW 11<br>
                                PERUM TAMAN KENARI JAGORAWI RW 12<br>
                                PERUM TAMAN KENARI JAGORAWI RW 13<br>
                                PESONA CILEBUT 2<br>
                                PESONA LAGUNA 2 RW 22 (FDT 1)<br>
                                PESONA LAGUNA 2 RW 22 (FDT 2)<br>
                                PONDOK KENCANA PERMAI<br>
                                PONDOK KENCANA PERMAI RW 13<br>
                                PONDOK SUKAHATI RW 19<br>
                                PRIMATAMA RESIDENCE<br>
                                PURI NIRWANA 3 RW 14<br>
                                PURI NIRWANA 3 RW 15<br>
                                PURI NIRWANA 3 RW 16<br>
                                PURI NIRWANA II RW 12<br>
                                RUKO AREMA CIBINONG<br>
                                RUKO JALAN MAYOR OKING<br>
                                RUKO MAYOR OKING<br>
                                RUKO MAYOR OKING 2<br>
                                RUKO NIRWANA ESTATE<br>
                                RUKO YASMIN 6<br>
                                SINDANG BARANG ASRI RW 03<br>
                                SINDANG BARANG GRANDE<br>
                                SINDANG BARANG GRANDE<br>
                                SUKARAJA 1<br>
                                SUKARAJA 2<br>
                                TAJUR 1<br>
                                TAMAN CIBALAGUNG INDAH RW 05<br>
                                TAMAN CIMANGGU RW 05<br>
                                TAMAN CIMANGGU RW 10<br>
                                TAMAN CIMANGGU RW 11 & 12<br>
                                TAMAN DRAMAGA INDAH RT 04 RW 02<br>
                                TAMAN PAGELARAN RW 09<br>
                                TAMAN PAGELARAN RW 10<br>
                                TAMAN PAJAJARAN RW 11<br>
                                TAMAN TIRTA CIMANGGU RW 13<br>
                                TAMAN YASMIN SEKTOR 1 RW 15<br>
                                TANAH SEREAL<br>
                                TANAH SEREAL RW 02<br>
                                TANAH SEREAL RW 03<br>
                                TANAH SEREAL RW 04<br>
                                TANAH SEREAL RW 05<br>
                                TESTLINE OLT PAJAJARAN<br>
                                VILLA BOGOR GOLF<br>
                                VILLA BOGOR INDAH 2 RW 14<br>
                                VILLA BOGOR INDAH 3<br>
                                VILLA BOGOR INDAH 5<br>
                                VILLA BOGOR INDAH 5<br>
                                VILLA MUTIARA BOGOR 1 RW 12 (FDT 1)<br>
                                VILLA MUTIARA BOGOR 1 RW 12 (FDT 2)<br>
                                VILLA MUTIARA BOGOR 1 RW 12 (FDT 3)<br>
                                VILLA MUTIARA BOGOR RW 11 FDT 1<br>
                                VILLA MUTIARA BOGOR RW 11 FDT 2<br>
                                VISAR INDAH PRATAMA RW 12<br> </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <a data-toggle="collapse" href="#faq-list-4" class="collapsed">MyRepublic Area Depok <i class="icofont-simple-down  icon-show"></i></i><i class="icofont-simple-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                ANYELIR 3<br>
                                APARTEMEN TAMAN MELATI<br>
                                BDN<br>
                                BEJI TIMUR RW 01<br>
                                BEJI TIMUR RW 02<br>
                                BEJI TIMUR RW 03<br>
                                BEJI TIMUR RW 04<br>
                                BEJI TIMUR RW 05<br>
                                BEJI TIMUR RW 06<br>
                                Beji Timur RW. 07<br>
                                BELLA CASA RESIDENCE-CLUSTER JASMINE RW 08 (FDT 2)<br>
                                BELLA CASA RESIDENCE RW 05 ALAMANDA AND BOUGENVILLE<br>
                                BELLA CASA RESIDENCE RW 08 (FDT 1)<br>
                                BELLA CASA RESIDENCE RW 23<br>
                                BUKIT CENGKEH BERBUNGA RW 24<br>
                                BUKIT CINERE INDAH RW 16<br>
                                BUKIT MEKAR PERDANA RW 20<br>
                                BUKIT NIRWANA<br>
                                BUKIT PERMAI<br>
                                CAHAYA GARUDA PERMAI<br>
                                CAHAYA GARUDA PERMAI<br>
                                CAHAYA GARUDA RESIDENCE<br>
                                CALISTA REGENSI<br>
                                CIBUBUR GARDEN<br>
                                CINERE ESTATE BLOK F RW 15<br>
                                CLUSTER PANORAMA HIJAU<br>
                                Depen RW 11 Kel. Harja Mukti<br>
                                DEPOK INDAH 1 RW 17<br>
                                DEPOK-JALAN LEGONG BLOK 1<br>
                                DEPOK JAYA AGUNG<br>
                                DEPOK SAWANGAN PERMAI<br>
                                DEPPEN RW 16 KEL SUKA TANI<br>
                                GRAHA CINERE MODERN<br>
                                GREEN PITARA<br>
                                GRIYA ASRI CINERE<br>
                                GRIYA CIMANGGIS<br>
                                GRIYA ELOK<br>
                                GRIYA LEMBAH DEPOK RW 25<br>
                                GRIYA PESONA ALAM<br>
                                GRIYA SAKINAH<br>
                                JATI JAJAR ESTATE RW 11<br>
                                KAVLING KOSTRAD CIMANGGIS<br>
                                KAVLING UI TIMUR<br>
                                KEMANG SWATAMA<br>
                                KOMPLEK BBD<br>
                                KOMPLEK BUMI SAWANGAN ELOK RW 07<br>
                                KOMPLEK BUMI SAWANGAN ELOK RW 10<br>
                                KOMPLEK DEPPEN RW 10<br>
                                KOMPLEK DEPPEN RW 17<br>
                                KOMPLEK DEPT KOPERASI<br>
                                KOMPLEK KOPASSUS PELITA 1 RW 09<br>
                                KOMPLEK KOPASSUS PELITA 1 RW 11<br>
                                KOMPLEK KOPASSUS SEDAYU RW 13<br>
                                KOMPLEK KRAMA YUDHA TIGA BERLIAN<br>
                                KOMPLEK PELNI RW 17<br>
                                KOMPLEK PELNI RW 18<br>
                                KOMPLEK PELNI RW 19<br>
                                KOMPLEK PERMATA ARCADIA<br>
                                KOMPLEK PERTAMINA / IPTN<br>
                                KOMPLEK SUKAMAJU PERMAI<br>
                                KOMPLEK SUKATANI RW 14<br>
                                KOMPLEK SUKATANI RW 15<br>
                                KOMPLEK SUKATANI RW 18<br>
                                KOMPLEK SUKATANI RW 20<br>
                                LEMBAH CINERE INDAH<br>
                                LEMBAH HIJAU GOBEL<br>
                                MAMPANG INDAH 1 RW 08<br>
                                MAMPANG INDAH 2<br>
                                MAMPANG INDAH 2 RT 5<br>
                                MEGAPOLITAN CINERE ESTATE RW 13<br>
                                MEGAPOLITAN CINERE ESTATE RW 14<br>
                                MEGAPOLITAN CINERE ESTATE RW 18<br>
                                MUTIARA DARUSALAM<br>
                                MUTIARA DEPOK (FDT 1)<br>
                                MUTIARA DEPOK (FDT 2)<br>
                                NUANSA DEPOK 99<br>
                                OMA INDAH 2<br>
                                PALEM GANDA ASRI (FDT 1)<br>
                                PALEM GANDA ASRI (FDT 2)<br>
                                PANCORAN MAS PERMAI RW 07<br>
                                PEARL GARDEN SAWANGAN<br>
                                PELITA AIR SERVICE RW 15<br>
                                PERMATA ARCADIA – DE BALE<br>
                                PERMATA DEPOK REGENCY ZONA JAMRUD<br>
                                Permata Duta RW 12<br>
                                PERMATA DUTA RW 12 & PERMATA DUTA RW 25<br>
                                Permata Duta RW.25<br>
                                PERMATA GREEN CINERE<br>
                                PERMATA JASINDO LESTARI<br>
                                PERUMAHAN PERTAMINA<br>
                                PERUMAHAN PESONA FARIA<br>
                                PERUM BPI<br>
                                PERUM BUKIT SAWANGAN INDAH RW 05<br>
                                PERUM CIMANGGIS INDAH RW 05 & RW 11<br>
                                PERUM DEPOK 1 RW 01<br>
                                PERUM DEPOK TIMUR RW 09<br>
                                PERUM DEPOK TIMUR RW 10<br>
                                PERUM DEPOK UTARA, BEJI RW 06<br>
                                PERUM DEPOK UTARA, BEJI RW 07<br>
                                PERUM DEPOK UTARA, BEJI RW 08<br>
                                PERUM PUPUK KUJANG<br>
                                PERUM TUGU INDAH<br>
                                PESONA CINERE RESIDENCE<br>
                                PESONA KHAYANGAN<br>
                                PESONA KHAYANGAN II RW 28 (FDT 1)<br>
                                PESONA KHAYANGAN II RW 28 (FDT 2)<br>
                                PESONA MADANI<br>
                                PITARA VILLAGE<br>
                                PONDOK CIBUBUR<br>
                                PONDOK DUTA 2<br>
                                PURI ANGGREK MAS<br>
                                PURI CINERE HIJAU & PERUM RANGKAPAN INDAH<br>
                                PURI DEPOK MAS<br>
                                PURI KENCANA PERMAI<br>
                                QORYATUSSALAM SANI<br>
                                ROSE GARDEN<br>
                                RUKO ITC DEPOK<br>
                                SAWANGAN ELOK RW 11<br>
                                SAWANGAN REGENCY<br>
                                SERSAN ANING RW 07<br>
                                STUDIO ALAM INDAH<br>
                                STUDIO ALAM RESIDENT<br>
                                SUKMA JAYA PERMATA<br>
                                TAMAN ANYELIR 2<br>
                                TAMAN ANYELIR 3<br>
                                TAMAN CIPAYUNG<br>
                                TAMAN DEPOK PERMAI<br>
                                TAMAN MANGGIS INDAH<br>
                                TAMAN SAWANGAN RESIDENCE & PERUM JOGLO<br>
                                TAMAN TIGA PUTRA<br>
                                TELAGA GOLF SAWANGAN CLUSTER BALI<br>
                                TELAGA GOLF SAWANGAN CLUSTER BELANDA<br>
                                TELAGA GOLF SAWANGAN CLUSTER ESPANOLA<br>
                                TELAGA GOLF SAWANGAN CLUSTER FRANCE<br>
                                TELAGA GOLF SAWANGAN CLUSTER GREAT BRITAIN<br>
                                TELAGA GOLF SAWANGAN CLUSTER MIAMI & MANACO & MALACA<br>
                                TERATAI RESIDENCE<br>
                                THE LIMO RESIDENCE<br>
                                TIRTA MANDALA RW 18 & TIRTA MANDALA RT 04/04<br>
                                TIRTA MANDALA RW 19<br>
                                VILLA CEMARA<br>
                                VILLA CIBUBUR INDAH<br>
                                VILLA CIBUBUR INDAH 2<br>
                                VILLA CIBUBUR INDAH 3<br>
                                VILLA CINERE HIJAU 1<br>
                                VILLA CINERE HIJAU 2 RW 05<br>
                                VILLA MUTIARA CINERE<br>
                                VILLA SANTIKA<br>
                                WISMA CAKRA<br> </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->
    <script src="/asset/js/myrepublic/script.js"></script>
    <?= $this->endSection(); ?>