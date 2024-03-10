@extends('layouts.master')

@section('content')
      <x-input-errors />  

      <form action="{{route('calculateg12w')}}" method="POST">
        @csrf

        <x-label-number-input for="consumption1" title="Wpisz miesięczne zużycie prądu w strefie 1 (dzienna)"/>
        <x-number-input id="consumption1" name="consumption1" span="kWh" :is-required="true"/>

        <x-label-number-input for="consumption2" title="Wpisz miesięczne zużycie prądu w strefie 2 (nocna)"/>
        <x-number-input id="consumption2" name="consumption2" span="kWh" :is-required="true"/>

        <x-limit-question />

        <x-cennik-options />

        <x-custom-cennik />

        <x-calculate-button />
      </form>
@endsection