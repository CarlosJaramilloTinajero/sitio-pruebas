@extends('index')

@section('navbar')
    <link rel="stylesheet" href="{{ asset('navbar.css') }}">
    <header>
        <nav class="loading navbarV1">
            <!-- Computadora -->
            <section class="navbar-PC">
                <div class="section1">
                    <div class="logo">
                        <img src="https://www.mervins.com.mx/images/logo.png" alt="">
                    </div>
                    <div class="div-search">
                        <form action="">
                            <input type="text" name="" id="" placeholder="Buscar">
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg></button>
                        </form>
                    </div>
                    <div class="payments">
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
                            <li>
                                <img src="https://www.mervins.com.mx/images/payments/american.png" alt="">
                            </li>
                            <li>
                                <img src="https://www.mervins.com.mx/images/payments/spei1.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section2">
                    <section class="categories">
                        <div class="drop-content">
                            <button class="drop-menu-button"><span>Categorias</span><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-chevron-down"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg></button>
                            {{-- No usar divs dentro de drop-body usa section, porque el div tiene estilos para el hipervinculo que se usa con el metodo 'location.href' de javascript --}}
                            <div class="drop-body">
                                @foreach ($categories as $category)
                                    <div onclick="location.href='/category/{{ $category->id }}'">
                                        {{ substr($category->name, 0, 30) }}</div>
                                @endforeach
                                <div onclick="location.href=''">Ver mas...</div>
                            </div>
                        </div>

                        @foreach ($categoriesDrops as $category)
                            <div
                                @if (isset($category->reponsive) && $category->reponsive == true) class="drop-content d-none d-xl-block" @else class="drop-content" @endif>
                                <button class="drop-menu-button"><span>{{ $category->name }}</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg></button>
                                <div class="drop-body">
                                    @foreach ($category->subcategories->take(13) as $subcategory)
                                        <div onclick="location.href='/category/{{ $subcategory->id }}'">
                                            {{ substr($subcategory->name, 0, 30) }}</div>
                                    @endforeach
                                    <div onclick="location.href=''">Ver mas...</div>
                                </div>
                            </div>
                        @endforeach

                    </section>
                    <section class="user">
                        @guest
                            <a class="link" href="/registro">Crea tu cuneta</a>
                            <a class="link" href="/login">Ingresa</a>
                        @endguest

                        @auth
                            <div class="drop-content user-drop">
                                <button class="drop-menu-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person svgUser" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg><span>{{ substr(explode(' ', auth()->user()->name)[0], 0, 10) }}</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg></button>
                                <div class="drop-body">
                                    <section class="user-name">
                                        <picture>
                                            <img src="https://www.mervins.com.mx/storage/blogs/Mervins-Mascota_1676397104.png"
                                                alt="">
                                        </picture>
                                        <section class="name-welcome">
                                            <p>!Hola {{ substr(explode(' ', auth()->user()->name)[0], 0, 8) }} Bienvenido¡</p>
                                        </section>
                                    </section>
                                    <hr>
                                    <div onclick="location.href=''">Detalles personales</div>
                                    <div onclick="location.href=''">Rastrea tu pedido</div>
                                    <div onclick="location.href=''">Cambiar contraseña</div>
                                    <div onclick="location.href=''">Mis compras</div>
                                    <hr>
                                    <div onclick="location.href='/logout'">Salir</div>
                                </div>
                            </div>
                        @endauth

                        <a class="link" href="">Mis conpras</a>

                        @auth
                            <a class="link wishlistLink" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg></a>
                        @endauth

                        <a class="link cartLink" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg></a>
                    </section>
                </div>
            </section>
        </nav>

    </header>
@endsection

@section('vistaInicio')
    <!-- Style the bar as you like -->

    <div style="max-width: 1700px; margin-left: auto; margin-right: auto;">
        @livewire('inicio-' . $version, ['products' => $products])
    </div>

    <script>
        let elms = document.getElementsByClassName('splide');

        for (let i = 0; i < elms.length; i++) {
            let splide = new Splide(elms[i], {
                type: 'loop',
                autoplay: true,
                perMove: 1
            });
            let bar = splide.root.querySelector('.my-slider-progress-bar');

            // Updates the bar width whenever the carousel moves:
            // los stilos de el progress-bar estan en los estilos de inicioV1.css
            if (bar) {
                splide.on('mounted move', function() {
                    let end = splide.Components.Controller.getEnd() + 1;
                    let rate = Math.min((splide.index + 1) / end, 1);
                    bar.style.width = String(100 * rate) + '%';
                });
            }
            splide.mount();
        }
    </script>
@endsection
