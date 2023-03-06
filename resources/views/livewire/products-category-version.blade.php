<div>
    <link rel="stylesheet" href="{{ asset('productsSlide.css') }}">
    <section class="splide" data-splide='
    {
        "type":"loop",
        "autoplay": true,
        "perPage": 5,
        "breakpoints": {
            "1250": {"perPage": 4},
            "900": {"perPage": 3},
            "650": {"perPage": 2},
            "530": {"perPage": 2},
            "400": {"perPage": 2}
        }
    }'>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev">
                <!-- <span class="material-symbols-outlined">
                    arrow_back_ios
                </span> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </button>
            <button class="splide__arrow splide__arrow--next">
                <!-- <span class="material-symbols-outlined">
                    arrow_forward_ios
                </span> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
            </button>
        </div>

        <ul class="splide__pagination splide__pagination--ltr" style="opacity: 0;"></ul>


        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($products as $product)
                <li class="splide__slide">
                    <section class="productsSlide">

                        <div class="paddingB"></div>

                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            <div class="images">
                                <div data-aos="zoom-in" data-aos-duration="600" data-aos-offset="160" class="img1">
                                    <img class="image" src="{{ isset($product->img_path) ? $product->img_path : 'https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DEHLATAB301_zoom.jpg'}}" alt="">
                                </div>

                                <div class="shadowCart"></div>

                                <div class="product-hover-action">
                                    <div class="cart-action">
                                        <div class="view">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="cart">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="wishlist">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="descriptions">
                                <div class="title">
                                    <a href="/" class="name">{{ isset($product->name) ? substr($product->name, 0, 19) : ''}}..</a>
                                </div>

                                <div class="productPrice">
                                    <p class="price"> ${{ number_format($product->minPrice()->price, 2) }}</p>
                                </div>

                                <div class="category">
                                    <a href="{{ route('category.show', ['id' => $product->category_id])}}" class="linkCategory">{{ isset($product->category) ? substr($product->category->name, 0, 18) : ''}}...</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- Add the progress bar element -->
        <div class="my-slider-progress">
            <div id="my-slider-progress-bar" class="my-slider-progress-bar"></div>
        </div>
    </section>
</div>