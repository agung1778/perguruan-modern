<div class="amaliah-login-page">

    {{-- LEFT --}}
    <div class="amaliah-login-visual">

        <img
            src="{{ asset('storage/logo/logo.jpg') }}"
            alt="Gedung Yayasan Amaliah"
            class="amaliah-login-background"
        >

        <div class="amaliah-login-overlay"></div>

        <div class="amaliah-login-visual-content">

            <div class="amaliah-visual-brand">
                @if (filament()->getBrandLogo())
                    <img
                        src="{{ filament()->getBrandLogo() }}"
                        alt="Logo Yayasan Amaliah"
                    >
                @endif
            </div>

            <div class="amaliah-visual-text">

                <span class="amaliah-visual-label">
                    SISTEM INFORMASI
                </span>

                <h2>
                    Yayasan Amaliah
                </h2>

                <p>
                    Sistem informasi terintegrasi untuk membantu
                    pengelolaan data pendidikan, guru, siswa,
                    dan administrasi Yayasan Amaliah.
                </p>

            </div>

        </div>

    </div>


    {{-- RIGHT --}}
    <div class="amaliah-login-panel">

        <div class="amaliah-login-card">

            {{-- BRAND --}}
            <div class="amaliah-brand">

                <div class="amaliah-brand-logo">

                    @if (filament()->getBrandLogo())

                        <img
                            src="{{ filament()->getBrandLogo() }}"
                            alt="Logo Yayasan Amaliah"
                        >

                    @else

                        <div class="amaliah-brand-placeholder">
                            <x-heroicon-o-building-library />
                        </div>

                    @endif

                </div>

                <div class="amaliah-brand-name">
                    <span>SIP YAYASAN</span>
                    <span>AMALIAH</span>
                </div>

            </div>


            {{-- HEADING --}}
            <div class="amaliah-login-heading">

                <h1>
                    Selamat Datang Kembali
                </h1>

                <p>
                    Silakan login untuk melanjutkan
                </p>

            </div>


            {{-- FORM --}}
            <form
                wire:submit="authenticate"
                class="amaliah-login-form"
            >

                {{ $this->form }}

                <button
                    type="submit"
                    class="amaliah-login-submit"
                >
                    Login
                </button>

            </form>


            {{-- SECURITY --}}
            <div class="amaliah-security-notice">

                <div class="amaliah-security-icon">
                    <x-heroicon-o-shield-check />
                </div>

                <div class="amaliah-security-content">

                    <strong>
                        Akses Terbatas
                    </strong>

                    <p>
                        Akses data guru dan siswa bersifat terbatas
                        dan hanya diperuntukkan untuk keperluan internal
                        Yayasan Amaliah.
                    </p>

                </div>

            </div>


            {{-- FOOTER --}}
            <div class="amaliah-login-footer">

                <span>
                    © {{ date('Y') }} Yayasan Amaliah
                </span>

            </div>

        </div>

    </div>

</div>