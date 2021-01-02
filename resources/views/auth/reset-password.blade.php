<x-layouts.app>

    <x-layouts.page.header
        mt="mt-6"
    ></x-layouts.page.header>

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

                    <div class="form-element-group">
                        <label class="form-label" for="email">Email</label>
                        <input value="{{ $request->email }}" class="form-input @error('email') error-input @enderror" type="email" id="email" name="email">
                        @error('email')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

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

                        <x-forms.cancel-button></x-forms.cancel-button>
                    </x-forms.form-footer>

                    <div class="mt-4">
                        <a
                            href="register"
                            class="text-blue-500 hover:text-blue-700 hover:underline"
                        >
                            Dont have an account?
                        </a>
                    </div>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
