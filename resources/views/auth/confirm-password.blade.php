<x-layouts.app>

    <x-layouts.page.header
        mt="mt-6"
    ></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Confirm Password
                </div>
                <x-forms.form
                    action="{{ route('password.confirm') }}"
                >
                    <x-forms.input
                        label="Password"
                        id="password"
                        type="password"
                        name="password"
                    ></x-forms.input>

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Confirm"
                        ></x-forms.button>

                    </x-forms.form-footer>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
