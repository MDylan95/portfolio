@extends('layouts.app')

@section('title', 'À propos - Bokame Mac-Dylan KACOU')

@section('content')

<section class="page-hero page-hero--apropos">
  <div class="page-hero__inner">
    <p class="tittle-section" style="color:#fff;">À propos de moi</p>
  </div>
</section>

<section class="apropos-section">
  <div class="apropos-grid">
    <div class="apropos-photo">
      <img src="{{ asset('images/photo.jpg') }}" alt="Photo de Mac-Dylan KACOU" />
      <a href="{{ asset('cv/cv-macdylan-kacou.pdf') }}" class="btn btn-primary" download>
        <i class="fas fa-download"></i> Télécharger mon CV
      </a>
    </div>
    <div class="apropos-content">
      <h2>Qui suis-je ?</h2>
      <p>
        Développeur web et mobile dynamique et rigoureux, je suis Bokame Mac-Dylan KACOU,
        étudiant, en fin de cycle, en Master 2 de Base de Données et Génie Logiciel à l'Université Félix
        Houphouët-Boigny d'Abidjan. Titulaire d'une Licence en Informatique option
        Informatique-Développeur d'Application, j'ai acquis une expérience concrète lors
        de deux stages en entreprise où j'ai conçu et développé des fonctionnalités
        front-end et back-end.
      </p>
      <p>
        Polyvalent et doté d'une excellente aptitude à la communication, je cherche à
        rejoindre une équipe dynamique pour contribuer à des projets à fort impact.
      </p>

      <div class="info-grid">
        <div class="info-item"><i class="fas fa-map-marker-alt"></i> Abidjan, Cocody Angré-Château</div>
        <div class="info-item"><i class="fas fa-birthday-cake"></i> Né le 15/04/2001</div>
        <div class="info-item"><i class="fas fa-envelope"></i> macdylankacou2000@gmail.com</div>
        <div class="info-item"><i class="fas fa-phone"></i> +225 07 59 14 14 20</div>
        <div class="info-item"><i class="fas fa-graduation-cap"></i> Master 2— Base de Données et Génie Logiciel</div>
        <div class="info-item"><i class="fas fa-flag"></i> Ivoirien</div>
      </div>
    </div>
  </div>
</section>

<section class="competences-section">
  <p class="tittle-section">Mes compétences</p>

  <div class="skills-grid">
    <div class="skill-category">
      <h3><i class="fas fa-code"></i> Langages</h3>
      <div class="skill-tags">
        <span class="tag">Python</span>
        <span class="tag">PHP</span>
        <span class="tag">JavaScript</span>
        <span class="tag">Dart</span>
        <span class="tag">SQL</span>
        <span class="tag">HTML5</span>
        <span class="tag">CSS3</span>
      </div>
    </div>
    <div class="skill-category">
      <h3><i class="fas fa-layer-group"></i> Frameworks &amp; Librairies</h3>
      <div class="skill-tags">
        <span class="tag">Laravel</span>
        <span class="tag">Django</span>
        <span class="tag">Flutter</span>
         <span class="tag">React</span>
        <span class="tag">Bootstrap</span>
      </div>
    </div>
    <div class="skill-category">
      <h3><i class="fas fa-database"></i> Bases de données</h3>
      <div class="skill-tags">
        <span class="tag">MySQL</span>
        <span class="tag">PostgreSQL</span>
        <span class="tag">Docker</span>
        <span class="tag">SQLite</span>
      </div>
    </div>
    <div class="skill-category">
      <h3><i class="fas fa-tools"></i> Outils</h3>
      <div class="skill-tags">
        <span class="tag">Git</span>
        <span class="tag">GitHub</span>
        <span class="tag">Docker</span>
      </div>
    </div>
  </div>
</section>

<section class="parcours-section">
  <p class="tittle-section">Mon parcours</p>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">Depuis oct. 2023</span>
        <h4>Master en Base de Données &amp; Génie Logiciel</h4>
        <p>Université Félix Houphouët-Boigny — Abidjan, Cocody</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">Depuis sept. 2025</span>
        <h4>Stagiaire Développeur Junior</h4>
        <p>Digital Côte d'Ivoire — Abidjan</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">Oct. 2025</span>
        <h4>Consultant — Génération de badges d'entrées</h4>
        <p>Salon International du Tourisme et des Loisirs d'Abidjan (SITLA) 2025 — Abidjan<br>
        <small>Chargé de la conception et de la génération des badges d'entrées pour l'événement.</small></p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">Sept. 2022 — Jan. 2023</span>
        <h4>Stagiaire Développeur Junior (Stage de soutenance)</h4>
        <p>Kojit-Systems — Rivera Bonoumin<br>
        <small>Analyse des besoins, développement front-end/back-end, tests fonctionnels et techniques.</small></p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">2019 — 2022</span>
        <h4>Licence — Informatique-Développeur d'Application</h4>
        <p>Université Internationale de Côte d'Ivoire — Abidjan, Cocody Angré 7e Tranche</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <span class="timeline-date">2018 — 2019</span>
        <h4>Baccalauréat Série D</h4>
        <p>Lycée Moderne 2 d'Adzopé</p>
      </div>
    </div>
  </div>
</section>

<section class="interets-section">
  <p class="tittle-section">Centres d'intérêt</p>
  <div class="interets-grid">
    <div class="interet-card">
      <i class="fas fa-book-open"></i>
      <p>Lecture</p>
    </div>
    <div class="interet-card">
      <i class="fas fa-film"></i>
      <p>Cinéma</p>
    </div>
    <div class="interet-card">
      <i class="fas fa-running"></i>
      <p>Sport</p>
    </div>
    <div class="interet-card">
      <i class="fas fa-music"></i>
      <p>Musique</p>
    </div>
  </div>
</section>

@endsection
