<div class="ietmP1">
    <a href="">
        <picture class="imagenItemP1">
            <img class="imagen" src="{{ isset($product->img_path) ? $product->img_path : 'https://chedrauimx.vtexassets.com/arquivos/ids/10399341/8806091995650_00.jpg?v=638080461402770000'}}" alt="">
        </picture>
    </a>
    <div class="descripcionItemP1">
        <!-- <p class="sku">{{ $product->brand->name }}</p> -->
        <p class="sku">{{ $product->sku }}</p>
        <p class="precio">$ {{ number_format($product->minPrice()->price, 2)}}</p>
        <p class="titulo">{{ isset($product->name) ? substr($product->name, 0,40) : "" }}...</p>
    </div>
    <div class="descuentoCartel">
        <h6 class="porcentaje">-12%</h6>
    </div>
    <div class="carrito">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z" />
        </svg>
    </div>
    <div class="svgHeart">
        <a href="https://www.twitch.tv/videos/1706343759">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg>
        </a>
    </div>
</div>