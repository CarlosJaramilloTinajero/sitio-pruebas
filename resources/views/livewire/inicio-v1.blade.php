<div>
    <link rel="stylesheet" href="{{ asset('inicioV1.css') }}">
    {{-- <!-- <link rel="stylesheet" href="{{ asset('productV4.css') }}"> --> --}}

    <!-- Slide principal computadora -->
    <section class="loading splide SlideSplide d-none d-md-block" aria-label="Splide Basic HTML Example">
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
                    <img class="imageSlide"
                        src="https://www.mervins.com.mx/storage/images/banners/OjfdL5Zs3RVo5BYTCmAxP7xAD8uc64MqoAj2OIR4.webp"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlide"
                        src="https://www.mervins.com.mx/storage/images/banners/COYh3pZhn5BpvT4Iczg72iPEC5YSvPItnN4MCfJt.webp"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlide"
                        src="https://www.mervins.com.mx/storage/images/banners/bec38ayEYMSj61IVw0SPqJfmWevKRLE18fSNzAZq.webp"
                        alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- Slide principal movil -->
    <section class="loading splide SlideSplide d-sm-none" aria-label="Splide Basic HTML Example">
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
                    <img class="imageSlide" src="{{ asset('images/banners/ImagenEjemplo.png') }}" alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- Segundo slide -->
    <section class="backGroundBlock loading splide SlideSplideSecond" aria-label="Splide Basic HTML Example"
        data-splide='{"type":"loop","autoplay": true,"perPage": 10,"breakpoints": {"1240": {"perPage": 9},"1150": {"perPage": 8},"1010": {"perPage": 7},"870": {"perPage": 6},"730": {"perPage": 5},"615": {"perPage": 4},"470": {"perPage": 3}}}'>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                Prev
            </button>
            <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                Next
            </button>
        </div>

        <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>

        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/iDrFvF8w8Z9BHFz1yP4jE01rByYiiMnsxIgz4Cfy.png"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/tfEUZZ1rmsTX8S1E68wu4RISIDQnoi14RbW6KX39.png"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/7HcIMotLrijed3XnFgyXTfgrkRXpmmwWBmJEwcRq.png"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/EsqnImwGpUeFOtP01bBylnJX5bHSGMKXDYbRMcot.png"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/kftSI1TRB41Jrr9WqtWhsYEfMgSDbp46lAWaplQH.png"
                        alt="">
                </li>
                <li class="splide__slide">
                    <img class="imageSlideSecond"
                        src="https://www.mervins.com.mx/storage/photos/HbXZWkSumFVhdnQVyaJlRgUd0DFXbgLFGzcJ1nWs.png"
                        alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- Banners inicio computadora -->
    <div class="loading bannersInicio d-none d-lg-block">
        <div class=" row ">
            <div class="col-12 mb-4" data-aos="fade-down">
                <div class="banner">
                    <img class="imagenBanner"
                        src="https://www.mervins.com.mx/storage/photos/qbZUKOKuRy4uFBxbfiAumOaEubOiKy3efv7mHdFo.webp"
                        alt="">
                </div>
            </div>
            <div class="col-6" data-aos="fade-right">
                <div class="banner">
                    <img class="imagenBanner"
                        src="https://www.mervins.com.mx/storage/images/banners/SnYiicJa0cZnI4t3ZSeUYhlfWBPfLY4ChbHAoMIF.webp"
                        alt="">
                </div>
            </div>
            <div class="col-6" data-aos="fade-left">
                <div class="banner">
                    <img class="imagenBanner"
                        src="https://www.mervins.com.mx/storage/images/banners/juez6NMZPDc2GPxkH9AlxBzKnxhRnLUxYqqvO2XX.webp"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Banners inicio movil -->
    <div class="loading d-lg-none">
        <!-- <div class="bannersInicio row">
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
        </div> -->

        <section class="splide bannersInicio" aria-label="Splide Basic HTML Example">
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                    Next
                </button>
            </div>

            <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="imageSlide"
                            src="https://www.mervins.com.mx/storage/photos/qbZUKOKuRy4uFBxbfiAumOaEubOiKy3efv7mHdFo.webp"
                            alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageSlide"
                            src="https://www.mervins.com.mx/storage/images/banners/SnYiicJa0cZnI4t3ZSeUYhlfWBPfLY4ChbHAoMIF.webp"
                            alt="">
                    </li>
                    <li class="splide__slide">
                        <img class="imageSlide"
                            src="https://www.mervins.com.mx/storage/images/banners/juez6NMZPDc2GPxkH9AlxBzKnxhRnLUxYqqvO2XX.webp"
                            alt="">
                    </li>
                </ul>
            </div>
        </section>


    </div>

    <!-- Slide productos destacados -->
    <div class="loading slideDiv">
        <h4 class="tituloSlide">Productos destacados</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 10])
    </div>

    <!-- Slide formas pago -->
    <div class="loading slideDiv slideOPC">
        <h4 class="tituloSlide">Formas de pago</h4>
        <hr class="hrInicio">
        <section class=" splide splideTiposMarcas"
            data-splide='{"type":"loop","autoplay": true,"perPage": 9,"breakpoints": {"1200": {"perPage": 8},"1100": {"perPage": 7},"1000": {"perPage": 6},"850": {"perPage": 5},"650": {"perPage": 4},"500": {"perPage": 3},"380": {"perPage": 2}}}'>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                    Next
                </button>
            </div>

            <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/f2isVG8Lf0PjotdJX5W0oGUXo2MqCOZPv9GjUSsj.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/osB8f6cJ8xHflprGSqE1P2KeIQIfETHfIN5u3imm.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/QTBE8UGQm1cGSvgYo7Ux4HtzRTmSXY9Qxy0tZK6M.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/HWmziBPPa3rU9mFncxX3h7cEPZfRlJjLxEqMAn7p.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/IvP9taJ0z3r9eFM9yuOyWlIRYee14wFjXg6O8NdR.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageTiposMarcas"
                            src="https://www.mervins.com.mx/storage/photos/0gnVhsfDcyG7UYDwFGu1cjiwabccBKuQ5CYinnaD.png"
                            alt="">
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Slide mejores ofertas -->
    <div class="loading slideDiv">
        <h4 class="tituloSlide">Las mejores ofertas</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 17])
    </div>

    <!-- Slide computo -->
    <div class="loading slideDiv">
        <h4 class="tituloSlide">Computo</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 1])
    </div>

    <!-- Cartel moda computadora-->
    <div class="loading cartelModa d-none d-lg-block">

        <div class="imagenFondo">
            <a href="/">
                <img src="https://www.mervins.com.mx/storage/images/banners/NXbEmSHePjoYRtdfA6TM5E8I3pKcWzLfMGskwe8r.webp"
                    alt="">
            </a>
        </div>

        <div class="products">
            <section class=" splide"
                data-splide='{"type":"loop","autoplay": true,"perPage": 2,"breakpoints": {"1200": {"perPage": 1}}}'>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                        Prev
                    </button>
                    <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                        Next
                    </button>
                </div>

                <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>

                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($productsModa as $productModa)
                            <li class="splide__slide">
                                <section class="productModa" style="margin-left: auto; margin-right: auto;">

                                    <div class="paddingBModa"></div>

                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                        <div class="imagesModa">
                                            <picture class="img1Moda" data-aos="zoom-in" data-aos-duration="600">
                                                <img class="imageModa"
                                                    src="{{ isset($productModa->img_path) ? $productModa->img_path : 'https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DEHLATAB301_zoom.jpg' }}"
                                                    alt="">
                                            </picture>

                                            <div class="shadowCartModa"></div>

                                            <div class="product-hover-action-moda">
                                                <div class="cart-action-moda">
                                                    <div class="viewModa">
                                                        <a href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                                <path
                                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div class="cartModa">
                                                        <a href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                                                <path
                                                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                            </svg> </a>
                                                    </div>

                                                    <div class="wishlistModa">
                                                        <a href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="descriptionsModa"
                                            style="background-color: {{ 'rgba(255, 27, 27, 0.35)' }};">
                                            <div class="titleModa">
                                                <a href="/"
                                                    class="nameModa">{{ isset($productModa->name) ? substr($productModa->name, 0, 22) : '' }}..</a>
                                            </div>

                                            <div class="productPriceModa">
                                                <p class="priceModa">
                                                    ${{ number_format($productModa->minPrice()->price, 2) }}</p>
                                                <p class="priceDescountModa">
                                                    ${{ number_format($productModa->minPrice()->price, 2) }}</p>
                                            </div>
                                            <div class="categoryModa">
                                                <a href="/"
                                                    class="linkCategoryModa">{{ $productModa->category->name }}</a>
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
    <div class="loading slideDiv slideOPC">
        <h4 class="tituloSlide">Las mejores marcas</h4>
        <hr class="hrInicio">
        <section class=" splide splideTiposMarcas"
            data-splide='{"type":"loop","autoplay": true,"perPage": 9,"breakpoints": {"1200": {"perPage": 8},"1100": {"perPage": 7},"1000": {"perPage": 6},"850": {"perPage": 5},"650": {"perPage": 4},"500": {"perPage": 3},"380": {"perPage": 2}}}'>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev" style="opacity: 0;">
                    Prev
                </button>
                <button class="splide__arrow splide__arrow--next" style="opacity: 0;">
                    Next
                </button>
            </div>

            <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>

            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="https://www.mervins.com.mx/storage/photos/LeWmZZuPRElKHXiHYfIDiGqT7sDnxoOFCBXBFOfh.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="https://www.mervins.com.mx/storage/photos/U91bg4r2QXiJzayv351BEhg1x7Hw1Om7AB3zCP8Z.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="	https://www.mervins.com.mx/storage/photos/vmkUbp5KrlMfAqoFYS62VHMFAKKbr2WI99PicaHR.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="https://www.mervins.com.mx/storage/photos/vmkUbp5KrlMfAqoFYS62VHMFAKKbr2WI99PicaHR.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="	https://www.mervins.com.mx/storage/photos/NzeyDp8UfVP6F9UVh9o929HdzjT6tX1nQjvCbIMc.png"
                            alt="">
                    </li>
                    <li class="splide__slide slideBorderBotton">
                        <img class="imageMarcas"
                            src="	https://www.mervins.com.mx/storage/photos/w6ADJDcpJ98VuXoJsuH8yNvSW6KxYlaoptr27PaM.png"
                            alt="">
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Slide Electrónica de Consumo -->
    <div class="loading slideDiv">
        <h4 class="tituloSlide">Electrónica de Consumo</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 6])
    </div>

    <!-- Slide Seguridad -->
    <div class="loading slideDiv">
        <h4 class="tituloSlide">Seguridad</h4>
        <hr class="hrInicio">
        @livewire('products-category-version', ['category_id' => 18])
    </div>

    <!-- Sobre nosotros Mernins computadora -->
    <div class="loading nosotrosDiv slideDiv d-none d-md-block">
        <section class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
            <div class="col">
                <div class="sectionNosotro">
                    <div class="datosNosotros">
                        <picture><img src="https://www.mervins.com.mx/assets/img/compra100segura.png" alt="">
                        </picture>
                        <div class="texto">
                            <p> <strong>Compra</strong><br>
                                100% segura</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sectionNosotro">
                    <div class="datosNosotros">
                        <picture><img src="https://www.mervins.com.mx/assets/img/enviosatodomexico.png"
                                alt=""></picture>
                        <div class="texto">
                            <p><strong>Envios</strong><br>
                                A todo México</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sectionNosotro">
                    <div class="datosNosotros">
                        <picture><img src="	https://www.mervins.com.mx/assets/img/lasmejoresmarcas.png"
                                alt=""></picture>
                        <div class="texto">
                            <p><strong>Marcas</strong><br>
                                Las mejores</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sectionNosotro">
                    <div class="datosNosotros">
                        <picture><img src="https://www.mervins.com.mx/assets/img/promocionesexclusivas.png"
                                alt=""></picture>
                        <div class="texto">
                            <p> <strong>Promociones</strong><br>
                                Exclusivas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="sectionNosotro">
                    <div class="datosNosotros">
                        <picture><img src="	https://www.mervins.com.mx/assets/img/dinstintasformasdepago.png"
                                alt=""></picture>
                        <div class="texto">
                            <p><strong>Forma de pago</strong><br>
                                Elije la mejor</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Banner abajo computadora -->
    <section class="loading bannersInicio d-none d-lg-block">
        <div class="bannerSection mb-4">
            <div class="banner bannerDown-G" data-aos="fade-right">
                <img class="imagenBanner bannerHover"
                    src="https://www.mervins.com.mx/storage/photos/O2uLdDzzJiCPlubCYxPKhYXAijXr0TxzqOYP3kYN.png"
                    alt="">
            </div>
            <div class="banner bannerDown-C" data-aos="fade-left">
                <img class="imagenBanner bannerHover"
                    src="https://www.mervins.com.mx/storage/photos/FsPBfKkuqq5jENmq0yeYa2ZH5xafW7SoEFNMadkN.png"
                    alt="">
            </div>
        </div>
        <div class="bannerSection">
            <div class="banner bannerDown-C" data-aos="fade-right">
                <img class="imagenBanner bannerHover"
                    src="	https://www.mervins.com.mx/storage/photos/VEUZHtXL2Gz1d75FYVcwOPnQalCQxMMlWdDxSkH2.png"
                    alt="">
            </div>
            <div class="banner bannerDown-G" data-aos="fade-left">
                <img class="imagenBanner bannerHover"
                    src="	https://www.mervins.com.mx/storage/photos/BU8EsNDS4H5waK2Ks5FhILwDVEeu3KowlnT9op1k.png"
                    alt="">
            </div>
        </div>
    </section>

    <!-- Suscripcion computadora-->
    <section class="loading suscriptionDiv mb-5 d-none d-lg-block">
        <picture>
            <img src="https://new.axilthemes.com/demo/template/etrade/assets/images/bg/bg-image-5.jpg" alt="">
        </picture>
        <div class="divForm">
            <form action="">
                <p class="tituloFom mb-5"><strong>¡Recibe promociones exclusivas y descuentos!</strong></p>
                <div class="mb-3 d-flex">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <button type="submit" class="btn btn-primary btnSuscription"><span>Suscribirme</span></button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="loading">
        <section class="contenido">
            <section class="row mb-3">
                <div class="col col-lg-3 col-md-6 col-12">
                    <!-- <h3 class="tituloCol">Soporte</h3>
                    <p class="textCol textAdrress">
                        685 Market Street,
                        Las Vegas, LA 95820,
                        United States.
                    </p> -->
                    <div class="centerDiv">
                        <picture class="imagenLogo">
                            <img src="https://www.mervins.com.mx/images/logo.png" alt="">
                        </picture>

                        <div class="contact">
                            <p class="textCol textHover">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                                    <path
                                        d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                                </svg><span>mervins@gmail.com.mx</span>
                            </p>

                            <p class="textCol textHover">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg><span>(33) 2874-1143</span>
                            </p>


                            <p class="textCol textHover">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg><span>(33) 2874-1144</span>
                            </p>
                        </div>
                        <div class="social">
                            <div class="red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </div>
                            <div class="red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </div>
                            <div class="red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </div>
                            <div class="red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path
                                        d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg>
                            </div>
                            <div class="red">
                                <div class="red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col col-lg-3 col-12 ">
                    <h3 class="tituloCol">Cuenta</h3>
                    <p class="pLink"><a href="" class="link">Mi Cuenta</a></p>
                    <p class="pLink"><a href="" class="link">Login / Registro</a></p>
                    <p class="pLink"><a href="" class="link">Carrito</a></p>
                    <p class="pLink"><a href="" class="link">Wishlist</a></p>
                </div> -->
                <hr class="d-md-none hrFooter">
                <div class="col col-lg-3 col-md-6 col-6 ">
                    <div class="centerDiv">
                        <h3 class="tituloCol">Atencion a clientes</h3>
                        <p class="pLink"><a href="" class="link">Preguntas frecuentes</a></p>
                        <p class="pLink"><a href="" class="link">Facturación</a></p>
                        <p class="pLink"><a href="" class="link">Garantía y cancelacion</a></p>
                        <p class="pLink"><a href="" class="link">Formas de pago</a></p>
                        <p class="pLink"><a href="" class="link">Quiero ser proveedor</a></p>
                        <p class="pLink"><a href="" class="link">Únete a Mervins</a></p>
                        <p class="pLink"><a href="" class="link">Contacto</a></p>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-6 ">
                    <div class="centerDiv">
                        <h3 class="tituloCol">Sobre Mervins</h3>
                        <p class="pLink"><a href="" class="link">Nosotros</a></p>
                        <p class="pLink"><a href="" class="link">Blog</a></p>
                        <p class="pLink"><a href="" class="link">Devoluciones</a></p>
                        <p class="pLink"><a href="" class="link">Aviso de Privacidad</a></p>
                        <p class="pLink"><a href="" class="link">Términos y condiciones</a></p>
                    </div>
                </div>
                <hr class="d-md-none hrFooter">
                <div class="col col-lg-3 col-md-6 col-12 ">
                    <div class="centerDiv">
                        <div class="imagenLogoStafetaSello">
                            <img src="https://www.mervins.com.mx/images/shared/logo_comercioelectronico.png"
                                alt="">
                        </div>
                        <picture class="imagenLogoStafeta">
                            <img src="https://www.mervins.com.mx/images/shared/estafeta.png" alt="">
                        </picture>
                    </div>
                </div>
            </section>

            <div class="extra row">
                <hr>
                <div class="col col-12">
                    <div class="derechos">
                        <p>© Administración de Marketplace y Dropshipping Digital S.A. de C.V. - Todos los derechos
                            reservados</p>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="centerDiv">
                        <div class="pago">
                            <ul>
                                <li>
                                    <img src="{{ asset('images/tipoPago/paypal.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('images/tipoPago/visa.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('images/tipoPago/master.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </footer>

    <!-- Las clases de animaciones de loading y animacionInicio / animacionCarga estan guardadas en el archivo style.css el cual es global -->
    <div class="animacionInicio" id="animacionInicio">
        <picture id="animacion">
            <div class="ojo1" id="ojo1"></div>
            <div class="ojo2" id="ojo2"></div>
            <img class="letras" id="letras" src="{{ asset('images/animaciones/logo1.png') }}" alt="">
            <img id="boca" class="boca" src="{{ asset('images/animaciones/logo1Boca.png') }}"
                alt="">
        </picture>
    </div>

    <!-- Script para la animacion de inicio -->
    <script>
        window.onload = () => {
            window.scroll(0, 0);
        };

        let id2 = setTimeout(() => {

            let animacion = document.getElementById('animacion');
            animacion.style.opacity = '1';

            let id3 = setTimeout(() => {

                let ojo2 = document.getElementById('ojo2');
                let ojo1 = document.getElementById('ojo1');
                let boca = document.getElementById('boca');

                ojo1.style.opacity = '1';
                ojo2.style.opacity = '1';
                boca.style.opacity = '1';

                let id4 = setTimeout(() => {
                    ojo2.style.animation = "cerrarOjo .45s ease-in-out";
                    window.clearTimeout(id4);
                }, 1000);


                window.clearTimeout(id3);
            }, 900);

            window.clearTimeout(id2);
        }, 500);


        let loadings = document.getElementsByClassName('loading');
        let id = setTimeout(() => {
            let animacion = document.getElementById('animacionInicio');
            animacion.style.opacity = 0;
            for (let i = 0; i < loadings.length; i++) {
                loadings[i].style.opacity = "1";
            }
            window.clearInterval(id);
        }, 3300);
        // }, 300);
    </script>
</div>
