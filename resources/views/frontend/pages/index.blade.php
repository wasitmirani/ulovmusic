@extends('layouts.frontend.master')


@section('content')
 <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 dis-flex-start">
            <h2>Featured artist..</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <form>
              <input type="email" class="form-control" placeholder="Search Anything">
              <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="col-lg-6">
            <img src="{{asset('assets/images/klipartz.png')}}" class="img-fluid" class="img-fluid" alt="">
          </div>
        </div>
        <div class="banner-in">
          <div class="row">
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="{{asset('assets/images/Rectangle 71.png')}}" class="img-fluid" alt="">
                  <h3>Blues</h3>
                </div>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="{{asset('assets/images/Rectangle 6.png')}}" class="img-fluid" alt="">
                  <h3>Hip Hop</h3>
                </div>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="{{asset('assets/images/Rectangle 7.png')}}" class="img-fluid" alt="">
                  <h3>jazz</h3>
                </div>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="{{asset('assets/images/Rectangle 8.png')}}" class="img-fluid" alt="">
                  <h3>Classical</h3>
                </div>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="{{asset('assets/images/Rectangle 9.png')}}" class="img-fluid" alt="">
                  <h3>Metal</h3>
                </div>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="#">
                <div class="img-box">
                  <img src="assets/images/Rectangle 72.png" class="img-fluid" alt="">
                  <h3>rock</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Hottest Products.</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's..</p>
          </div>
          <div class="col-lg-4">
            <img src="assets/images/music1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4">
            <img src="assets/images/music2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4">
            <img src="assets/images/music3.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center sec-3-in">
            <h2>Portal to Hell</h2>
            <h3>For Metalheads Only</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="section-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Our Products.</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="Hip-Hop-tab" data-bs-toggle="tab" data-bs-target="#Hip-Hop" type="button" role="tab" aria-controls="Hip-Hop" aria-selected="true">Hip Hop</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="jazz-tab" data-bs-toggle="tab" data-bs-target="#jazz" type="button" role="tab" aria-controls="jazz" aria-selected="false">jazz</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="metal-tab" data-bs-toggle="tab" data-bs-target="#metal" type="button" role="tab" aria-controls="metal" aria-selected="false">metal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="blues-tab" data-bs-toggle="tab" data-bs-target="#blues" type="button" role="tab" aria-controls="blues" aria-selected="false">blues</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="classical-tab" data-bs-toggle="tab" data-bs-target="#classical" type="button" role="tab" aria-controls="classical" aria-selected="false">classical</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Hip-Hop" role="tabpanel" aria-labelledby="Hip-Hop-tab">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="jazz" role="tabpanel" aria-labelledby="jazz-tab">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="metal" role="tabpanel" aria-labelledby="metal-tab">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="blues" role="tabpanel" aria-labelledby="blues-tab">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 31.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="classical" role="tabpanel" aria-labelledby="classical-tab">
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 23.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 24.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 25.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 26.png" class="img-fluid" alt="">
                    <h3>BONE TAYA</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 37.png" class="img-fluid" alt="">
                    <h3>N.A.D.A</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 35.png" class="img-fluid" alt="">
                    <h3>CAPPIN</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-in">
                    <img src="assets/images/Rectangle 33.png" class="img-fluid" alt="">
                    <h3>HEAT WAVE</h3>
                    <h4>JOHN MAC</h4>
                  </div>
                </div>
                <div class="col-lg-3">

                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="sec4-btn">
              <a href="#">View All Products</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="section-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <div class="sec-5-in">
              <img src="assets/images/sec5-1.png" class="img-fluid" alt="">
              <h3>On-Time Delivery</h3>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="sec-5-in">
              <img src="assets/images/sec5-2.png" class="img-fluid" alt="">
              <h3>All Albums/Cds</h3>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="sec-5-in">
              <img src="assets/images/sec5-3.png" class="img-fluid" alt="">
              <h3>Customer Support</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 dis-flex-start">
            <h2>Album Of the<br><strong>Week!</strong></h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
            <h3>haterz</h3>
            <h4>cheaper shepherd</h4>
            <h5>$200</h5>
            <a href="#" class="buy-btnn">Buy Now</a>
          </div>
          <div class="col-lg-6 dis-flex">
            <img src="assets/images/sec6-img.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section-7">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Subscribe For Newsletter</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
            <form>
              <input type="name" class="form-control inp-1" placeholder="Enter Your Name">
              <input type="email" class="form-control inp-2" placeholder="Enter Email Address">
              <button type="submit" class="btn btn-primary inp-3">Send Now</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section-8">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Products You May Like.</h2>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 50.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 53.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 54.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 55.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 58.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="sec-8-in">
             <div class="row">
              <div class="col-lg-6">
                <img src="assets/images/Rectangle 59.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 .dis-flex-start">
                <h3>The jack.</h3>
                <h4>Orph Sen</h4>
                <h5>$150</h5>
                <a href="#"><img src="assets/images/Group 118.png" class="img-fluid" alt=""></a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
