@extends('layouts/app')
@section('content')

<!-- ======= Hero Section ======= -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper-container">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{asset('img/Product/sile1.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{asset('img/Product/sile2.jpg')}}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{asset('img/Product/sile3.jpg')}}" alt="">
              </div>

            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>ข้าวหมากโบราณ</h3>
            <ul>
              <li><strong>ชื่อ</strong>ขื่อหมากโบราณ</li>
              <li><strong>ประเภท</strong>ขนม</li>
              <li><strong>จำนวนที่มี</strong>: <input placeholder="Enter a number" required type="number" value="100"
                  min="-100" max="100" /></li>
              <li><strong>จำนวน</strong>: <input placeholder="Enter a number" required type="number" value="" min="-100"
                  max="100" /></li>
              <li><button><strong>สั่ง</strong></button></li>
              <li><button><strong>ยกเลิก</strong></button></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection