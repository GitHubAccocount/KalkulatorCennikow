<div class="w-full overflow-x-scroll">
    <table>
      <thead class="border-black">
        <tr>
          <th colspan="3" rowspan="2" class="py-20 px-4 border border-black bg-gray-200 uppercase">grupa taryfowa</th>
          <th colspan="8" class="border-black border bg-gray-200 uppercase text-sm">cena energii elektrycznej [zł/kWh]</th>
        </tr>
        <tr class="border border-black">
          <th class="-rotate-90 border border-black">całodobowa</th>
          <th class="-rotate-90 border border-black">szczytowa</th>
          <th class="-rotate-90 border border-black">pozaszczytowa</th>
          <th class="-rotate-90 border border-black">dzienna</th>
          <th class="-rotate-90 border border-black">nocna</th>
          <th class="-rotate-90 border border-black">w szczycie przedpołudniowym</th>
          <th class="-rotate-90 border border-black">w szczycie popołudniowym</th>
          <th class="-rotate-90 border border-black">w pozostałych godzinach doby</th>
        </tr>
      </thead>
      <tbody class="border border-black">
        <tr>
          <td rowspan="2" class="border border-black px-1 font-bold">G11</td>
          <td rowspan="2" class="border border-black text-center text-sm px-1">Dom Wygodny</td>
          <td class="text-xs border border-black">cena netto</td>
          <td class="border border-black text-center">{{$g11Netto}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr>
          <td class="text-xs border border-black">cena brutto</td>
          <td class="border border-black text-center">{{$g11Brutto}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr class="bg-slate-200">
          <td rowspan="2" class="border border-black px-1 font-bold">G12</td>
          <td rowspan="2" class="border border-black text-center text-sm px-1">Dom Oszczędna Noc</td>
          <td class="text-xs border border-black">cena netto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g12Netto1}}</td>
          <td class="border border-black text-center">{{$g12Netto2}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr class="bg-slate-200">
          <td class="text-xs border border-black">cena brutto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g12Brutto1}}</td>
          <td class="border border-black text-center">{{$g12Brutto2}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr>
          <td rowspan="2" class="border border-black px-1 font-bold">G12w</td>
          <td rowspan="2" class="border border-black text-center text-sm px-1">Dom Oszczędny</td>
          <td class="text-xs border border-black">cena netto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g12wNetto1}}</td>
          <td class="border border-black text-center">{{$g12wNetto2}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr>
          <td class="text-xs border border-black">cena brutto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g12wBrutto1}}</td>
          <td class="border border-black text-center">{{$g12wBrutto2}}</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
        </tr>
        <tr class="bg-slate-200">
          <td rowspan="2" class="border border-black px-1 font-bold">G13</td>
          <td rowspan="2" class="border border-black text-center text-sm px-1">Dom Oszczędny Plus</td>
          <td class="text-xs border border-black">cena netto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g13Netto1}}</td>
          <td class="border border-black text-center">{{$g13Netto2}}</td>
          <td class="border border-black text-center">{{$g13Netto3}}</td>
        </tr>
        <tr class="bg-slate-200">
          <td class="text-xs border border-black">cena brutto</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">x</td>
          <td class="border border-black text-center">{{$g13Brutto1}}</td>
          <td class="border border-black text-center">{{$g13Brutto2}}</td>
          <td class="border border-black text-center">{{$g13Brutto3}}</td>
        </tr>
      </tbody>
    </table>
  </div>