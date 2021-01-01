@props([
    'label' => '',
    'id' => '',
    'type' => '',
    'name' => '',
    'value' => '',
])

<div class="form-element-group">
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    <input value="{{ old($name) }}" class="form-input @error($name) error-input @enderror" type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" @if(! empty($value)) value="{{ $value }}" @endif>
    @error($id)
        <span class="error-text">{{ $message }}</span>
    @enderror
</div>
