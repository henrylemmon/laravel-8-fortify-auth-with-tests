@props([
    'label' => '',
    'id' => '',
    'name' => '',
])

<div class="form-element-group">
    <label class="form-label"  for="{{ $id }}">{{ $label }}</label>
    <textarea class="form-textarea @error($name) error-input @enderror" id="{{ $id }}" name="{{ $name }}">{{ old($name) }}</textarea>
    @error($name)
        <span class="error-text">{{ $message }}</span>
    @enderror
</div>
