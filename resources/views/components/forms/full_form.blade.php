<div x-data="{ trying: true }" class="card">
    <div>
        <div class="card-heading">Create Photo Add</div>
    </div>

    <form action="/create-photo-add" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-element-group">
            <label class="form-label" for="byline">Byline</label>
            <input value="{{ old('byline') }}" class="form-input @error('byline') error-input @enderror" type="text" id="byline" name="byline">
            @error('byline')
            <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-element-group">
            <label class="form-label" l for="title">Title</label>
            <input value="{{ old('title') }}" class="form-input @error('title') error-input @enderror" type="text" id="title" name="title">
            @error('title')
            <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-element-group mb-8">
            <label class="form-label"  for="body">Body</label>
            <textarea class="form-input @error('body') error-input @enderror" id="body" name="body">{{ old('body') }}</textarea>
            @error('body')
            <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="file-input">
            <label class="file-label" for="file">Select Image<p class="file-name"></p></label>
            <input @change="trying = false" class="file" type="file" id="file" name="image">
            @error('image')
            <span x-show="trying" class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-footer">
            <button class="button" type="submit">Create Photo Add</button>
        </div>
    </form>
    {{--Hello--}}
</div>
