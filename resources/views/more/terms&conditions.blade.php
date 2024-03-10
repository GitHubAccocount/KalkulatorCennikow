@extends('layouts.master')

@section('content')
  <div class="text-gray-700">
    <h1 class="text-3xl font-bold text-center">Regulamin</h1>
    <ol class="mt-5 list-decimal list-inside">
      {{-- 1 --}}
      <li>
        <h3 class="font-bold inline text-xl">Postanowienia ogólne</h3>
        <ol class="list-decimal list-inside pl-2">
          <li class="mt-1">
            Niniejszy regulamin określa zasady korzystania z serwisu 
            {{ $websiteName }} (dalej zwanej "Serwisem").
          </li>
          <li class="mt-1">
            Niniejszy Serwis nie jest powiązany, sponsorowany ani zatwierdzony przez firmę 
            Tauron Sprzedaż sp. z o.o. (dalej zwana "Tauron").
          </li>
          <li class="mt-1">
            Korzystanie z Serwisu oznacza akceptację niniejszego regulaminu.
          </li>
        </ol>
      </li>

      {{-- 2 --}}
      <li class="mt-3">
        <h3 class="font-bold inline text-xl">Cel i zakres działania Serwisu</h3>
        <ol class="list-decimal list-inside pl-2">
          <li class="mt-1">
            Serwis [nazwa Twojej strony internetowej] 
            stanowi narzędzie służące do udostępniania kalkulatora do obliczania ceny rachunków za sprzedaż energii elektrycznej
            bez uwzględniania ofert oferowanych przez firmę Tauron jak i po ich uwzględnieniu oraz 
            porównywanie kosztów z obydwu przypadków.
          </li>
          <li class="mt-1">
            Niniejszy Serwis nie gwarantuje, że wybór oferty Tauron będzie najlepszym wyborem dla użytkownika, 
            a wyniki uzyskane za pomocą kalkulatora są jedynie szacunkowe i mogą się różnić od faktycznych rachunków użytkownika.
          </li>
          <li class="mt-1">
            Właściciel Serwisu dokłada wszelkich starań, aby prezentowane informacje były rzetelne i aktualne, 
            ale nie może zagwarantować ich pełnej dokładności, zgodności z aktualnymi ofertami Tauron ani odpowiadać 
            za ewentualne szkody wynikłe z ich wykorzystania.
          </li>
          <li class="mt-1">
            Niniejszy regulamin wyraźnie informuje, że Serwis nie ma na celu naruszania dobrego imienia firmy Tauron, 
            wprowadzania klientów w błąd ani udostępniania nieprawidłowych informacji.
          </li>
          <li class="mt-1">
            Serwis nie zbiera żadnych danych osobowych użytkowników.
          </li>
        </ol>
      </li>

      {{-- 3 --}}
      <li class="mt-3">
        <h3 class="font-bold inline text-xl">Odpowiedzialność</h3>
        <ol class="list-decimal list-inside pl-2">
          <li class="mt-1">
            Właściciel Serwisu nie ponosi odpowiedzialności za ewentualne 
            szkody wynikłe z korzystania z Serwisu.
          </li>
        </ol>
      </li>

      {{-- 4 --}}
      <li class="mt-3">
        <h3 class="font-bold inline text-xl">Postanowienia końcowe</h3>
        <ol class="list-decimal list-inside pl-2">
          <li class="mt-1">
            Właściciel Serwisu zastrzega sobie prawo do wprowadzania zmian w niniejszym regulaminie.
          </li>
          <li class="mt-1">
            Użytkownicy Serwisu są zobowiązani do regularnego zapoznawania się z treścią regulaminu w celu śledzenia 
            ewentualnych zmian.
          </li>
          <li class="mt-1">
            Niniejszy regulamin wchodzi w życie od momentu udostępnienia Serwisu.
          </li>
        </ol>
      </li>
    </ol>
  </div>

@endsection