@extends('layouts.app')

@section('title', 'Ma passion - Mac-Dylan KACOU')

@section('content')

<section class="page-hero page-hero--passion">
  <div class="page-hero__inner">
    <p class="tittle-section" style="color:#fff;">Ma passion</p>
  </div>
</section>

<section class="passion-section">
  <div class="passion-grid">
    <div class="passion-card">
      <img src="{{ asset('images/lecture.jpg') }}" alt="La lecture" />
      <p>La lecture</p>
    </div>
    <div class="passion-card">
      <img src="{{ asset('images/sport.png') }}" alt="Le sport" />
      <p>Le Sport</p>
    </div>
    <div class="passion-card">
      <img src="{{ asset('images/cinema.jpg') }}" alt="Le cinéma" />
      <p>Le cinéma</p>
    </div>
    <div class="passion-card">
      <img src="{{ asset('images/codage.jpeg') }}" alt="Le codage" />
      <p>Le codage</p>
    </div>
  </div>
</section>

@endsection
