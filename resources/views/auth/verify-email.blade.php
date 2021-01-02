<x-layouts.app>

    <x-layouts.page.header
        mt="mt-6"
    ></x-layouts.page.header>

    <x-layouts.page.main>
        <div>
            <div class="form-container">
                <div class="form-heading">
                    Verification Email Sent
                </div>

                <x-flashes.session-status></x-flashes.session-status>

                <p>You must verify your email address, please check you email for a verification link.</p>
                <x-forms.form
                    action="{{ route('verification.send') }}"
                >

                    <x-forms.form-footer>
                        <x-forms.button
                            buttontext="Resend Verification Email"
                        ></x-forms.button>

                    </x-forms.form-footer>

                </x-forms.form>
            </div>
        </div>
    </x-layouts.page.main>
</x-layouts.app>
