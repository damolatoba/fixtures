@extends('layouts.main')

@section('content')
<!-- Content -->
<div class="ritekhed-main-content">



<!-- Main Section -->
<div class="ritekhed-main-section">
    <div class="container">
        <div class="row">

            <!-- Match Fixtures -->
            <div class="col-md-6">
                <div class="ritekhed-match-fixture">
                    <div class="">
                        <h2>Fixtures</h2>
                    </div>
                    <table class="ritekhed-client-detail">
                    @foreach($countries as $country)
                        @foreach($allleagues[$country] as $fixture)
                            @if(count($fixture['fixtures']) != 0)
                                <tr style="max-height:5px;">
                                    <th colspan="4" style="width:100%;"><b>{{ $country }} {{ $fixture['fullname'] }}</b></th>
                                </tr>
                                @foreach($fixture['fixtures'] as $game)   
                                    <tr>
                                        <td>
                                            <figure><img src="{{ $game[0]->teams->home->logo }}" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>{{ $game[0]->teams->home->name }}</h6>
                                                <!-- <span>St. Patrick’s Institute</span> -->
                                            </div>
                                        </td>
                                        <!-- <td><span>VS</span></td> -->
                                        <td><span>{{ $game[0]->fixture->id }} {{ $game[1][0]->odd }}</span></td>
                                        <td>
                                            <figure><img src="{{ $game[0]->teams->away->logo }}" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>{{ $game[0]->teams->away->name }}</h6>
                                                <!-- <span>Marine College</span> -->
                                            </div>
                                        </td>
                                        <td>December 09, 2017</td>
                                    </tr>
                                @endforeach
                                @endif
                            @endforeach
                        @endforeach                                   
                    </table>    
                </div>
            </div>
            <!-- Match Fixtures -->
            
            <!-- Ranking Table -->
            <div class="col-md-6">
                <div class="ritekhed-match-fixture ritekhed-team-ranking">
                    <div class="ritekhed-classic-heading">
                        <h2>Team Rankings</h2>
                    </div>
                    <table class="ritekhed-client-detail">
                        <tr>
                            <th>Team Rank</th>
                            <th>P</th>
                            <th>W</th>
                            <th>L</th>
                            <th>D</th>
                            <th>PTS</th>
                        </tr>
                        <tr>
                            <td>
                                <span>1</span>
                                <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                <div class="player-stats-text">
                                    <h6>Ocean Kings</h6>
                                    <span>Patrick’s Institute</span>
                                </div>
                            </td>
                            <td>13</td>
                            <td>11</td>
                            <td>01</td>
                            <td>02</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>
                                <span>2</span>
                                <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                <div class="player-stats-text">
                                    <h6>Ocean Kings</h6>
                                    <span>Patrick’s Institute</span>
                                </div>
                            </td>
                            <td>13</td>
                            <td>09</td>
                            <td>02</td>
                            <td>02</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>
                                <span>3</span>
                                <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                <div class="player-stats-text">
                                    <h6>Ocean Kings</h6>
                                    <span>Patrick’s Institute</span>
                                </div>
                            </td>
                            <td>12</td>
                            <td>09</td>
                            <td>03</td>
                            <td>00</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>
                                <span>4</span>
                                <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                <div class="player-stats-text">
                                    <h6>Ocean Kings</h6>
                                    <span>Patrick’s Institute</span>
                                </div>
                            </td>
                            <td>12</td>
                            <td>07</td>
                            <td>04</td>
                            <td>01</td>
                            <td>15</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Ranking Table -->

        </div>
    </div>
</div>
<!-- Main Section -->

<!-- Main Section -->
<div class="ritekhed-main-section ritekhed-testimonial-slider-full">
    <span class="ritekhed-banner-transparent"></span>
    <div class="container">
        <div class="row">
            
            <!-- Testimonial -->
            <div class="col-md-12">
                <div class="ritekhed-testimonial-slider">
                    <div class="ritekhed-testimonial-slider-layer">
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id eu Morbi ePPPPt arcu dui. Proin pel Donec tincidunt</p>
                        <div class="clearfix"></div>
                        <a href="#" class="ritekhed-testimonial-slider-thumb"><img src="extra-images/testimonial-img1.jpg" alt=""></a>
                        <div class="ritekhed-testimonial-slider-text">
                            <h5>Julia Ann</h5>
                            <span>Ceo</span>
                        </div>
                    </div>
                    <div class="ritekhed-testimonial-slider-layer">
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id eu Morbi ePPPPt arcu dui. Proin pel Donec tincidunt</p>
                        <div class="clearfix"></div>
                        <a href="#" class="ritekhed-testimonial-slider-thumb"><img src="extra-images/testimonial-img2.jpg" alt=""></a>
                        <div class="ritekhed-testimonial-slider-text">
                            <h5>Sarena John</h5>
                            <span>Co Editor</span>
                        </div>
                    </div>
                    <div class="ritekhed-testimonial-slider-layer">
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id eu Morbi ePPPPt arcu dui. Proin pel Donec tincidunt</p>
                        <div class="clearfix"></div>
                        <a href="#" class="ritekhed-testimonial-slider-thumb"><img src="extra-images/testimonial-img3.jpg" alt=""></a>
                        <div class="ritekhed-testimonial-slider-text">
                            <h5>Jessy Ryder</h5>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div class="ritekhed-testimonial-slider-layer">
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id eu Morbi ePPPPt arcu dui. Proin pel Donec tincidunt</p>
                        <div class="clearfix"></div>
                        <a href="#" class="ritekhed-testimonial-slider-thumb"><img src="extra-images/testimonial-img1.jpg" alt=""></a>
                        <div class="ritekhed-testimonial-slider-text">
                            <h5>Julia Ann</h5>
                            <span>Ceo</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial -->

        </div>
    </div>
</div>
<!-- Main Section -->

<!-- Main Section -->
<div class="ritekhed-main-section ritekhed-shop-grid-full">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="ritekhed-fancy-title"> <h2>OUR FAVOURITE SHOP</h2> </div>
                <!-- Shop Grid -->
                <div class="ritekhed-shop ritekhed-shop-grid">
                    <ul class="row">
                        <li class="col-md-3">
                            <figure><a href="#"><img src="extra-images/shop-grid-img1.jpg" alt=""></a></figure>
                            <div class="ritekhed-shop-grid-text">
                                <h2><a href="#">Atlantic Sneaker</a></h2>
                                <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id.</p>
                                <a href="#" class="ritekhed-shop-btn ritekhed-bgcolor ritekhed-color-two">Add To Cart</a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure><a href="#"><img src="extra-images/shop-grid-img2.jpg" alt=""></a></figure>
                            <div class="ritekhed-shop-grid-text">
                                <h2><a href="#">Sports shores</a></h2>
                                <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id.</p>
                                <a href="#" class="ritekhed-shop-btn ritekhed-bgcolor ritekhed-color-two">Add To Cart</a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure><a href="#"><img src="extra-images/shop-grid-img3.jpg" alt=""></a></figure>
                            <div class="ritekhed-shop-grid-text">
                                <h2><a href="#">Sports Cup</a></h2>
                                <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id.</p>
                                <a href="#" class="ritekhed-shop-btn ritekhed-bgcolor ritekhed-color-two">Add To Cart</a>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <figure><a href="#"><img src="extra-images/shop-grid-img4.jpg" alt=""></a></figure>
                            <div class="ritekhed-shop-grid-text">
                                <h2><a href="#">Sports Tshirt</a></h2>
                                <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Vestibulum a nunc du rabitur dignissim luctus nisi id.</p>
                                <a href="#" class="ritekhed-shop-btn ritekhed-bgcolor ritekhed-color-two">Add To Cart</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Shop Grid -->
            </div>

        </div>
    </div>
</div>
<!-- Main Section -->

</div>
<!-- Content -->

@endsection