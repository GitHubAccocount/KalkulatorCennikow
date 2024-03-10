@extends('layouts.master')

@section('content')
      <h1 class="text-4xl uppercase text-center font-extrabold mb-1">kalkulator cenników</h1>
      <h2 class="text-xl text-center mb-8">Sprawdź jak cennik z Taurona zmieni Twoje rachunki</h2>
      <p class="mt-3 font-bold">Jaką taryfę posiadasz?</p>
      <div class="flex flex-col items-center">
        <x-full-width-button 
        textOfFullWidthButton="G11" 
        routeOfFullWidthButton="show_g11" 
        class="bg-pink-600 hover:bg-pink-800" 
        />

        <x-full-width-button 
        textOfFullWidthButton="G12" 
        routeOfFullWidthButton="show_g12" 
        class="bg-pink-600 hover:bg-pink-800" 
        />

        <x-full-width-button 
        textOfFullWidthButton="G12W" 
        routeOfFullWidthButton="show_g12w" 
        class="bg-pink-600 hover:bg-pink-800" 
        />

        <x-full-width-button 
        textOfFullWidthButton="G13" 
        routeOfFullWidthButton="show_g13" 
        class="bg-pink-600 hover:bg-pink-800" 
        />

      </div>

      <div class="flex justify-evenly items-end absolute inset-x-0 bottom-0 mb-2">
        <a href="{{route('faq')}}" class="bg-gray-600 text-gray-50 rounded-md px-2 py-1 cursor-pointer text-xs">FAQ</a>
        <a href="{{route('terms&conditions')}}" class="bg-gray-600 text-gray-50 rounded-md px-2 py-1 cursor-pointer text-xs">Regulamin</a>
        <a href="{{route('privacy_policy')}}" class="bg-gray-600 text-gray-50 rounded-md px-2 py-1 cursor-pointer text-xs">Polityka prywatności</a>
      </div>
@endsection