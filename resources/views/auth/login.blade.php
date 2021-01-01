<x-layouts.app>

    <x-layouts.page.header></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Login
                </div>
                <x-forms.form
                    action="{{ route('login') }}"
                >
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

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Submit"
                        ></x-forms.button>

                        <a
                            href="forgot-password"
                            class="text-blue-500 hover:text-blue-700 hover:underline"
                        >
                            Forgot your password?
                        </a>

                        <x-forms.cancel-button></x-forms.cancel-button>
                    </x-forms.form-footer>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
