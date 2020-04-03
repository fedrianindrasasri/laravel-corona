@extends('layouts.user')

@section('content')

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" align="center">
                <div class="bradcam_text ">
                    <h3>Pekanbaru Tanggap COVID-19</h3><br />
                    <p>Hubungi Layanan Pekanbaru Tanggap COVID-19</p>
                    <a href="#" class="boxed-btn3"><i class="fa fa-phone" aria-hidden="true"></i> 08000000000</a>
                    <a href="#" class="boxed-btn3"><i class="fa fa-phone" aria-hidden="true"></i> 08000000000</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- service_area_start  -->
<div class="service_area gray_bg">
    <div class="container">
        <p>Update Terakhir : 19 Maret 2020</p>
        <div class="row justify-content-center ">
            <div class="col-lg-4 col-md-6">
                <div class="single_service d-flex align-items-center ">
                    <div class="icon">
                        <i class="flaticon-book"></i>
                    </div>
                    <div class="service_info">
                        <p>ODP Orang Dalam Pemantauan</p>
                        <h4>10 Orang</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service d-flex align-items-center ">
                    <div class="icon">
                        <i class="flaticon-calendar"></i>
                    </div>
                    <div class="service_info">
                        <p>PDP Pasien Dalam Pengawasan</p>
                        <h4>10 Orang</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service d-flex align-items-center ">
                    <div class="icon">
                        <i class="flaticon-error"></i>
                    </div>
                    <div class="service_info">
                        <p>Kasus Terkonfirmasi</p>
                        <h4>10 Orang</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--/ service_area_start  -->
<div class="popular_program_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Peta Sebaran Kasus COVID-19 di Riau</h3>
                    <p>Sumber : Dinas Kesehatan Provinsi Riau | Update : 18 Maret 2020 12.00</p>
                </div>

                <div id="map" class="map"></div>

            </div>
        </div>
    </div>
</div>


<div class="event_details_area section__padding gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Tentang COVID-19</h3>
                </div>
                <div class="single_event d-flex align-items-center">
                    <div class="thumb">
                        <img src="{{asset('asset/user/img/corona_img.png')}}" alt="">
                    </div>
                    <div class="event_details_info">
                        <div class="event_info">
                            <a href="#">
                                <h4>Apa Itu Corona Virus</h4>
                            </a>
                        </div>
                        <p class="event_info_text">
                            Pneumonia Coronavirus Disease 2019 atau COVID-19 adalah penyakit peradangan paru yang
                            disebabkan oleh Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis
                            yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok,
                            nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>
                        <div class="event_info">
                            <a href="#">
                                <h4>Bagaimana COVID-19 Menular?</h4>
                            </a>
                        </div>
                        <p class="event_info_text">
                            Cara penularan SARS-CoV-2 penyebab COVID-19 ialah melalui kontak dengan droplet saluran
                            napas penderita. Droplet merupakan partikel kecil dari mulut penderita yang mengandung kuman
                            penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara. Droplet dapat melewati
                            sampai jarak tertentu (biasanya 1 meter).
                        </p>
                        <p>
                            Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau
                            bersin. Namun, partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di
                            udara dalam waktu yang lama. Oleh karena itu, orang yang sedang sakit, diwajibkan untuk
                            menggunakan masker untuk mencegah penyebaran droplet. Untuk penularan melalui makanan,
                            sampai saat ini belum ada bukti ilmiahnya.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">

                <div class="section_title text-center">
                    <h3>Daftar Rumah Sakit Rujukan </h3>
                    <p>Di Riau</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            <h4>RSU Dr. Hasan Sadikin </h4>
                            <p>Jl. Pasteur No. 38, Pekanbaru </p>
                            <a href="#" class="genric-btn primary-border circle arrow">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                08000000000
                                <span class="lnr lnr-arrow-right"></span>
                            </a>
                            <a href="#" class="genric-btn primary-border circle arrow">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                08000000000
                                <span class="lnr lnr-arrow-right"></span>
                            </a>
                        </blockquote>
                    </div>
                </div>
                <div class="section_title text-center">
                    <a href="{{route('rumahsakit')}}" class="genric-btn info circle arrow">
                        Lebih Banyak
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="event_details_area section__padding gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Infografik COVID-19</h3>
                </div>
                <!--  Demos -->
                <section id="demos" class="text-center" align="center">
                    <div class="row">
                        <div class="col-md-12 columns">
                            <div class="owl-carousel owl-theme" align="center">
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/1.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card" style="width: 15rem;">
                                        <img class="card-img-top" src="{{asset('asset/user/img/corona-img/3.jpeg') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section_title text-center">
                                <a href="{{route('infografik')}}" class="genric-btn info circle arrow">
                                    Lebih Banyak
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
