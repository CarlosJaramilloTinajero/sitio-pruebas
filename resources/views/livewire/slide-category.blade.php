<div>
    <h3 class="tituloSlide">
        {{$category->name}}
    </h3>
    <hr style="margin: 0;">

    <section class=" splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track" style="padding-top: 20px; padding-bottom: 20px;">
            <ul class="splide__list">
                @foreach ($category->products->take(10) as $product)
                <li class="splide__slide">
                    @livewire('product', ['product' => $product])
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>