@extends('client.layouts.client-app')
@section('title', 'LANDING_PAGE')
@section('content')
@foreach($products as $product)
<div class="w-1/4 py-2 px-2">
  <div class="max-w-md rounded overflow-hidden bg-white border-2 border-grey-lightest h-auto">
    <img class="w-1/2" src="{{ asset('img/products/iphone.png') }}" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
      <p class="text-grey-darker text-base">{{ $product->details }}</p>
    </div>
    <div class="px-6 py-4">
      <span class="inline-block bg-grey-light rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">{{ $product->presentPrice() }}</span>
      <a href="{{ route('shop.show', $product->slug) }}" class="inline-block bg-grey-light rounded-full px-3 py-1 text-xs text-grey-darker">المزيد من المعلومات</a>
    </div>
  </div>
</div>
@endforeach
@endsection