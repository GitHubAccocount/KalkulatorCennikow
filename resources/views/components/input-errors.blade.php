@if($errors->any())
<div class="mt-4">
    @php
        $displayedMessages = [];
    @endphp
    <ul class="list-disc list-inside text-red-500">
        @foreach ($errors->all() as $error)
            @if(!in_array($error, $displayedMessages))
                <li class="list-none">{{ $error }}</li>

                @php
                    $displayedMessages[] = $error;
                @endphp
            @endif
        @endforeach
    </ul>
</div>
@endif