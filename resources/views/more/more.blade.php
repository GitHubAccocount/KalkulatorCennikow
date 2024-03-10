@extends('layouts.master')

@section('content')

  <x-full-width-button 
  textOfFullWidthButton="Najczęściej zadawane pytania" 
  routeOfFullWidthButton="faq" 
  class="bg-gray-500 hover:bg-gray-600" 
  />

  <x-full-width-button 
  textOfFullWidthButton="Regulamin" 
  routeOfFullWidthButton="terms&conditions" 
  class="bg-gray-500 hover:bg-gray-600" 
  />

@endsection