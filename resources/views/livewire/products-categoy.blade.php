<div>
    <link rel="stylesheet" href="{{ asset('productV2.css') }}">
    <section class="contenedorForm mb-4">
        <div style="display: flex; margin-top: 20px;">
            <input type="text" wire:model="search" id="search" wire:keyup.enter="searchEvent" placeholder="Buscar producto" class="form-control">
            <button class=" btn-search" wire:click="searchEvent"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg> <span>Buscar</span></button>
        </div>
    </section>
    <div class="filtros">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                </svg> Filtros
            </a>

            <ul class="dropdown-menu">
                @foreach ($category->subcategories as $subcategoryI)
                <li>
                    @if ($subcategory != null)
                    @if ($subcategoryI->id == $subcategory->id)
                    <svg wire:click="quitarSubcategory" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    @endif
                    @endif
                    <span class="dropdown-item" wire:click="ponerSubcategory({{ $subcategoryI->id }})">{{ $subcategoryI->name }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <section class="productsVersions row">
        @foreach ($productos as $product)
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <section class="productV2Div" style="margin-left: auto; margin-right: auto;">

                <div class="paddingB"></div>

                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                    <div class="images">
                        <div class="img1">
                            <!-- data-aos="zoom-in" data-aos-duration="600" -->
                            <img class="image" src="{{ isset($product->img_path) ? $product->img_path : 'https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DEHLATAB301_zoom.jpg'}}" alt="">
                        </div>
                        <div class="img2">
                            <img class="image" src="https://www.exel.com.mx/Repositorio/FTP/Contenidos/Imagenes/Productos/DECMOCAB006_zoom.jpg" alt="">
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
        </div>
        @endforeach
        {{ $productos->links() }}
    </section>


        {{-- <!-- <section class="ietmsP1 row" id="ietmsP">
        @foreach ($productos as $product)
        <div class="col-md-4 col-xl-3">
            <div class="ietmP1">
                <a href="">
                    <picture class="imagenItemP1">
                        <img class="imagen" src="{{ isset($product->img_path) ? $product->img_path : 'https://chedrauimx.vtexassets.com/arquivos/ids/10399341/8806091995650_00.jpg?v=638080461402770000'}}" alt="">
                    </picture>
                </a>
                <div class="descripcionItemP1">
                    <p class="sku">{{ $product->sku }}</p>
                    <p class="precio">$ {{ number_format($product->minPrice()->price, 2)}}</p>
                    <p class="titulo">{{ isset($product->name) ? substr($product->name, 0, 40) : "" }}...</p>
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
        </div>
        @endforeach
    </section> --> --}}