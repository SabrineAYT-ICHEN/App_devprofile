# Projet DevProfile

Ce projet est une application web développée avec Laravel dans le cadre du module "Développement web avancé". Il permet aux utilisateurs authentifiés de créer un profil de développeur, d'ajouter leurs projets et compétences, et de générer un CV au format PDF.

## Fonctionnalités

*   **Authentification :** Inscription et connexion via Laravel Breeze.
*   **Profil utilisateur :** Modification du nom, email, titre et bio. Affichage du profil sur une page publique accessible via une URL unique.
*   **Projets :** Ajout, modification et suppression de projets avec titre, description et lien optionnel.
*   **Compétences :** Ajout, modification et suppression de compétences avec nom.
*   **Génération de CV :** Bouton pour générer un CV PDF basé sur les informations du profil, projets et compétences. Le PDF peut être téléchargé.

## Contraintes techniques

Ce projet a été développé en utilisant les technologies suivantes :

*   **Laravel 11** avec **Breeze** pour l'authentification.
*   **Tailwind CSS** pour le style.
*   **Barryvdh/Laravel-DomPDF** pour la génération de PDF.
*   Base de données **MySQL**.\
*   Structure **MVC** bien organisée.

## Installation

Suivez ces étapes pour installer et exécuter le projet en local :

1.  **Clonez le dépôt GitHub :**
    ```bash
    git clone <URL_DE_VOTRE_DEPOT>
    cd nom-du-dossier-de-votre-projet
    ```
    "https://github.com/SabrineAYT-ICHEN/DevProfile.git"

2.  **Installez les dépendances PHP avec Composer :**
    ```bash
    composer install
    ```

3.  **Installez les dépendances JavaScript avec npm (ou Yarn/pnpm) :**
    ```bash
    npm install
    ```

4.  **Créez le fichier d'environnement :**
    Copiez le fichier `.env.example` et renommez la copie en `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Générez la clé d'application :**
    ```bash
    php artisan key:generate
    ```

6.  **Configurez la base de données dans le fichier `.env` :**
    Ouvrez le fichier `.env` et remplissez les informations de connexion à votre base de données MySQL.
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=votre_nom_de_base_de_donnees
    DB_USERNAME=votre_utilisateur_mysql
    DB_PASSWORD=votre_mot_de_passe_mysql
    ```
  

7.  **Exécutez les migrations de base de données :**
    Ceci va créer les tables nécessaires (users, projects, skills, etc.).
    ```bash
    php artisan migrate
    ```

8.  **Configurez le mailer pour les tests (optionnel mais recommandé) :**
    Dans votre fichier `.env`, assurez-vous que `MAIL_MAILER` est configuré pour le développement. Pour capturer les emails dans les logs :
    ```dotenv
    MAIL_MAILER=log
    ```
    Ou si vous utilisez Mailpit localement :
    ```dotenv
    MAIL_MAILER=smtp
    MAIL_HOST=127.0.0.1 # ou mailpit si dans docker
    MAIL_PORT=1025
    # ... autres configurations MAIL_ si nécessaires ...
    ```

9.  **Lancez le serveur de développement et le processus Vite :**
    Ouvrez deux terminaux. Dans le premier, lancez le serveur PHP :
    ```bash
    php artisan serve
    ```
    Dans le second terminal, lancez le processus Vite pour compiler les assets (CSS, JS) :
    ```bash
    npm run dev
    ```

10. **Accédez à l'application :**
    Votre application devrait maintenant être accessible à l'adresse `http://localhost:8001` (ou l'adresse indiquée par `php artisan serve`).

## Utilisation

1.  **Inscription :** Créez un nouveau compte utilisateur via la page d'inscription.
2.  **Connexion :** Connectez-vous avec vos identifiants.
3.  **Modifier le profil :** Accédez à la page de profil pour renseigner votre titre et votre bio.
4.  **Gérer les projets et compétences :** Utilisez les sections dédiées pour ajouter, modifier ou supprimer vos projets et compétences.
5.  **Voir le profil public :** Une URL unique sera disponible pour partager votre profil.
6.  **Générer le CV :** Un bouton sur votre profil permettra de télécharger votre CV au format PDF.

## Problèmes rencontrés et solutions

Au cours du développement de ce projet, j'ai rencontré les problèmes suivants et mis en œuvre les solutions ci-dessous :

### 1. Erreur de connexion à Mailpit ("Hôte inconnu")

*   **Problème :** Lors de l'envoi d'emails via Laravel, une erreur "Hôte inconnu 'mailpit:1025'" survenait.
*   **Solution :** J'utilisais le nom de service Docker "mailpit" dans mon fichier `.env` alors que mon application PHP ne tournait pas dans un environnement Docker Compose connecté à Mailpit. J'ai corrigé le fichier `.env` pour utiliser l'adresse locale `MAIL_HOST=127.0.0.1` et `MAIL_PORT=1025` et me suis assuré que Mailpit était lancé sur ma machine locale.

### 2. Erreur de validation de l'e-mail en minuscules

*   **Problème :** Le formulaire de réinitialisation de mot de passe refusait les adresses email contenant des majuscules avec le message "The email field must be lowercase".
*   **Solution :** La validation côté serveur exigeait que l'email soit en minuscules. J'ai corrigé mon entrée en utilisant uniquement des caractères minuscules pour l'adresse email.


## Auteurs

*   Sabrine Ayt-ichen 
*  Alae majatti
   




