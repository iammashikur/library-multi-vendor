
@extends('layouts.master')

@section('content')




    <!--===============================
    =            Hero Area            =
    ================================-->

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>বই বাজার</h1>
                        <p>বাংলায় এক নম্বর বই বিক্রির ওয়েবসাইট, যেখানে আপনি যেকোনো ধরনের বই, <br> দ্রুত হোম ডেলিভারি পেতে পারেন</p>
                        <div class="short-popular-category-list text-center">
                            <!-- <h2>Popular Category</h2> -->
                            <!-- <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-bed"></i> Hotel</a></li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-grav"></i> Fitness</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-car"></i> Cars</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-cutlery"></i> Restaurants</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-coffee"></i> Cafe</a>
                                </li>
                            </ul> -->
                        </div>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-md-12 align-content-center">
                                            <form method="GET" action="{{route('search_libraries')}}">
                                                <div class="form-row">

                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                            <option>বিভাগ</option>
                                                            <option value="1">Top rated</option>
                                                            <option value="2">Lowest Price</option>
                                                            <option value="4">Highest Price</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                            <option>জেলা</option>
                                                            <option value="1">Top rated</option>
                                                            <option value="2">Lowest Price</option>
                                                            <option value="4">Highest Price</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                            <option>শহর</option>
                                                            <option value="1">Top rated</option>
                                                            <option value="2">Lowest Price</option>
                                                            <option value="4">Highest Price</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 align-self-center">
                                                        <button type="submit" class="btn btn-primary w-100" style="border-radius: 30px;">

                                                            <i class="fa fa-search    "></i>

                                                            এখনই খুঁজুন</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <!--===================================
    =            Client Slider            =
    ====================================-->


    <!--===========================================
    =            Popular deals section            =
    ============================================-->

    <section class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>সবচেয়ে বেশি বিক্রি হওয়া বই</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- offer 01 -->
                <div class="col-lg-12">
                    <div class="trending-ads-slide">
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
    <div class="product-item bg-light">
        <div class="card">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <a href="single.html">
                    <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                    </li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                <div class="product-ratings">
                    <ul class="list-inline">
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
    <div class="product-item bg-light">
        <div class="card">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <a href="single.html">
                    <img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                    </li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                <div class="product-ratings">
                    <ul class="list-inline">
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
    <div class="product-item bg-light">
        <div class="card">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <a href="single.html">
                    <img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                    </li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                <div class="product-ratings">
                    <ul class="list-inline">
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
    <div class="product-item bg-light">
        <div class="card">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <a href="single.html">
                    <img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
                <ul class="list-inline product-meta">
                    <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                    </li>
                </ul>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                <div class="product-ratings">
                    <ul class="list-inline">
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>







    <footer class="footer section section-sm">
      <!-- Container Start -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
            <!-- About -->
            <div class="block about">
              <!-- footer logo -->
              <img src="images/log.png" alt="">
              <!-- description -->
              <p class="alt-color">বাংলায় এক নম্বর বই বিক্রির ওয়েবসাইট, যেখানে আপনি যেকোনো ধরনের বই, দ্রুত হোম ডেলিভারি পেতে পারেন</p>
            </div>
          </div>
          <!-- Link list -->
          <div class="col-lg-2 offset-lg-1 col-md-3">
            <div class="block">
              <h4>Site Pages</h4>
              <ul>
                <li><a href="#">Boston</a></li>
                <li><a href="#">How It works</a></li>
                <li><a href="#">Deals & Coupons</a></li>
                <li><a href="#">Articls & Tips</a></li>
                <li><a href="terms-condition.html">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
          <!-- Link list -->
          <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
            <div class="block">
              <h4>Admin Pages</h4>
              <ul>
                <li><a href="category.html">Category</a></li>
                <li><a href="single.html">Single Page</a></li>
                <li><a href="store.html">Store Single</a></li>
                <li><a href="single-blog.html">Single Post</a>
                </li>
                <li><a href="blog.html">Blog</a></li>



              </ul>
            </div>
          </div>
          <!-- Promotion -->
          <div class="col-lg-4 col-md-7">
            <!-- App promotion -->
            <div class="block-2 app-promotion">
              <div class="mobile d-flex">
                <a href="">
                  <!-- Icon -->
                  <img src="images/footer/phone-icon.png" alt="mobile-icon">
                </a>
                <p>Get the Dealsy Mobile App and Save more</p>
              </div>
              <div class="download-btn d-flex my-3">
                <a href="#"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
                <a href="#" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
      <!-- Container Start -->
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-12">
            <!-- Copyright -->
            <div class="copyright">
              <p>Copyright © <script>
                  var CurrentYear = new Date().getFullYear()
                  document.write(CurrentYear)
                </script>. All Rights Reserved, Developed by <a class="text-primary" href="https://bditfactory.com" target="_blank">It Factory</a></p>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <!-- Social Icons -->
            <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
              <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
              <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Container End -->
      <!-- To Top -->
      <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
      </div>
    </footer>
@endsection


@push('style')
<style>
    .bg-1 {
  background: url("{{url('/uploads/images/cover2.jpg')}}");
  background-size: cover;
  background-repeat: no-repeat;
}
</style>

@endpush
