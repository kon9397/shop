<section class="categories">
    <div class="container">
        <h2 class="section__title">
            Категории товаров
        </h2>
        <div class="cards">
            @if(count($categories) > 0)
                @foreach($categories as $category)

                        <div class="card">
                            <a href="categories/{{$category->id}}">
                                <h3 class="card__title">
                                    {{ $category->name }}
                                </h3>
                                <div class="card__img">
                                    <img src="{{ $category->image_path }}" alt="">
                                </div>
                                <p class="card__text">{{ $category->description }}</p>
                            </a>
                        </div>


                @endforeach
            @endif
        </div>
    </div>
</section>

