# CultureCityApp

## Voir l'application :
>https://culturecityapp.simschab.fr/

## Me retrouver sur Linkedin :
>https://www.linkedin.com/in/axel-colliaux/

## Vidéo de présentation de l'application :
>https://youtu.be/o9d-jeuJ9U4?t=4335

## Projet de fin de formation:

>"Developpement Web et Web Mobile" au sein de l'école O'Clock.

>https://oclock.io/formations/developpeur-web

## Cette application web a été concue puis réalisée en 4 semaines par un groupe de 4 personnes travaillant ensemble en distanciel.

>Technologies

1. Visual Studio Code
2. Symfony 5.4
3. Java Script Vanilla
4. Html
5. Twig
6. Css
7. Sass
8. Git
9. Sql
10. Api

#### L'application permet d'une par à des acteurs culturels (après inscription sur l'appli) de partager très facilement une programmation événementielle et d'autre part au visiteur de naviguer instinctivement dans les événements proposés près de chez lui.

## 4 Semaines :

1. Préparation et documentation du projet (Trello, MCD/MLD, Cahier des charges, Tableau des routes...)
2. Développement phase 1
3. Développement phase 2
4. Optimisation et mise en production.

#### Nous avons étés particulièrement vigilents au fait de proposer une version parfaitement optimisée et réactive. Chaque User Storie à été réfléchie pour offrir aux différents rôles utilisateurs:

    Visiteur / Utilisateur / Annonceur / Administrateur 
    
#### une expérience positive lors de l'utilisation de l'application.


#### **Le visiteur**  est geo-localisé sur la page d'accueil. L'application lui propose alors automatiquement les événements qui sont proches de chez lui. Il à la possibilité d'utiliser la pleine navigation sur l'application. Filtrer dynamiquement les événements (JS) par date, par catégorie ou par date + catégorie. 

**Le visiteur**  peut aussi filtrer tous les événements comportant un tag. Ex: cliquer sur un événement portant le tag 'jeunesse' lui retournera tous les événements portant ce tag. 

**Le visiteur** peut aussi naviguer dans les événements par catégorie via un menu plus traditionnel. Il pourra aussi afficher la page de profil d'un organisateur et consulter tous les évenements proposés par cet organisateur.

**L'utilisateur** après inscription est automatiqument connecté à l'application et reçoit en parrallèle un e-mail l'invitant à confirmer son adresse mail. Il a la possibilité d'éditer sa page de profil en y ajoutant une bannière et sa photo de profil, renseigner ses réseaux sociaux. Il pourra aussi mettre à jour ces informations et si il le souhaite, changer ses images, ajouter ou retirer ses réseaux sociaux...

L'application lui offre la possibilité de mettre et de retirer des événements de ses favoris qu'il retrouve ensuite sur sa page de profil. Il a aussi la possibilité de commenter les événements.

**L'annonceur** demande ce statut lors de son enregistrement sur l'application et il rempli dans la suite du processus d'enregistrement les information relatives à sa structure. Il a la possibilité de la présenter en détail...et l'illustrer par une banière et image de profil.

**L'annonceur** peut alors créer des événements qui lui appartiennent et qui se retrouvent sur sa page de profil ainsi que sur les autres pages du site en fonction de la catégorie et/ou de la date de l'événement.

Sur sa page de profil **l'annonceur** a la possibilité de directement éditer toutes les informations de ses propres événements. Changer la date, le prix, l'image d'illustration....

**L'administrateur** a lui un accès au back office de l'application. Il peut administrer l'intégralité des contenus publiés. Créer / Lire / Mettre à jour / Supprimer (CRUD) tout ce qui est présent sur l'application. (Catégories, tags, evénements, utilisateurs...). Et plus..


#### Chaque semaine, une tâche cron remet à jour les dates des événements à la semaine suivante pour que vous puissiez toujours découvrir l'application dans sa version de démonstration.
