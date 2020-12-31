@props([
    'name' => '',
])

<div x-data="{ validate: true }" class="file-input">
    <label class="file-label" for="file">Select Image<p class="file-name"></p></label>
    <input @change="validate = false" class="file" type="file" id="file" name="image">
    @error('image')
        <span x-show="validate" class="error-text">{{ $message }}</span>
    @enderror
</div>
