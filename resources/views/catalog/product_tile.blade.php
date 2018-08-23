<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product-tile thumbnail">
        <div class="img">
            @if ($product->image)
                <a class="popup-product" title="{{ $product->name }}" href="/images/large/{{ $product->img_url . $product->image }}">
                    <img src="/images/medium/{{ $product->img_url . $product->image }}" class="img-responsive">
                </a>
            @else
                <img src="/img/default.png" class="img-responsive">
            @endif
        </div>
        <div class="product-name">{{ $product->name }}</div>
        <div class="product-description">{{ $product->brief }}</div>
        <div class="product-spec">{{ $product->volume ? 'Объем '.$product->volume : '' }}</div>
        <div class="product-spec">{{ $product->strength ? 'Спирт '.$product->strength : '' }}</div>
    </div>
</div>