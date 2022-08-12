<x-app-layout>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Takab Technology</h1>
                                    <div class="animation animated-item-2">
                                        Lo mejor lo estamos creando.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content-bg2">
                                    <h1 class="carousel-bg2" class="animation animated-item-1">Capacitate</h1>
                                    <div class="animation animated-item-2">
                                        Cursos empresariales, para un mejor desempeños laboral.
                                    </div>
                                    <a class="btn-slide-bg2" class="btn-slide white animation animated-item-3" href="{{route('login')}}">Cursos</a>
                                </div>
                            </div>
                        </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </section>
</x-app-layout>