# Plateforme Web de Newsletter - Readme

Bienvenue dans la documentation de notre projet de développement d'une plateforme web interne pour une entreprise en pleine croissance dans le secteur de la communication et du marketing. Cette plateforme vise à centraliser et rationaliser les opérations en ligne, améliorant ainsi la communication, la gestion de l'information et la collaboration au sein de l'équipe.

## Fonctionnalités Clés

1. **Gestion de Newsletter (Spatie) :**
   - La plateforme intègre le package Spatie Newsletter pour faciliter la création, l'envoi et le suivi des campagnes de newsletters.
   - Les fonctionnalités de gestion des abonnements et des listes de diffusion sont intuitives et conviviales.

2. **Authentification avec Gestion des Rôles (Policies et Guards) :**
   - Un système d'authentification robuste est mis en place, avec une gestion des rôles basée sur les politiques et les gardes de Laravel.
   - Trois rôles distincts sont définis : Administrateur, Rédacteur et Membre, chacun ayant des autorisations spécifiques.

3. **Fonctionnalités Forgot Password et Remember Me :**
   - Les utilisateurs peuvent réinitialiser leur mot de passe via la fonction "forgot password".
   - La fonction "remember me" facilite la connexion automatique pour une expérience utilisateur fluide.

4. **Media Library (Spatie) :**
   - La gestion des médias est simplifiée grâce à Spatie Media Library.
   - Les utilisateurs peuvent télécharger, organiser et partager des fichiers multimédias.

5. **Soft Delete :**
   - Les enregistrements sont marqués comme supprimés plutôt que d'être physiquement supprimés de la base de données, évitant ainsi la perte accidentelle de données.

6. **Middleware :**
   - Des middleware sont mis en place pour gérer les autorisations spécifiques aux rôles, garantissant un accès sécurisé aux fonctionnalités.

7. **Génération PDF :**
   - La plateforme peut générer des fichiers PDF à partir de données spécifiques, comme des rapports mensuels sur les performances des campagnes de newsletters.

8. **Modélisation avec 3 Rôles :**
   - La base de données est modélisée pour prendre en charge les trois rôles définis, assurant ainsi une séparation claire des données et des responsabilités.

## Configuration et Installation

1. Cloner le repository depuis GitHub.
2. Installer les dépendances en utilisant Composer : `composer install`.
3. Configurer l'environnement en renseignant les variables d'environnement nécessaires.
4. Effectuer les migrations pour créer les tables de la base de données : `php artisan migrate`.
5. Lancer le serveur de développement : `php artisan serve`.

## Utilisation

1. Accéder à l'application via l'URL fournie par le serveur de développement.
2. Authentifier en utilisant les identifiants appropriés en fonction du rôle.
3. Explorer les fonctionnalités de la plateforme, en tenant compte des autorisations associées à chaque rôle.
