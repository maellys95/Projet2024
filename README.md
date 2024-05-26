# Plateforme de Partage de Conseils et d'Astuces pour la Vie Quotidienne

## Membres du Groupe
- **Yasmine Moutaouafiq**
- **Maellys Amaini**
- **Leslie Ocloo**

## Prérequis et Installation
Pour exécuter ce projet en local, vous aurez besoin de **MAMP** (ou tout autre environnement de serveur local). Suivez les étapes ci-dessous pour configurer le projet :

1. **Téléchargez et installez MAMP** à partir de [MAMP.info](https://www.mamp.info/).
2. **Démarrez MAMP** et assurez-vous que les serveurs Apache et MySQL sont en cours d'exécution.
3. **Placez le projet dans le dossier `htdocs`**. Assurez-vous que le dossier du projet s'appelle `skincare`.
4. **Accédez au projet via le navigateur** en utilisant l'URL suivante : [http://localhost:8888/skincare/index.html](http://localhost:8888/skincare/index.html).

## Table des Matières
1. [Introduction](#introduction)
2. [Objectifs](#objectifs)
3. [Fonctionnalités Principales](#fonctionnalités-principales)
    - [Page d'accueil](#page-daccueil)
    - [Pages de produits](#pages-de-produits)
    - [Page de précaution](#page-de-précaution)
    - [Page de soumission de conseil](#page-de-soumission-de-conseil)
    - [Page de profil utilisateur](#page-de-profil-utilisateur)
    - [Système de notation et de commentaires](#système-de-notation-et-de-commentaires)
4. [Technologies Utilisées](#technologies-utilisées)
5. [Structure des Fichiers](#structure-des-fichiers)
6. [Fonctionnalités Implémentées](#fonctionnalités-implémentées)
7. [Fonctionnalités Non Implémentées](#fonctionnalités-non-implémentées)
8. [Notes](#notes)

## Introduction
Ce projet consiste à développer une plateforme en ligne où les utilisateurs peuvent partager, rechercher et consulter des conseils pratiques et des astuces pour simplifier leur vie quotidienne dans divers domaines. Cette plateforme servira de ressource utile pour aider les utilisateurs à découvrir de nouvelles façons de résoudre des problèmes et d'améliorer leur quotidien.

## Objectifs
- **Trouver sa routine soi-même en 3 étapes** : Nettoyant, Sérum, Crème.
- **Créer une page d'accueil** avec une barre de recherche pour rechercher un produit bien particulier.
- **Créer des pages spécifiques pour chaque type de produit** :
  - Nettoyant : id, titre, description, utilisation, prix pour la page individuelle et celle de soumission.
  - Sérum : id, titre, description, utilisation, prix pour la page individuelle et celle de soumission.
  - Crème : id, titre, description, utilisation, prix pour la page individuelle et celle de soumission.
- **Créer une page précaution** pour lister les conseils importants (par exemple, ne pas utiliser certains actifs ensemble).
- **Créer une page de profil utilisateur** à l'aide d'un formulaire.
- **Implémenter un système de commentaires et de notations** pour les conseils et les produits.

## Fonctionnalités Principales

### Page d'accueil
- **Barre de recherche** : Permettre aux utilisateurs de rechercher des produits spécifiques.
- **Lien vers le profil utilisateur** : Permettre aux utilisateurs de gérer leurs informations et contributions.

### Pages de produits (nettoyants.html, serums.html, cremes.html)
- **Liste des produits** : Présenter une liste de produits dans chaque catégorie avec des descriptions et des prix.
- **Page individuelle de produit** : Afficher les détails du produit, y compris l'id, le titre, la description, l'utilisation et le prix.
- **Formulaire de soumission de produit** : Permettre aux utilisateurs d'ajouter de nouveaux produits via un formulaire.

### Page de précaution (precautions.html)
- **Liste de conseils importants** : Lister des conseils importants sur l'utilisation des produits, tels que les combinaisons d'actifs à éviter.

### Page de soumission de conseil (soumission_conseil.html)
- **Formulaire interactif** : Permettre aux utilisateurs de soumettre leurs propres conseils via un formulaire interactif.
  - **Champs inclus** : Titre, catégorie, instructions, image.

### Page de profil utilisateur (profil_utilisateur.html)
- **Création de profil** : Permettre aux utilisateurs de créer un profil avec des informations personnelles.
- **Gestion des contributions** : Permettre aux utilisateurs de voir et gérer leurs contributions.

### Système de notation et de commentaires
- **Notation et commentaires** : Offrir aux utilisateurs la possibilité de noter et de laisser des commentaires sur les conseils et les produits.
- **Note moyenne** : Afficher la note moyenne de chaque conseil et produit basée sur les votes des utilisateurs.

## Technologies Utilisées
- **HTML, CSS, PHP** pour le développement de la plateforme.
- **Fichiers CSV** pour le stockage des conseils (tips.csv), des produits (products.csv) et des utilisateurs inscrits (users.csv).

## Structure des Fichiers
- **index.html** : Page d'accueil.
- **conseils.html** : Page listant les conseils.
- **conseil1.html** : Page détaillant un conseil spécifique.
- **soumission_conseil.html** : Page de soumission de conseils.
- **profil_utilisateur.html** : Page de profil utilisateur.
- **nettoyants.html, serums.html, cremes.html** : Pages listant les produits par catégorie.
- **precautions.html** : Page listant les conseils importants.
- **style.css** : Fichier de styles CSS.
- **add_product.php, submit_tip.php** : Scripts PHP pour traiter les formulaires de soumission.
- **tips.csv, users.csv, products.csv** : Fichiers CSV pour le stockage des données.

## Fonctionnalités Implémentées
- **Navigation conviviale** à travers les conseils et les astuces.
- **Soumission de conseils** par les utilisateurs via un formulaire interactif.
- **Affichage des conseils populaires et récents**.
- **Recherche par mot-clé et catégorie**.
- **Affichage détaillé des conseils** avec des instructions et commentaires.
- **Création de profil utilisateur** avec informations personnelles.
- **Système de notation et de commentaires**.

## Fonctionnalités Non Implémentées
- **Modification des conseils déposés par les utilisateurs**.
- **Gestion complète des statistiques de contributions des utilisateurs**.

## Notes
- La fonctionnalité permettant aux utilisateurs de modifier leurs conseils déposés ainsi que leurs statistiques de contributions n'a pas encore été implémentée.
