@extends('layouts.website')

@section('title', "Let's Build — NorthGlass")

@section('content')
<section class="container contact-page">
    <div class="contact-intro">
        <h1>Let's Build</h1>
        <p>Ceritakan kebutuhan proyek Anda kepada kami.</p>
    </div>

    <div class="contact-form-wrap">
        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <form class="project-form" method="POST" action="{{ route('contact.store') }}">
            @csrf

            <div class="form-grid">
                <div class="field">
                    <label>Nama *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label>Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label>Telepon / WhatsApp *</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label>Perusahaan</label>
                    <input type="text" name="company" value="{{ old('company') }}">
                </div>

                <div class="field">
                    <label>Service</label>
                    <select name="service_id">
                        <option value="">Pilih Service</option>

                        @foreach($services as $service)
                            <option
                                value="{{ $service->id }}"
                                @selected(old('service_id') == $service->id)
                            >
                                {{ $service->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Budget</label>
                    <input
                        type="text"
                        name="budget"
                        value="{{ old('budget') }}"
                        placeholder="Contoh: Rp5.000.000"
                    >
                </div>

                <div class="field field-full">
                    <label>Pesan *</label>
                    <textarea name="message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button class="button submit-button" type="submit">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>
@endsection