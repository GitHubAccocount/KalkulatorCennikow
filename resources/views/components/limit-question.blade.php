<p class="mt-3 font-bold">Czy został przekroczony limit, do którego obowiązują zamrożone ceny prądu?</p>
<div>
  <div>
    <input type="radio" id="yes" name="limit_exceeded" value="yes" {{ old('limit_exceeded') == 'yes' ? 'checked' : '' }}>
    <label for="yes">Tak</label>
  </div>
  <div>
    <input type="radio" id="no" name="limit_exceeded" value="no" {{ old('limit_exceeded') == 'no' ? 'checked' : '' }}>
    <label for="no">Nie</label>
  </div>
</div>