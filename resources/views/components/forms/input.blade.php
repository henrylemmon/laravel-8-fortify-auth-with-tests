@props([
    'label' => '',
    'id' => '',
    'type' => '',
])

<div class="form-element-group">
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    <input value="{{ old($id) }}" class="form-input @error($id) error-input @enderror" type="{{ $type }}" id="{{ $id }}" name="{{ $id }}">
    @error($id)
        <span class="error-text">{{ $message }}</span>
    @enderror
</div>
