# Configuration du système de contact avec emails

## Prérequis

- PostgreSQL installé et en cours d'exécution
- Laravel 11+
- Composer

## Étapes de configuration

### 1. Configurer la base de données PostgreSQL

Ajouter les variables d'environnement dans `.env` :

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=portfolio
DB_USERNAME=postgres
DB_PASSWORD=votre_mot_de_passe
```

### 2. Configurer l'envoi d'emails

Choisir l'une des options suivantes :

#### Option A : Mailtrap (recommandé pour développement)

1. Créer un compte gratuit sur [mailtrap.io](https://mailtrap.io)
2. Copier les identifiants SMTP
3. Ajouter dans `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=live.smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=votre_username
MAIL_PASSWORD=votre_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=votre_email@example.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

#### Option B : Gmail

1. Activer l'authentification à deux facteurs sur Gmail
2. Générer un mot de passe d'application : https://myaccount.google.com/apppasswords
3. Ajouter dans `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre_email@gmail.com
MAIL_PASSWORD=votre_mot_de_passe_application
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=votre_email@gmail.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

#### Option C : Hostinger (si hébergé chez Hostinger)

1. Récupérer les identifiants SMTP depuis le panneau Hostinger
2. Ajouter dans `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=465
MAIL_USERNAME=votre_email@votredomaine.com
MAIL_PASSWORD=votre_mot_de_passe
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=votre_email@votredomaine.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

### 3. Exécuter les migrations

```bash
php artisan migrate
```

Cela créera la table `contact_messages` dans PostgreSQL.

### 4. Tester le formulaire de contact

1. Naviguer vers `http://127.0.0.1:8000/contact`
2. Remplir et soumettre le formulaire
3. Vérifier que :
   - Le message est sauvegardé en base de données
   - Un email est reçu à l'adresse configurée dans `MAIL_FROM_ADDRESS`

## Fichiers créés/modifiés

- `database/migrations/2026_02_20_create_contact_messages_table.php` - Migration pour la table
- `app/Models/ContactMessage.php` - Modèle Eloquent
- `app/Http/Controllers/ContactController.php` - Contrôleur
- `app/Mail/ContactMail.php` - Mailable pour formater l'email
- `resources/views/emails/contact.blade.php` - Template d'email
- `resources/views/contact.blade.php` - Vue du formulaire (mise à jour)
- `routes/web.php` - Routes (mise à jour)
- `public/css/style.css` - Styles pour les alertes (mise à jour)

## Dépannage

**Les emails ne sont pas envoyés :**
- Vérifier que les identifiants SMTP sont corrects dans `.env`
- Vérifier que `MAIL_FROM_ADDRESS` est configuré
- Vérifier les logs : `storage/logs/laravel.log`

**Erreur de connexion à PostgreSQL :**
- Vérifier que PostgreSQL est en cours d'exécution
- Vérifier les identifiants dans `.env`
- Vérifier que la base de données existe

**Erreur de migration :**
- Vérifier que la table `contact_messages` n'existe pas déjà
- Exécuter : `php artisan migrate:fresh` (attention : cela supprime toutes les tables)
