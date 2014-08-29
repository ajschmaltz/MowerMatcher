@if (count($mower->images) > 0)
<img class="img-responsive" src="{{ Image::path('/pics_mowers_for_sale/'.$mower->images[0]->filename, 'resize', '846') }}" />
@endif

@foreach ($mower->images as $image)
<img class="img-responsive pull-left" src="{{ Image::path('/pics_mowers_for_sale/'.$image->filename, 'resize', '100') }}" />
@endforeach