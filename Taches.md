#4259 
    -Comprehension du sujet
    -copier coller la base d' un projet codeigniteur dans le dossier github
    -Definir les differentes tables de la base de donne
    -Concevoir les tables de la bases de donne
    -Ecrire le fichier base.sql
    -Adapter le Database.php en sqlite
    -importer la base dans sqlite

    ===Tache1====== Situation des comptes clients =================
    -Etape1:afficher la liste des comptes clients
    -routes.php: ajouter une route :/clients pour rediriger vers un controlleur :ClientController.php
    -ClientController.php:
        -function afficher la liste:index()
        -function afficher details d' un compte:detail()
    -Creation d' un model client:ClientModel.php


#4221
    -comprehension du sujet
    -Definir les tables de la base de donnees
    -Creation du fichier :
        -Cote operateur: Views/Operateur
            1-Dashboard.php = page qui affiche les gains obtenus via les frais
                -Affichage dynamique du total des gains en general
                -Affichage dynamique du total des gains obtenus via retrait
                -Affichage dynamique du total des gains obtenue via transfert
                -Filtre par date des gains
                -Mis a jour des totaux pour chaque resultat du filtre

            -app/Controllers/Operateur/Operateur.php:
                -recevoir la demande de la page
                -recuperer les donnees depuis le modele
                -envoyer les données à la vue

            -app/Models/Operateur/GainModel.php:
                -communiquer avec la base de donnees
                -calcule les gains

            -app/Config/Routes.php

            2-app/Views/Operateur/ListeClients.php:
                -Tableau de listes clients: Nom,Numero,Solde 
                -Bouton "Detail" qui redirige vers HistoriqueClient.php

            -app/Views/Operateur/HistoriqueClient.php:
                -Affichage dynamique des operations requises par le clients 
                -Filtre date 

            -app/Controllers/Operateur/Operateur.php:
                -Ajout de methode listeClient et HistoriqueClient

            -app/Models/Operateur/ClientModel.php:
            -app/Models/OperationModel.php: qui recupere les infos client de la table operation
            -mis a jour app/Config/Routes.php

        

            
            
                
