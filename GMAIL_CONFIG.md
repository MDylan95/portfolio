# Configuration Gmail pour les emails de contact

## Configuration à ajouter dans `.env`

Copie et colle ces lignes dans ton fichier `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=macdylankacou2000@gmail.com
MAIL_PASSWORD=xxxx xxxx xxxx xxxx
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=macdylankacou2000@gmail.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

## Étapes pour générer le mot de passe d'application

1. **Active l'authentification à deux facteurs** sur ton compte Google :
   - Va sur https://myaccount.google.com/security
   - Clique sur "Authentification à deux facteurs"
   - Suis les étapes pour l'activer

2. **Génère un mot de passe d'application** :
   - Va sur https://myaccount.google.com/apppasswords
   - Sélectionne "Mail" et "Windows Computer"
   - Google te génère un mot de passe de 16 caractères (ex: `xxxx xxxx xxxx xxxx`)

3. **Ajoute le mot de passe dans `.env`** :
   - Remplace `xxxx xxxx xxxx xxxx` par le mot de passe généré
   - Garde les espaces tels quels

## Exemple complet

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=macdylankacou2000@gmail.com
MAIL_PASSWORD=abcd efgh ijkl mnop
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=macdylankacou2000@gmail.com
MAIL_FROM_NAME="Bokame Mac-Dylan KACOU"
```

## Vérification

Une fois configuré, tu peux tester en :
1. Allant sur http://127.0.0.1:8000/contact
2. Remplissant et soumettant le formulaire
3. Vérifiant que tu reçois l'email dans ta boîte Gmail

## Dépannage

**"Authentication failed" :**
- Vérifier que le mot de passe est correct (16 caractères avec espaces)
- Vérifier que 2FA est activé sur ton compte Google

**"SMTP connection refused" :**
- Vérifier que le port 587 est accessible
- Essayer le port 465 avec `MAIL_ENCRYPTION=ssl`

**Les emails ne sont pas reçus :**
- Vérifier les logs : `storage/logs/laravel.log`
- Vérifier que `MAIL_FROM_ADDRESS` est correct
