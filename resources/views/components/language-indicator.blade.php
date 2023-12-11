@props(['language'])
@php
$knownLanguages = [
    'PHP' => 'bg-[#4F5D95]',
    'TypeScript' => 'bg-[#3178c6]',
    'CSS' => 'bg-[#563d7c]',
    'Rust' => 'bg-[#dea584]',
    'Dockerfile' => 'bg-[#384d54]',
    'C++' => 'bg-[#f34b7d]',
    'Meson' => 'bg-[#007800]',
    'Erlang' => 'bg-[#B83998]',
    'Gleam' => 'bg-[#ffaff3]',
    'JavaScript' => 'bg-[#f1e05a]',
    'HTML' => 'bg-[#e34c26]'
];

$languageColor = isset($knownLanguages[$language]) ? $knownLanguages[$language] : 'bg-[#ededed]';
@endphp

<div class="flex flex-row gap-1 items-center">
    <div class='{{ "rounded-full w-3 h-3 " . $languageColor . " border"}} '></div>
    <div>{{ $language }}</div>
</div>
