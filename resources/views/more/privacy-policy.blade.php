@extends('layouts.master')

@section('content')
<div class="text-gray-700">
  <h1 class="text-3xl font-bold text-center">Polityka Prywatności</h1>

  <p class="mt-5">
    Serwis {{ $websiteName }} nie zbiera, nie analizuje ani nie korzysta z żadnych prywatnych informacji mogących w jakikolwiek sposób 
    zidentyfikować użytkownika lub jego komputer. Czasami jednak analizujemy ruch na naszych stronach korzystając z logów serwera.
  </p>
    
  <ol class="mt-5 list-decimal list-inside">
      <h3 class="font-bold text-xl text-center">Pliki Cookie<h3>
      <li class="mt-3">
        Stosujemy pliki cookie lub podobne technologie (zwane dalej łącznie: „plikami cookie”) poprzez które należy rozumieć dane 
        informatyczne, w szczególności pliki tekstowe, przeznaczone do korzystania ze strony internetowej i przechowywane w urządzeniach 
        końcowych Użytkowników przeglądających strony. Informacje zbierane przy pomocy plików cookie pozwalają dostosowywać usługi i 
        treści do indywidualnych potrzeb, a także preferencji użytkowników, jak również służą do opracowywania ogólnych statystyk 
        dotyczących korzystania przez użytkowników ze stron. Dane gromadzone przy użyciu plików cookie są zbierane wyłącznie w celu 
        wykonywania określonych funkcji na rzecz Użytkowników i są zaszyfrowane w sposób uniemożliwiający dostęp do nich osobom 
        nieuprawnionym.
      </li>
      <li class="mt-3">
        Na naszej stronie stosujemy pliki cookie:
        <ol class="mt-2 list-decimal list-inside">
          <li class="ml-5">
            Cookies sesyjne - pliki zamieszczane i odczytywane z Urządzenia Użytkownika przez Serwis podczas jednej sesji danego Urządzenia. 
            Po zakończeniu sesji pliki są usuwane z Urządzenia Użytkownika.
          </li>
        </ol>
      </li>
      <li class="mt-3">
        W ramach naszej strony internetowej, stosowane są następujące rodzaje plików cookie ze względu na niezbędność do realizacji usług:
        <ol class="mt-2 list-decimal list-inside">
          <li class="ml-5">
            niezbędne pliki cookie, umożliwiające korzystanie z usług dostępnych w ramach strony internetowej, w szczególności uwierzytelniające 
            pliki cookie wykorzystywane do usług wymagających uwierzytelnienia;
          </li>
          <li class="ml-5">
            pliki cookie służące do zapewnienia bezpieczeństwa, w szczególności wykorzystywane do wykrywania nadużyć w zakresie uwierzytelniania;
          </li>
          <li class="ml-5">
            wydajnościowe pliki cookie, umożliwiające zbieranie informacji o sposobie korzystania ze stron internetowych;
          </li>
        </ol>
      </li>
      <li class="mt-3">
        Oprogramowanie do przeglądania stron internetowych (przeglądarka internetowa) zazwyczaj domyślnie dopuszcza przechowywanie plików 
        cookie w urządzeniu końcowym. Użytkownik przeglądający stronę internetową może samodzielnie i w każdym czasie zmienić ustawienia 
        dotyczące plików cookie, określając warunki ich przechowywania i uzyskiwania dostępu przez pliki cookie do swojego urządzenia. 
        Zmiany ustawień, o których mowa w zdaniu poprzednim, Klient może dokonać za pomocą ustawień przeglądarki internetowej. 
        Ustawienia te mogą zostać zmienione w szczególności w taki sposób, aby blokować automatyczną obsługę plików cookie w ustawieniach 
        przeglądarki internetowej bądź informować o ich każdorazowym zamieszczeniu plików cookie na urządzeniu Użytkownika. 
        Szczegółowe informacje o możliwości i sposobach obsługi plików cookie dostępne są w ustawieniach oprogramowania 
        (przeglądarki internetowej).
      </li>
      <li class="mt-3">
        Korzystanie ze strony internetowej, bez zmiany ustawień w zakresie plików cookie, oznacza wyrażenie zgody na zapisywanie 
        plików cookie. Klienta zawsze może wycofać zgodę poprzez zmianę ustawień dotyczących plików cookie.Informacje w jaki sposób 
        dokonać konfiguracji ustawień plików cookie w przykładowych przeglądarkach internetowych Użytkownik może znaleźć tutaj:
        <ul class="list-disc list-inside">
          <li class="ml-5"><a href="https://support.google.com/accounts/answer/61416?co=GENIE.Platform%3DDesktop&hl=pl" class="cursor-pointer" target="_blank">Chrome</a></li>
          <li class="ml-5"><a href="https://help.opera.com/pl/latest/web-preferences/" class="cursor-pointer" target="_blank">Opera</a></li>
          <li class="ml-5"><a href="https://support.mozilla.org/pl/kb/blokowanie-ciasteczek" class="cursor-pointer" target="_blank">FireFox</a></li>
          <li class="ml-5"><a href="https://support.microsoft.com/pl-pl/help/4027947/microsoft-edge-delete-cookies" class="cursor-pointer" target="_blank">Edge</a></li>
          <li class="ml-5"><a href="https://support.apple.com/pl-pl/guide/safari/sfri11471/mac" class="cursor-pointer" target="_blank">Safari</a></li>
          <li class="ml-5"><a href="https://windows.microsoft.com/pl-pl/internet-explorer/delete-manage-cookies#ie=ie-11" class="cursor-pointer" target="_blank">Internet Explorer 11</a></li>
        <ul>
      </li>
    </ol>
</div>
@endsection