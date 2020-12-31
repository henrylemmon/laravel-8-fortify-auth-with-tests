@props([
    'label' => '',
    'id' => '',
])

<div class="form-element-group">
    <label class="form-label"  for="{{ $id }}">{{ $label }}</label>
    <textarea class="form-textarea @error($id) error-input @enderror" id="{{ $id }}" name="{{ $id }}">{{ old($id) }}</textarea>
    @error($id)
        <span class="error-text">{{ $message }}</span>
    @enderror
</div>
