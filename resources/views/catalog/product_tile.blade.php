<div class="col-md-6 product-block">
    <div class="img">
        @if ($product->image)
            <a class="popup-product" title="{{ $product->name }}" href="/images/original/{{ $product->img_url . $product->image }}">
                <img src="/images/medium/{{ $product->img_url . $product->image }}" class="img-responsive">
            </a>
        @else
            <img src="/img/default.png" class="img-responsive">
        @endif
    </div>
    <div class="description">
        <div class="name">{{ $product->name }}</div>
        <div class="type">@if ($product->type){{ trans('vars.type')[$product->type] }}@endif</div>
        <div class="about">{{ $product->brief }}</div>
        <div class="volume">{{ $product->volume ? 'Объем '.$product->volume : '' }}</div>
        <div class="strength">{{ $product->strength ? 'Спирт '.$product->strength : '' }}</div>
        @if ($product->type == 1)
            <div class="wine-type red"></div>
        @elseif ($product->type == 2)
            <div class="wine-type white"></div>
        @endif
    </div>
    <div class="clearfix"></div>
</div>