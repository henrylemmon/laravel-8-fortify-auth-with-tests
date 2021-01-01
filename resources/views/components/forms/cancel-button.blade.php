@props([
    'buttontext' => 'Cancel',
    'url' => '/',
])
<div>
    <a href="{{ $url }}"><p class="button-cancel">{{ $buttontext }}</p></a>
</div>
