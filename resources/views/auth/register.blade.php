<x-layouts.app>

    <x-layouts.page.header></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Register
                </div>
                <x-forms.form
                    action="{{ route('register') }}"
                >
                    <x-forms.input
                        label="Name"
                        id="name"
                        type="name"
                        name="name"
                    ></x-forms.input>

                    <x-forms.input
                        label="Email"
                        id="email"
                        type="email"
                        name="email"
                    ></x-forms.input>

                    <x-forms.input
                        label="Password"
                        id="password"
                        type="password"
                        name="password"
                    ></x-forms.input>

                    <x-forms.input
                        label="Retype Password"
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                    ></x-forms.input>

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Register"
                        ></x-forms.button>

                        <x-forms.cancel-button></x-forms.cancel-button>
                    </x-forms.form-footer>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
