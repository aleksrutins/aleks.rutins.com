@props(['language'])

<div class="flex flex-row gap-1 items-center">
    <div class='{{ "rounded-full w-3 h-3 border"}}' style="background-color: {{ $language['color'] }};"></div>
    <div>{{ $language['language'] }}</div>
</div>
