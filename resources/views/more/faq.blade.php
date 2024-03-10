@extends('layouts.master')

@section('content')
<div class="space-y-4">
  <details
    class="group border-s-4 border-pink-600 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
  >

    <x-faq.faq-question textOfFaqQuestion="Czy strona 'NAZWA STRONY', jest oficjalną stroną Taurona?" />

    <p class="mt-4 leading-relaxed text-gray-700">
      Nie. Strona {{ $websiteName }} nie jest oficjalną stroną Taurona. Jest to aplikacja internetowa, która
      ma celu pomoc użytkownikom w podjęciu decyzji dotyczących cenników oferowanych przez firmę Tauron.
    </p>

    <p class="mt-4 leading-relaxed text-gray-700">
      Niczego nie doradzamy, ani nie odradzamy. Ostateczna decyzja zawsze należy do użytkownika.
      My dostarczamy jedynie narzędzie, które powinno pomóc użytkownikowi w procesie podejmowania decyzji.
    </p>

  </details>

  <details
    class="group border-s-4 border-pink-600 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
  >

    <x-faq.faq-question textOfFaqQuestion="Skąd mam pewność, że cenniki podane w kalkulatorze są aktualne?" />

    <p class="mt-4 leading-relaxed text-gray-700">
      Firma Tauron oferuje bardzo wiele różnych cenników, które dodatkowo są często zmieniane. Na naszej stronie korzystamy tylko
      z kilku przykładowych. Ale to żaden problem. 
      <br>
      <span class="font-bold">Jeśli nie możesz znaleźć wybranego przez siebie cennika</span> wystarczy, że po wyborze 
      taryfy, w polu "<span class="font-bold">Co jeśli na liście nie ma cennika, który mnie interesuje?</span>" wpiszesz  
      <span class="font-bold">wysokość opłaty handlowej</span> i  <span class="font-bold">rabat</span> wynikający z cennika, 
      który Cię interesuje. Teraz nasz kalkulator będzie mógł wykonać poprawne obliczenia.
    </p>

    <p class="mt-4 leading-relaxed text-gray-700">
      Poniżej znajdują się cenniki, które aktualnie są używane w naszym kalkulatorze. 
    </p>

    @if (!empty( $codes))
      @foreach ( $codes as $code)
          <a class="text-blue-500 block py-1">
              {{ $code }}
          </a>
      @endforeach
    @else
      <p class="italic text-red-500 pt-2">Coś poszło nie tak. Cenniki nie mogą zostać wczytane.</p>
    @endif


    <p class="mt-4 leading-relaxed text-gray-700">
      Możesz porównać nazwy powyższych cenników z tymi na oficjalnej stronie Taurona.
    </p>
  </details>

  <details
    class="group border-s-4 border-pink-600 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
  >
    
    <x-faq.faq-question textOfFaqQuestion="Skąd mam pewność, że ceny prądu używane w kalkulatorze są aktualne?" />

    <p class="mt-4 leading-relaxed text-gray-700">
      Oczywiście, staramy się na bieżąco aktualizować naszą baze danych.
    </p>
    <p class="mt-4 leading-relaxed text-gray-700">
      Poniżej znajdują się tabele z cenami, które są aktualnie używane w naszym kalkulatorze. 
      Możesz zawsze porównać poniższe ceny z cenami z oficjalnej storny Taurona lub zadzwonić na 
      oficjalną infolinię Taurona i poprosić o podanie aktualncyh cen za prąd.
    </p>

    <x-faq-table limit="before" />
    <br>
    <x-faq-table limit="after" />
    <br>
    <x-faq-table limit="beyond" />

  </details>
</div>
@endsection