@extends('client.layouts.client-app')
@section('title', 'PRODUCTS')
@section('content')
@foreach($products as $product)
<div class="w-1/4 py-2 px-2">
  <div class="max-w-md rounded overflow-hidden bg-transparet border-2 border-grey-lightest h-auto  ">
    <img class="w-full" src="https://source.unsplash.com/random/200*20{{ $product->id }}" alt="{{ $product->name }}" />
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
      <p class="text-grey-darker text-base">{{ $product->details }}</p>
    </div>
    <div class="px-6 py-4">
      <span class="inline-block bg-grey-light rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">{{ $product->presentPrice() }}</span>
      <a href="{{ route('shop.show', $product->slug) }}" class="inline-block bg-grey-light rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">more details</a>
    </div>
  </div>
</div>
@endforeach
@endsection