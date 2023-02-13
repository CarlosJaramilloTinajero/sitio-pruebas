<div>
    <section class="contenedorForm mb-4">
        <!-- <label for="" class="form-label">Buscar</label> -->
        <input type="text" wire:model="search" placeholder="Buscar producto" class="form-control">
        {{$search}}
    </section>
    <section class="ietmsP1 row" id="ietmsP">
        @foreach ($products as $product)
        <div class="col-md-4 col-xl-3 col-sm-6">
            <div class="ietmP1">
                <a href="">
                    <picture class="imagenItemP1">
                        <img class="imagen" src="https://chedrauimx.vtexassets.com/arquivos/ids/10399341/8806091995650_00.jpg?v=638080461402770000" alt="">
                    </picture>
                </a>
                <div class="descripcionItemP1">
                    <!-- <p class="descuento">$ {{ $product->precio }}</p> -->
                    <p class="sku">{{ $product->marca_nombre }}</p>
                    <p class="sku">{{ $product->sku }}</p>
                    <p class="precio">$ {{ $product->precio }}</p>
                    <p class="titulo">{{ $product->nombre }}</p>
                </div>
                <div class="descuentoCartel">
                    <h6 class="porcentaje">-12%</h6>
                </div>
                <div class="svgHeart">
                    <a href="https://www.twitch.tv/videos/1706343759">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>