# GestionParcAutomobile
Un fichier Excel regroupe l’ensemble des données relatives aux véhicules du département, modèle, marque, immatriculation, date mise en service, date visite technique, conducteur, état (BON, PASSABLE, MEDIOCRE, VETUSTE).
Permettre à un gestionnaire des parcs d’importer le fichier et de remplir la base de données. Les tables modèle, marque, conducteur sont peuplées en même temps en cas de nouvelles données.
Le gestionnaire doit pouvoir ajouter des marques, des modèles, des véhicules, des conducteurs.
Un autre fichier contient les chefs de département avec leur adresse mail. L’upload du fichier permet d’envoyer un mail automatique au chef de département s’il n’est pas déjà dans la base avec ses identifiants d’authentification.
Un chef de département doit pouvoir modifier les infos des véhicules de son département (conducteur, date visite technique,…)
Si la date de visite technique d’un véhicule est dans 1 mois, le chef de département doit recevoir une alerte lorsqu’il se connecte.
Un chef de département doit pouvoir exporter en PDF les véhicules de son département.

1.	Définition du modèle
2.	Spécification des interfaces
3.	Choix du template bootstrap
4.	Définition des interfaces
5.	Création du repository Gitlab/Github
6.	First commit
7.	Trello pour la gestion de projet

Véhicule (date mis en service, date visite technique, immatriculation, état)
