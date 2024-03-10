<details
class="group bg-gray-50 mt-10 [&_summary::-webkit-details-marker]:hidden"
@if(old('cennik_fee') != '' || old('cennik_discount') != '') open @endif
>

<x-faq.faq-question textOfFaqQuestion="Co jeśli na liście nie ma cennika, który mnie interesuje?" />

<p class="text-sm">Jeśli wybranego przez Ciebie cennika nie ma liście,  wystarczy, że poniżej podasz wysokość opłaty handlowej oraz rabat, 
  a zostaną one uwzględnione w obliczeniach <span class="underline">zamiast cennika z listy</span>:</p>

<div class="mt-1">
  <x-label-number-input for="cennik_fee" title="Wpisz wysokość opłaty handlowej"/>
  <x-number-input type="decimal" id="cennik_fee" name="cennik_fee" span="zł" :is-required="false"/>

  <x-label-number-input for="cennik_discount" title="Wpisz rabat wynikający z cennika"/>
  <x-number-input type="decimal" id="cennik_discount" name="cennik_discount" span="%" :is-required="false"/>
</div>
</details>