@extends('layouts.main')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('images/about.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">The best pin-collecting resource</h1>
                    </div>
                    <h4 class="text-body mb-4">Pinfinder Club is the best pin-collecting resource for the Seventh-day
                        Adventist Pathfinder Club. The founders of Pinfinder Club grew up as Pathfinders and understood at a
                        young age the importance of discipline, teamwork and falling in love with Christ.
                    </h4>
                    <p>
                        As Pathfinders, we learn and build practical life skills through a variety of honors. According to
                        the North American Division, “in 2014 a ‘Pin Trading’ honor was developed to help Pathfinders
                        understand the principles that should govern the trading process in an effort to help them grow
                        spiritually.” Pinfinder Club has been established to offer Pathfinders around the world the
                        opportunity of obtaining rare and exclusive pins. Once obtained, they are encouraged to trade these
                        Pathfinder Pins with other Pathfinders in events such as: Conference Camporees, Union Camporees and
                        International Camporees and therefore, continue the legacy of Pathfinder Pin Trading.
                        To get started, browse through our store, purchase your favorite Pathfinder Pins and continue
                        meeting new people through this great opportunity. We hope you enjoy collecting pins as much as we
                        do. Have fun!<br><br>

                        If you have any questions, please contact us at: contact@pinfinderclub.com, or call 929-262-0719.
                    </p>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vission</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                aria-labelledby="pills-1-tab">
                                <p class="mb-0">With every Pinfinder Club purchase, you will help establish, develop and
                                    maintain Pathfinder Clubs around the world.<br><br>We, at Pinfinder Club, believe in
                                    “passing it forward.” The Pathfinder Club has been a blessing in our lives and we want
                                    to offer this platform as a means of creating resources to help Pathfinder Clubs around
                                    the world.<br><br>
                                    Today, you can make a difference.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">To provide opportunities for every child and teenager to experience the
                                    love of Jesus through the discipline and guidance of the Pathfinder Club.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
