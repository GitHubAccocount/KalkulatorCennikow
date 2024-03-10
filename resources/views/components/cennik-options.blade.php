<div class="flex flex-col mt-3">
    <label class="font-bold w-fit" for="cenniki">Wybierz cennik:</label>
    <div class="max-full">
    <select class="cursor-pointer w-full" name="cenniki" id="cenniki">
      <option value="gr5_s24" {{ old('cenniki') == 'gr5_s24' ? 'selected' : '' }}>Cennik Prąd z Serwisantem 24H - e-faktura - rabat nie mniej niż 5%</option>
      <option value="gr10_eko_las" {{ old('cenniki') == 'gr10_eko_las' ? 'selected' : '' }}>Cennik Prąd z Eko + LAS - rabat nie mniej niż 10%</option>
      <option value="gr02_eko_las" {{ old('cenniki') == 'gr02_eko_las' ? 'selected' : '' }}>Prąd Eko + LAS - 3 lata - e-faktura - dla Domu - rabat nie mniej niż 0,2%</option>
      <option value="gr10_eko_kom" {{ old('cenniki') == 'gr10_eko_kom' ? 'selected' : '' }}>Prąd Eko z Serwisantem komputerowym 24H - 3 lata - e-faktura - dla
        Domu - rabat nie mniej niż 10%</option>
      <option value="gr02_eko_kom" {{ old('cenniki') == 'gr02_eko_kom' ? 'selected' : '' }}>Prąd Eko z Serwisantem komputerowym 24H - 3 lata - e-faktura - dla
        Domu - rabat nie mniej niż 0,2%</option>
      <option value="gr10_zdr" {{ old('cenniki') == 'gr10_zdr' ? 'selected' : '' }}>Prąd z usługami Zdrowie i Opieka 24H - 3 lata - e-faktura - dla Domu
        - rabat nie mniej niż 10%</option>
    </select>
    </div>
  </div>