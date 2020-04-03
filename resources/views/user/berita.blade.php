@extends('layouts.user')

@section('content')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12" align="center">
                <div class="bradcam_text ">
                    <h3>Berita COVID-19 di Pekanbaru</h3><br />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->




<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>03</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="event_details.html">
                            <h4>Pasien Corona Bertambah</h4>
                        </a>
                        <p>
                            <span>
                                <i class="flaticon-clock"></i>
                                10:30 pm
                            </span>
                            <span>
                                <i class="flaticon-calendar"></i>
                                21Nov 2020
                            </span>
                            <span>
                                <i class="flaticon-placeholder"></i>
                                AH Oditoriam
                            </span>
                        </p>
                    </div>
                </div>
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>10</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="event_details.html">
                            <h4>ODP Bertambah</h4>
                        </a>
                        <p>
                            <span>
                                <i class="flaticon-clock"></i>
                                10:30 pm
                            </span>
                            <span>
                                <i class="flaticon-calendar"></i>
                                21Nov 2020
                            </span>
                            <span>
                                <i class="flaticon-placeholder"></i>
                                AH Oditoriam
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- recent_event_area_end  -->


@endsection
