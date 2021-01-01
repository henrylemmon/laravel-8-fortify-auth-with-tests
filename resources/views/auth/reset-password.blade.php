<x-layouts.app>

    <x-layouts.page.header></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Reset Password
                </div>

                <x-forms.form
                    action="{{ route('password.update') }}"
                >
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <x-forms.input
                        label="Email"
                        id="email"
                        type="email"
                        name="email"
                        value="{{ $request->email }}"
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
                            buttontext="Update"
                        ></x-forms.button>

                        <a
                            href="register"
                            class="text-blue-500 hover:text-blue-700 hover:underline"
                        >
                            Dont have an account?
                        </a>

                        <x-forms.cancel-button></x-forms.cancel-button>
                    </x-forms.form-footer>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
