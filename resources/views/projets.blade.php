@extends('layouts.app')

@section('title', 'Projets - Bokame Mac-Dylan KACOU')

@section('content')

<section class="page-hero page-hero--projets">
  <div class="page-hero__inner">
    <p class="tittle-section" style="color:#fff;">Mes projets</p>
  </div>
</section>

<section class="projets-section">
  <p class="section-intro">Projets réels développés et déployés en production, réalisés dans le cadre de mes stages et missions professionnelles.</p>

  <div class="projets-grid">

    {{-- Projet 1 : Fondation Auline --}}
    <div class="projet-card">
      <div class="projet-card__header">
        <i class="fas fa-hand-holding-heart projet-icon"></i>
      </div>
      <div class="projet-card__body">
        <div class="projet-badge projet-badge--live">En ligne</div>
        <h3>Fondation AULINE</h3>
        <p>Site vitrine pour une fondation ivoirienne œuvrant pour le développement humain intégral. Le site présente les 4 piliers d'action de la fondation : Santé Mère-Enfant, Agriculture &amp; Financement, Éducation &amp; Excellence, et Œuvres &amp; Solidarité.</p>
        <div class="projet-tags">
          <span class="tag tag--tech">Laravel</span>
          <span class="tag tag--tech">PHP</span>
          <span class="tag tag--tech">MySQL</span>
          <span class="tag tag--tech">CSS3</span>
          <span class="tag tag--tech">JavaScript</span>
        </div>
      </div>
      <div class="projet-card__footer">
        <a href="https://fondationauline.org/" target="_blank" class="btn btn-sm btn-primary"><i class="fas fa-external-link-alt"></i> Voir le site</a>
      </div>
    </div>

    {{-- Projet 2 : ATSE Construction --}}
    <div class="projet-card">
      <div class="projet-card__header">
        <i class="fas fa-hard-hat projet-icon"></i>
      </div>
      <div class="projet-card__body">
        <div class="projet-badge projet-badge--live">En ligne</div>
        <h3>ATSE Construction &amp; Rénovation</h3>
        <p>Site dynamique pour une entreprise spécialisée en construction, rénovation et travaux de maçonnerie (gros œuvre, terrassement, pavage, clôtures). Intègre un tableau de bord administrateur pour la gestion du contenu et des réalisations. Hébergé par moi.</p>
        <div class="projet-tags">
          <span class="tag tag--tech">Laravel</span>
          <span class="tag tag--tech">PHP</span>
          <span class="tag tag--tech">MySQL</span>
          <span class="tag tag--tech">JavaScript</span>
         </div>
      </div>
      <div class="projet-card__footer">
        <a href="https://atse-construction.com/" target="_blank" class="btn btn-sm btn-primary"><i class="fas fa-external-link-alt"></i> Voir le site</a>
      </div>
    </div>

    {{-- Projet 3 : Ecademi --}}
    <div class="projet-card">
      <div class="projet-card__header">
        <i class="fas fa-graduation-cap projet-icon"></i>
      </div>
      <div class="projet-card__body">
        <div class="projet-badge projet-badge--live">En ligne</div>
        <h3>Ecademi</h3>
        <p>Plateforme de formation et d'emploi  (MVP en ligne). Débuté en tant que stagiaire développeur, j'occupe désormais les rôles de DevOps et Chef de projet, supervisant l'architecture, le déploiement et la coordination des équipes pour les évolutions futures.</p>
        <div class="projet-tags">
          <span class="tag tag--tech">React.js</span>
          <span class="tag tag--tech">Django</span>
          <span class="tag tag--tech">PostgreSQL</span>
          <span class="tag tag--tech">Docker</span>
         </div>
      </div>
      <div class="projet-card__footer">
        <a href="https://www.ecademi.ci/" target="_blank" class="btn btn-sm btn-primary"><i class="fas fa-external-link-alt"></i> Voir le site</a>
      </div>
    </div>

    {{-- Projet 4 : Portfolio --}}
    <div class="projet-card">
      <div class="projet-card__header">
        <i class="fas fa-user-circle projet-icon"></i>
      </div>
      <div class="projet-card__body">
        <div class="projet-badge projet-badge--live">En ligne</div>
        <h3>Portfolio personnel</h3>
        <p>Ce site portfolio, conçu et développé de A à Z. Démarré en HTML/CSS statique puis migré vers Laravel avec architecture MVC, routing nommé, Blade templating et gestion des assets.</p>
        <div class="projet-tags">
          <span class="tag tag--tech">Laravel</span>
          <span class="tag tag--tech">Blade</span>
          <span class="tag tag--tech">PHP</span>
          <span class="tag tag--tech">CSS3</span>
        </div>
      </div>
      <div class="projet-card__footer">
        <a href="https://github.com/" target="_blank" class="btn btn-sm btn-primary"><i class="fab fa-github"></i> Code source</a>
      </div>
    </div>

  </div>
</section>

@endsection
