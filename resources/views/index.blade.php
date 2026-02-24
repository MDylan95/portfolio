@extends('layouts.app')

@section('title', 'Accueil - Mac-Dylan KACOU')

@section('content')
<section id="hero">
  <div class="hero-text">
    <p class="hero-subtitle">Bonjour, je suis</p>
    <h1>Bokame Mac-Dylan KACOU</h1>
    <p class="hero-role">Web &amp; Mobile Developer | Transitioning to DevOps & Automation · 2e Année Master Base de Données &amp; Génie Logiciel</p>
    <div class="hero-btns">
      <a href="{{ route('projets') }}" class="btn btn-primary">Voir mes projets</a>
      <a href="{{ asset('cv/cv-macdylan-kacou.pdf') }}" class="btn btn-outline" download>
        <i class="fas fa-download"></i> Télécharger mon CV
      </a>
    </div>
  </div>
</section>
@endsection
