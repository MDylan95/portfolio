@extends('layouts.app')

@section('title', 'Contact - Mac-Dylan KACOU')

@section('content')

<section class="page-hero page-hero--contact">
  <div class="page-hero__inner">
    <p class="tittle-section" style="color:#fff;">Me contacter</p>
  </div>
</section>

<section class="contact-section">
  <div class="contact-grid">

    <div class="contact-info">
      <h2>Travaillons ensemble</h2>
      <p>Je suis disponible pour alternances ou opportunités en développement web et mobile. N'hésitez pas à me contacter.</p>

      <div class="contact-items">
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <div>
            <strong>Email</strong>
            <a href="mailto:macdylankacou2000@gmail.com">macdylankacou2000@gmail.com</a>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong>Localisation</strong>
            <span>Abidjan, Cocody Angré-Château</span>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-phone"></i>
          <div>
            <strong>Téléphone</strong>
            <a href="tel:+2250759141420">+225 07 59 14 14 20</a>
          </div>
        </div>
        <div class="contact-item">
          <i class="fab fa-linkedin"></i>
          <div>
            <strong>LinkedIn</strong>
            <a href="https://www.linkedin.com/in/mac-dylan-kacou-207ba924b/" target="_blank">linkedin.com/in/macdylan-kacou</a>
          </div>
        </div>
        <div class="contact-item">
          <i class="fab fa-github"></i>
          <div>
            <strong>GitHub</strong>
            <a href="https://github.com/" target="_blank">github.com/macdylan-kacou</a>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form-wrapper">
      @if ($errors->any())
        <div class="alert alert-error">
          <i class="fas fa-exclamation-circle"></i>
          <div>
            <strong>Erreur de validation</strong>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

      @if (session('success'))
        <div class="alert alert-success">
          <i class="fas fa-check-circle"></i>
          <div>
            <strong>Succès !</strong>
            <p>{{ session('success') }}</p>
          </div>
        </div>
      @endif

      @if (session('error'))
        <div class="alert alert-error">
          <i class="fas fa-exclamation-circle"></i>
          <div>
            <strong>Erreur</strong>
            <p>{{ session('error') }}</p>
          </div>
        </div>
      @endif

      <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nom">Nom complet</label>
          <input type="text" id="nom" name="nom" placeholder="Votre nom" value="{{ old('nom') }}" required />
          @error('nom')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="votre@email.com" value="{{ old('email') }}" required />
          @error('email')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="sujet">Sujet</label>
          <input type="text" id="sujet" name="sujet" placeholder="Objet de votre message" value="{{ old('sujet') }}" required />
          @error('sujet')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Votre message..." required>{{ old('message') }}</textarea>
          @error('message')
            <span class="form-error">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-full">
          <i class="fas fa-paper-plane"></i> Envoyer le message
        </button>
      </form>
    </div>

  </div>
</section>

@endsection
