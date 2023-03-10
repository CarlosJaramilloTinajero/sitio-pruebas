<link rel="stylesheet" href="{{ asset('productV2.css') }}">
<section class="productV2Div" style="margin-left: auto; margin-right: auto;">

    <div class="paddingB"></div>

    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="images">
            <picture class="img1">
                <img data-aos="zoom-in" data-aos-duration="600" class="image" src="{{ isset($product->img_path) ? $product->img_path : 'https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DEHLATAB301_zoom.jpg'}}" alt="">
            </picture>
            <picture class="img2">
                <img class="image" src="https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DECMOCAB006_zoom.jpg" alt="">
            </picture>

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
                            <span>Agregar al carrito</span>
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
                <a href="/" class="name">{{ isset($product->name) ? substr($product->name, 0, 25) : ''}}..</a>
            </div>

            <div class="productPrice">
                <p class="price"> ${{ number_format($product->minPrice()->price, 2) }}</p>
                <p class="priceDescount"> ${{ number_format($product->minPrice()->price, 2) }}</p>
            </div>
            <div class="productReferences">
                <p class="sku">{{ $product->sku }}</p>
            </div>
        </div>

        <div class="descount">
            <span>20% Off</span>
        </div>
    </div>
</section>