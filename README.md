# La Panthere -- Agence de Web Design a Lyon

## Description

Site vitrine de l'agence **La Panthere**, une agence de web design basee a Lyon (69001). L'agence accompagne les entreprises de la region lyonnaise dans la creation de sites web attractifs et visibles sur Internet. Ce projet a ete realise dans le cadre du cours d'Accessibilite et Qualite Web (Ynov Campus, 2025-2026).

## Apercu du site

Le site se compose de deux pages :

- **Page d'accueil** (`index.html`) : presentation de l'agence, de ses services (web design, strategie, illustrations), d'un temoignage client, et d'un portfolio de realisations.
- **Page de contact** (`contact.html`) : formulaire de contact permettant aux visiteurs de soumettre leur projet.

## Fonctionnalites

- Design responsive (adapte mobile, tablette, desktop) grace a Bootstrap 3.
- Effets de parallaxe sur les sections principales.
- Galerie de projets realises (journal local, photographe, voyageur, agence de mariage).
- Formulaire de contact avec validation cote client (jqBootstrapValidation) et traitement cote serveur (PHP).
- Navigation mobile avec menu hamburger.
- Bouton de retour en haut de page.
- Donnees structurees Schema.org (LocalBusiness) pour le referencement.

## Structure du projet

```
lapanthere/
|-- index.html
|-- contact.html
|-- favicon.ico
|-- README.md
|
|-- css/
|   |-- style.css
|   |-- et-line.css
|
|-- js/
|   |-- blocs.js
|   |-- formHandler.js
|
|-- img/
|   |-- agence-la-panthere-monochrome.svg
|   |-- agence-la-panthere.svg
|   |-- agence-la-panthere.webp
|   |-- dots-bg.png
|   |-- image-de-presentation.webp
|   |-- lines-h2-bg.png
|   |-- logo.webp
|   |-- project-journal.webp
|   |-- project-mariage.webp
|   |-- project-photographe.webp
|   |-- project-voyageur.webp
|   |-- texture-paper.png
|
|-- fonts/
|   |-- et-line.eot
|   |-- et-line.svg
|   |-- et-line.ttf
|   |-- et-line.woff
|
|-- includes/
    |-- form_1.php
```

## Technologies utilisees

- HTML5
- CSS3
- JavaScript / jQuery 2.2.4
- Bootstrap 3.4.1
- Font Awesome 4.7
- Et-Line Icons
- PHP (traitement du formulaire)
- Schema.org (donnees structurees JSON-LD)

## Optimisations mises en place

- Images au format WebP pour reduire le poids des ressources.
- Chargement differe (`defer`) des scripts JavaScript.
- Chargement conditionnel des feuilles de style non critiques (`media="print"` + `onload`).
- Preconnexion (`preconnect`) aux CDN externes.
- Preload de l'image hero pour le Largest Contentful Paint.
- Attribut `loading="lazy"` sur les images du portfolio.
- Balise meta `description` pour le SEO.

## Accessibilite

- Attributs `alt` descriptifs sur toutes les images.
- Attributs `aria-label` sur les liens sociaux et le bouton de retour en haut.
- Texte masque (`sr-only`) pour le bouton de navigation mobile.
- Contraste des couleurs et structure semantique des titres.
- Formulaire avec labels associes aux champs.

## Installation et utilisation

1. Cloner le depot :
   ```bash
   git clone https://github.com/Loise/IUT-panthere.git
   ```
2. Ouvrir `index.html` dans un navigateur pour acceder au site.
3. Pour le traitement du formulaire de contact, un serveur PHP est necessaire (ex. : XAMPP, WAMP ou tout serveur compatible PHP).

## Auteurs

Projet realise dans le cadre du TP groupe -- Accessibilite et Qualite Web, Ynov Campus 2025-2026.

## Licence

Projet a but educatif.
