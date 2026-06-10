<x-app-layout>
    <x-slot:title>Edit Profil</x-slot:title>
    <x-slot:breadcrumb>Edit Profil</x-slot:breadcrumb>

    <div class="max-w-2xl mx-auto space-y-6 animate-fade-in">

        {{-- Informasi Profil --}}
        <div class="card">
            @include('profile.partials.update-profile-information-form')
        </div>

        {{-- Tema Profil Publik --}}
        <div class="card">
            @include('profile.partials.update-theme-settings-form')
        </div>

        {{-- Ganti Password --}}
        <div class="card">
            @include('profile.partials.update-password-form')
        </div>

        {{-- Hapus Akun --}}
        <div class="card border border-danger/20">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>