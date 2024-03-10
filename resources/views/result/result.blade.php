@extends('layouts.master')

@section('content')
    <div class="flex flex-col items-center mb-5">
      <h1 class="font-extrabold uppercase text-4xl mb-1">wynik</h1>
      <h3 class="text-xs border rounded-md border-pink-600 p-2">{{$cennikDescription}}</h3>
    </div>
    <div>
      <p class="">Tyle zapłacisz za kupno energii elektrycznej<span class="text-red-500 font-bold">*</span> bez cennika <span class="text-xs">(brutto)</span>:
         <span class="font-bold">{{$realCost}} zł</span></p>

      </br>

      <p class="mt-1">Miesięczny koszt cennika (opłata handlowa): {{$cennikPrice}} zł</p>

      <p class="mt-1">Po uwzględnieniu cennika zapłacisz: : {{$realCost}} zł** 
        + opłata handlowa za cennik {{ $cennikPrice }} zł = <span class="font-bold">{{ $realCost + $cennikPrice }} zł</span>
      </p>

      {{-- <p class="mt-1">Różnica między kwotą bez rabatu i z rabatem: {{$realCost - $realCost}} zł</p> --}}

    </br>
      @if ((($realCost - $realCost) - $cennikPrice) < 0)
        <p class="mt-1 font-bold text-xl">Twoje rachunki wzrosną o 
          <span class="text-red-400 font-bold">{{-(($realCost - $realCost) - $cennikPrice)}} zł</span>
        </p>
      @endif
      @if ((($realCost - $realCost) - $cennikPrice) > 0)
        <p class="mt-1 font-bold text-xl">Twoje rachunki zmaleją o 
          <span class="text-green-400 font-bold">{{($realCost - $realCost) - $cennikPrice}} zł</span>
        </p>
      @endif
    </div>
    
    <div class="flex flex-col mt-10 w-full border-t-2 border-gray-400 py-1">

      <details
      class="group mt-2 [&_summary::-webkit-details-marker]:hidden"
      >
        <summary class="flex cursor-pointer gap-1.5">
          <p class="text-sm text-red-500 font-bold">
            *
          </p>
      
          <span class="group-open:hidden mr-4 italic text-xs">
            (rozwiń)
          </span>
          <span class="hidden group-open:block mr-4 italic text-xs">
            (zwiń)
          </span>
        </summary>

        <p class="mt-1 italic text-sm">
          <span class="font-bold">
            Proszę zwrócić uwagę, że rabaty wynikające z 
            cenników mają wpływ tylko i wyłącznie na cenę po jakiej jest Państwu sprzedawana energia.
            Cenniki nie mają wpływu na cenę dystrybucji energi oraz pozostałe koszty uwzględniane w rozliczeniu np. opłata abonamentowa.
          </span>
        </br>
          Dlatego kalkulator oblicza tylko i wyłącznie kwotę jaką Państwo zapłaciliby za kupno energii elektrycznej, 
          pomijając pozostałe opłaty wchodzące w skład faktury rozliczeniowej.
        </p>

      </details>

      <details
      class="group mt-2 [&_summary::-webkit-details-marker]:hidden"
      >
        <summary class="flex cursor-pointer gap-1.5">
          <p class="text-sm">
            **
          </p>
      
          <span class="group-open:hidden mr-4 italic text-xs">
            (rozwiń)
          </span>
          <span class="hidden group-open:block mr-4 italic text-xs">
            (zwiń)
          </span>
        </summary>

        <p class="mt-1 italic text-sm">
          W trakcie trwania zamrożonych cen prądu, zniżki wynikające z posiadania cenników nie są uwzględniane.
        </p>

      </details>

      <details
      class="group mt-2 [&_summary::-webkit-details-marker]:hidden"
      >
        <summary class="flex cursor-pointer mt-10 items-center">
          <p>
            Jak wyglądałaby sytuacja bez zamrożonych cen prądu? 
          </p>
      
          <span class="group-open:hidden mr-4 italic text-xs ml-1">
            (rozwiń)
          </span>
          <span class="hidden group-open:block mr-4 italic text-xs ml-1">
            (zwiń)
          </span>
        </summary>

        <div class="mt-2 border border-gray-600 w-fit p-2 rounded-sm">
          <p>Bez zamrożonych cen prądu zapłaciłbyś/abyś: <span class="font-bold">{{$specCostWithoutCennik}} zł</span></p>
          <p>Po uwzględnieniu cennika zapłaciłbyś/abyś: {{$specCostWithCennik}} zł 
            + opłata handlowa za cennik {{ $cennikPrice }} zł = <span class="font-bold">{{ $specCostWithCennik + $cennikPrice }} zł</span></p>
          @if (($totalCosts) < 0)
            <p class="mt-1 font-bold text-xl">Twoje rachunki wzrosłby o 
              <span class="text-red-400 font-bold">{{-($totalCosts)}} zł</span>
            </p>
          @endif
          @if (($totalCosts) > 0)
            <p class="mt-1 font-bold text-xl">Twoje rachunki zmalałyby o 
              <span class="text-green-400 font-bold">{{$totalCosts}} zł</span>
            </p>
          @endif
        </div>

      </details>
</div>
@endsection