<link rel="stylesheet" href="{{asset('inicioV1.css')}}">
<!-- <link rel="stylesheet" href="{{ asset('productV4.css') }}"> -->

<div>
    <!-- Slide principal computadora -->
    <section class=" splide SlideSplide d-none d-md-block" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img class="imageSlide" src="https://www.mervins.com.mx/storage/photos/l4Ob9ungdrqML47VY30jgQJLjRSNj13G0NW3Jol5.webp" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlide" src="https://www.mervins.com.mx/storage/photos/Z0wwHlHmGslBYmSH3othJSmuJjNhOUBn4976TqqO.webp" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlide" src="https://www.mervins.com.mx/storage/images/banners/bec38ayEYMSj61IVw0SPqJfmWevKRLE18fSNzAZq.webp" alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- Slide principal movil -->
    <div style="margin-top: 90px;" class="d-md-none"></div>

    <!-- Segundo slide -->
    <section class=" splide SlideSplideSecond" aria-label="Splide Basic HTML Example" data-splide='{"type":"loop","autoplay": true,"perPage": 9,"breakpoints": {"1200": {"perPage": 8},"1100": {"perPage": 7},"1000": {"perPage": 6},"850": {"perPage": 5},"650": {"perPage": 4},"530": {"perPage": 3},"380": {"perPage": 2}}}'>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                Prev
            </button>
            <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                Next
            </button>
        </div>

        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/iDrFvF8w8Z9BHFz1yP4jE01rByYiiMnsxIgz4Cfy.png" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/tfEUZZ1rmsTX8S1E68wu4RISIDQnoi14RbW6KX39.png" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/7HcIMotLrijed3XnFgyXTfgrkRXpmmwWBmJEwcRq.png" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/EsqnImwGpUeFOtP01bBylnJX5bHSGMKXDYbRMcot.png" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/kftSI1TRB41Jrr9WqtWhsYEfMgSDbp46lAWaplQH.png" alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond" src="https://www.mervins.com.mx/storage/photos/HbXZWkSumFVhdnQVyaJlRgUd0DFXbgLFGzcJ1nWs.png" alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- Slide productos destacados -->
    <div class="slideDiv">
        <h4 class="tituloSlide">Productos destacados</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 10])
    </div>

    <!-- Slide formas pago -->
    <div class="slideDiv">
        <h4 class="tituloSlide">Formas de pago</h4>
        <hr class="hrInicio">
        <section class=" splide splideTiposMarcas" data-splide='{"type":"loop","autoplay": true,"perPage": 9,"breakpoints": {"1200": {"perPage": 8},"1100": {"perPage": 7},"1000": {"perPage": 6},"850": {"perPage": 5},"650": {"perPage": 4},"500": {"perPage": 3},"380": {"perPage": 2}}}'>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                    Next
                </button>
            </div>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/f2isVG8Lf0PjotdJX5W0oGUXo2MqCOZPv9GjUSsj.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/osB8f6cJ8xHflprGSqE1P2KeIQIfETHfIN5u3imm.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/QTBE8UGQm1cGSvgYo7Ux4HtzRTmSXY9Qxy0tZK6M.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/HWmziBPPa3rU9mFncxX3h7cEPZfRlJjLxEqMAn7p.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/IvP9taJ0z3r9eFM9yuOyWlIRYee14wFjXg6O8NdR.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageTiposMarcas" src="https://www.mervins.com.mx/storage/photos/0gnVhsfDcyG7UYDwFGu1cjiwabccBKuQ5CYinnaD.png" alt="">
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Slide mejores ofertas -->
    <div class="slideDiv">
        <h4 class="tituloSlide">Las mejores ofertas</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 17])
    </div>

    <!-- Slide computo -->
    <div class="slideDiv">
        <h4 class="tituloSlide">Computo</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 1])
    </div>

    <!-- Cartel moda -->
    <div class="cartelModa">

        <div class="imagenFondo">
            <a href="/">
                <img src="https://www.mervins.com.mx/storage/images/banners/6IJeKZPIfSndrnhAZZDM22ziLHREKI3AP0c3Vmuy.webp" alt="">
            </a>
        </div>

        <div class="products">
            <section class=" splide" data-splide='{"type":"loop","autoplay": true,"perPage": 2,"breakpoints": {"1200": {"perPage": 1}}}'>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                        Prev
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                        Next
                    </button>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($productsModa as $productModa)
                        <li class="splide__slide">
                            <section class="productModa" style="margin-left: auto; margin-right: auto;">

                                <div class="paddingBModa"></div>

                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                    <div class="imagesModa">
                                        <picture class="img1Moda" data-aos="zoom-in" data-aos-duration="600">
                                            <img class="imageModa" src="{{ isset($productModa->img_path) ? $productModa->img_path : 'https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DEHLATAB301_zoom.jpg'}}" alt="">
                                        </picture>

                                        <div class="shadowCartModa"></div>

                                        <div class="product-hover-action-moda">
                                            <div class="cart-action-moda">
                                                <div class="viewModa">
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                        </svg>
                                                    </a>
                                                </div>

                                                <div class="cartModa">
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                        </svg> </a>
                                                </div>

                                                <div class="wishlistModa">
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                        </svg>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="descriptionsModa" style="background-color: {{'rgba(255, 27, 27, 0.35)'}};">
                                        <div class="titleModa">
                                            <a href="/" class="nameModa">{{ isset($productModa->name) ? substr($productModa->name, 0, 22) : ''}}..</a>
                                        </div>

                                        <div class="productPriceModa">
                                            <p class="priceModa"> ${{ number_format($productModa->minPrice()->price, 2) }}</p>
                                            <p class="priceDescountModa"> ${{ number_format($productModa->minPrice()->price, 2) }}</p>
                                        </div>
                                        <div class="categoryModa">
                                            <a href="/" class="linkCategoryModa">{{ $productModa->category->name }}</a>
                                        </div>

                                    </div>

                                    <div class="descountModa">
                                        <span>20% Off</span>
                                    </div>
                                </div>
                            </section>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>

    </div>

    <!-- Slide marcas -->
    <div class="slideDiv">
        <h4 class="tituloSlide">Las mejores marcas</h4>
        <hr class="hrInicio">
        <section class=" splide splideTiposMarcas" data-splide='{"type":"loop","autoplay": true,"perPage": 9,"breakpoints": {"1200": {"perPage": 8},"1100": {"perPage": 7},"1000": {"perPage": 6},"850": {"perPage": 5},"650": {"perPage": 4},"500": {"perPage": 3},"380": {"perPage": 2}}}'>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                    Next
                </button>
            </div>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="imageMarcas" src="https://www.mervins.com.mx/storage/photos/LeWmZZuPRElKHXiHYfIDiGqT7sDnxoOFCBXBFOfh.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageMarcas" src="https://www.mervins.com.mx/storage/photos/U91bg4r2QXiJzayv351BEhg1x7Hw1Om7AB3zCP8Z.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageMarcas" src="	https://www.mervins.com.mx/storage/photos/vmkUbp5KrlMfAqoFYS62VHMFAKKbr2WI99PicaHR.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageMarcas" src="https://www.mervins.com.mx/storage/photos/vmkUbp5KrlMfAqoFYS62VHMFAKKbr2WI99PicaHR.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageMarcas" src="	https://www.mervins.com.mx/storage/photos/NzeyDp8UfVP6F9UVh9o929HdzjT6tX1nQjvCbIMc.png" alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageMarcas" src="	https://www.mervins.com.mx/storage/photos/w6ADJDcpJ98VuXoJsuH8yNvSW6KxYlaoptr27PaM.png" alt="">
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Banners inicio computadora -->
    <div class="bannersInicio d-none d-md-block">
        <div class=" row ">
            <div class="col-12 mb-4" data-aos="fade-down">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/photos/qbZUKOKuRy4uFBxbfiAumOaEubOiKy3efv7mHdFo.webp" alt="">
                </div>
            </div>
            <div class="col-6" data-aos="fade-zoom-in">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/images/banners/SnYiicJa0cZnI4t3ZSeUYhlfWBPfLY4ChbHAoMIF.webp" alt="">
                </div>
            </div>
            <div class="col-6" data-aos="fade-zoom-in">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/images/banners/juez6NMZPDc2GPxkH9AlxBzKnxhRnLUxYqqvO2XX.webp" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Banners inicio movil -->
    <div class="d-md-none">
        <div class="bannersInicio row">
            <div data-aos="fade-up" class="col-12 mb-4">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/photos/qbZUKOKuRy4uFBxbfiAumOaEubOiKy3efv7mHdFo.webp" alt="">
                </div>
            </div>
            <div data-aos="fade-up" class="col-12 mb-4">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/images/banners/SnYiicJa0cZnI4t3ZSeUYhlfWBPfLY4ChbHAoMIF.webp" alt="">
                </div>
            </div>
            <div data-aos="fade-up" class="col-12">
                <div class="banner">
                    <img class="imagenBanner" src="https://www.mervins.com.mx/storage/images/banners/juez6NMZPDc2GPxkH9AlxBzKnxhRnLUxYqqvO2XX.webp" alt="">
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
</div>