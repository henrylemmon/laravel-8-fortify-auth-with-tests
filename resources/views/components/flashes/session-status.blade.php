@if(session('status'))
    <div class="mb-4">
        <span class="text-green-700 bg-green-100 py-3 px-4 rounded">
            {{ ucfirst(str_replace('-', ' ', session('status'))) }}
        </span>
    </div>
@endif
