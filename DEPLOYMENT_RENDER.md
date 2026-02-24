# Déploiement sur Render

## Prérequis

1. **Compte GitHub** — Ton projet doit être sur GitHub
2. **Compte Render** — Créer un compte gratuit sur https://render.com
3. **Mot de passe d'application Gmail** — Déjà configuré dans `.env`

## Étapes de déploiement

### 1. Pousser le projet sur GitHub

```bash
git init
git add .
git commit -m "Initial commit - Portfolio with contact form and email"
git branch -M main
git remote add origin https://github.com/TON_USERNAME/portfolio.git
git push -u origin main
```

Remplace `TON_USERNAME` par ton nom d'utilisateur GitHub.

### 2. Créer un compte Render

1. Va sur https://render.com
2. Clique sur "Sign up"
3. Connecte-toi avec GitHub

### 3. Créer une nouvelle application

1. Clique sur "New +" → "Web Service"
2. Sélectionne ton repository GitHub `portfolio`
3. Configure comme suit :
   - **Name** : `portfolio-macdylan`
   - **Environment** : `PHP`
   - **Build Command** : `composer install && php artisan migrate --force`
   - **Start Command** : `vendor/bin/heroku-php-apache2 public/`
   - **Plan** : `Free`

### 4. Ajouter les variables d'environnement

Dans Render, va dans "Environment" et ajoute :

```
APP_NAME=Portfolio
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:... (génère une clé avec: php artisan key:generate)
APP_URL=https://portfolio-macdylan.onrender.com

DB_CONNECTION=pgsql
DB_HOST=<fourni par Render>
DB_PORT=5432
DB_DATABASE=<fourni par Render>
DB_USERNAME=<fourni par Render>
DB_PASSWORD=<fourni par Render>

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=macdylankacou2000@gmail.com
MAIL_PASSWORD="ukuv vrlw tcrf ghbj"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=macdylankacou2000@gmail.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

### 5. Créer la base de données PostgreSQL

1. Dans Render, clique sur "New +" → "PostgreSQL"
2. Configure comme suit :
   - **Name** : `portfolio-db`
   - **Database** : `portfolio`
   - **User** : `postgres`
   - **Plan** : `Free`

3. Copie les identifiants fournis et ajoute-les dans les variables d'environnement du Web Service

### 6. Générer la clé APP_KEY

Localement, exécute :

```bash
php artisan key:generate --show
```

Copie la clé générée (format : `base64:...`) et ajoute-la dans les variables d'environnement Render.

### 7. Déployer

1. Render détecte automatiquement les changements sur GitHub
2. Clique sur "Deploy" pour lancer le déploiement
3. Attends que le déploiement soit terminé (5-10 minutes)

### 8. Vérifier le déploiement

1. Va sur https://portfolio-macdylan.onrender.com
2. Teste le formulaire de contact
3. Vérifie que tu reçois l'email

## Dépannage

**"Build failed" :**
- Vérifier les logs dans Render
- Vérifier que `composer.lock` est commité sur GitHub
- Vérifier que `php artisan key:generate` a généré une clé

**"Database connection error" :**
- Vérifier que les identifiants PostgreSQL sont corrects
- Vérifier que la base de données est créée
- Vérifier que les migrations se sont exécutées

**"Email not sent" :**
- Vérifier que `MAIL_PASSWORD` est correct
- Vérifier que 2FA est activé sur Gmail
- Vérifier les logs : Render → Logs

**"Spin-down inactivity" :**
- C'est normal sur le plan gratuit
- L'app redémarre automatiquement à la première requête

## Mise à jour du portfolio

Chaque fois que tu fais un changement :

```bash
git add .
git commit -m "Description du changement"
git push origin main
```

Render redéploiera automatiquement.

## Domaine personnalisé (optionnel)

Si tu veux un domaine personnalisé (ex: `portfolio.com`) :
1. Achète un domaine (Namecheap, GoDaddy, etc.)
2. Dans Render, va dans "Settings" → "Custom Domain"
3. Ajoute ton domaine et configure les DNS

## Support

- Documentation Render : https://render.com/docs
- Documentation Laravel : https://laravel.com/docs
