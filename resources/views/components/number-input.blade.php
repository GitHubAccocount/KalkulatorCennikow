<div>
  <input class="border border-gray-950 rounded-sm" type="{{ $type ?? 'number' }}" id="{{ $id }}" name="{{ $name }}" placeholder="0" value="{{ old($name) }}" @if($isRequired) required @endif>
  <span>({{ $span }})</span>
</div>