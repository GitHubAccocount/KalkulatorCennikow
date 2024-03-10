@extends('layouts.master')

@section('content')
      <x-input-errors />      

      <form action="{{route('calculateg11')}}" method="POST">
        @csrf

        <x-label-number-input for="consumption1" title="Wpisz miesięczne zużycie prądu"/>
        <x-number-input id="consumption1" name="consumption1" span="kWh" :is-required="true"/>

        <x-limit-question />

        <x-cennik-options />

        <x-custom-cennik />

        <x-calculate-button />
      </form>
@endsection