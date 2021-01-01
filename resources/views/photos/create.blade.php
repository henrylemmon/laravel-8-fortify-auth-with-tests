<x-layouts.app>

    <x-layouts.page.navigation></x-layouts.page.navigation>

    <x-layouts.page.header></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Post A Photo
                </div>
                <x-forms.form
                    enctype="multipart/form-data"
                    action="/hello"
                >
                    <x-forms.input
                        label="Title"
                        id="title"
                        type="text"
                    ></x-forms.input>

                    <x-forms.textarea
                        label="Comment"
                        id="comment"
                    >
                    </x-forms.textarea>

                    <x-forms.file-input
                        name="image"
                    ></x-forms.file-input>

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Submit"
                        ></x-forms.button>
                    </x-forms.form-footer>
                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
