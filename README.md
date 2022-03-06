# Projet-Calendrier

## Presentation

Une entreprise a besoin d’un nouvel agenda commun pour ses employés. Compte tenu du
nombre croissant d’embauches, la planification de réunions est de plus en plus difficile étant
donné le manque de visibilité sur les disponibilités de chacun.
Ils souhaiteraient donc mettre en place un nouvel agenda qui permettra d’attribuer une
réunion automatiquement sur la première plage disponible commune à chacun des
employés invités.

Ex : Employé A indisponible le Lundi, employé B indisponible le Mardi après-midi, et employé
C indisponible le Mardi matin et Mercredi après-midi => Premier créneau disponible
Mercredi à 9h.

Ils souhaitent également pouvoir créer à la volée un nouvel employé dans l’agenda, en
renseignant seulement son email.

### Spécifications
    - La durée d’un créneau est d’1 heure.
    - Les horaires de travail sont du Lundi au Vendredi, de 9h à 12h et de 13h à 17h.
    - Nombre illimité d’employés invités dans une réunion.
    - Chaque réunion devra avoir un nom unique.

## Installation

    1. Clone le projet
    2. Run composer install  
    3. Crée la database
    4. Paramètre la partie DB de ton fichier .env
    5. Crée les tables et lance les factories avec la commande `php artisan migrate:refresh --seed` 
    6. Lance un server avec `php artisan serve`


