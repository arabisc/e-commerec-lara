@extends('client.layouts.client-app')
@section('title', $product->name)
@section('content')
  <div class="w-2/5">
    <h1 style="color: #2b3636; text-shadow: 0 0 4px rgba(0,0,0,0.5)">{{ $product->name }}</h1>
    <img class="w-full" src="https://source.unsplash.com/random/200*20{{ $product->id }}" alt="{{ $product->name }}" />
    <p class="font-bold my-4">{{ $product->details }}</p>
    <p>{{ $product->description }} </p>
    <span class="inline-block bg-white rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">{{ $product->presentPrice() }}</span>
  </div>
  <div class="w-3/5">
    <div class="flex">
      @foreach($mightAlsoLike as $product)
        <a class="mx-5" href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
      @endforeach
    </div>
  </div>
@endsection