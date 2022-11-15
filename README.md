***
# README
***
## Rôle de chacun dans le projet

### Chef de projet  
Grégoire

### Equipe back-office  
Tifaine et Athithyan

### Equipe front-end  
Daouda et Hadj  

***
## 1- Installation
***
### Installation LARAVEL (côté chef de projet)

Pour installer LARAVEL ouvrir un terminal Linux, où l'on peut entrer les commandes suivantes :  
```sh
curl -s https://laravel.build/example-app | bash
```
cette commande avec 'example-app' au nom du fichier que vous souhaitez  

```sh
cd example-app  
./vendor/bin/sail up -d
```
cette commande permet de lancer LARAVEL (-d pour le lancer en arrière plan)

Gestion de projet par GitHub (côté back-office et front-end)
Accepter l'invitation du projet *tp_site_final* sur Github 


### Creation du projet (côté chef de projet)
Sur la page d'accueil de GitHub, dans *start writing code*  
sélectionner *en mode public* si on veut que tout le monde y est accès sur internet  
sélectionner *en mode privé* si l'on veut selectionner les collaborateurs  
puis cliquer sur *Create a new repository*


pour initialiser le projet taper dans un terminal la commande 
```sh  
git init
```
puis faire notre premier commit  
```sh 
git add -A
git commit -m "First Commit"
```
### Clonage du projet (côté back-office et front-end)

depuis un terminal taper 
```sh  
cd Desktop/
git clone https://github.com/nom_utilisateur_Git/nom_repository.git
```
cd Desktop, pour le placer sur le bureau. Si le collaborateurs veut le placer autrepart (cette commande est à adapter selon le chemin).

Pour créer une branche et ainsi travailler dans un environnement sans risquer d'impacter la branche principale le collaborateur devra taper  
```sh
git branch <nom_de_la_branche>
```
Pour visualiser les différentes branches ou changer de branche taper respectivement  
```sh 
git branch

git checkout <nom_de_la_branche>
```
Lorsque la branche est validée on peut la fusionner avec la branche principale avec la commande  
```sh
git merge <nom_de_la_branche>
```
Pour télécharger le projet taper dans un nouveau terminal bash  
```sh 
git clone 
``` 
Chaque collaborateur aura besoin des commandes *pull* et *push* pour la mise en commun de leur travail. Taper dans le terminal    
```sh
git pull
git add -A
git commit -m 'message'
git push
``` 
Télécharger l'outil *sail* par *composer*  

Pour utiliser *composer* et télécharger la bibliothèque pour retrouver la fonction *sail* taper dans le terminal ubuntu la commande   
```sh
docker run --rm --interactive --tty \--volume $PWD:/app \composer install  
```
Création des *models* avec les fichiers *migration* et *controllers* utiliser la commande *artisan* dans un terminal  

```sh
./vendor/bin/sail up -d   
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'   
sail php artisan make:model Post -mc   
sail php artisan make:model Comment -mc   
sail php artisan make:model Reply -mc    
``` 
Création d'un fichier *.env* à jour
Créer un fichier *.env* dans la racine du dossier puis faire un copier coller du contenu de *.env.example* dans le dossier fraichement créé 
***
## 2- Compte rendu TP
***

### Les différentes étapes de la réalisation du projet

<br>

#### Côté back-office
-----
1- Créer une branche back-end afin d'isoler le travail en back-end et la branche main (en production)  
```sh
git branch back-end
``` 

2- Adapter le code html pour créer un blog minimaliste  
avec *models*, *migrations*, *controllers* pour adapter le projet à un schéma de bdd  

3- Créer un système d'authentification pour le site  
Par la commande *breeze*   
<br>

#### Côté front-end
-----
1- Créer une branche front-end afin d'isoler le travail en front-end et la branche main (en production)  
```sh
git branch front-end
``` 

2- Création des fichiers :  
. welcome.blade.php  
. tarifs.blade.php  
. head.blade.php  
. contact.blade.php  

3- Modification du fichiers web.php qui est dans /routes/web.php  

4- Création d'un dossier layouts  

5- Création et configuration du fichiers app.blade.php qui est dans layouts/blade.php 

6- Configuration du fichier *style.css* dans */public/css/style.css*


### Les difficultés rencontrées et solutions apportées
<br>

#### Côté back-office
-----
Difficulté à faire passer la commande *sail*. Résolu en mettant un alias qui pointe vers le fichier sail afin d'utiliser la fonction *sail* à l'instar de *./vendor/bin/sail*

<br>

#### Côté front-end  
----- 
Problème de compatibilité de version de wsl. Solutions update de la version 1 à la version 2   
Problème avec la gestion des contenairs, il fallait rajouter au début et à la fin de chaque section ce code :  
```sh
extends('layouts.app')  
section('content')  
```
et à la fin du code
```sh  
endsection  
```
<br>

### Les sources des documentations/tutoriels/stackoverflow

Pour l'update de version de wsl on a utilisé le lien  
https://learn.microsoft.com/fr-fr/windows/wsl/install  

Pour la mise en page du readme  
https://www.ionos.fr/digitalguide/sites-internet/developpement-web/fichier-readme/  
http://blog.ezoqc.com/comment-faire-un-bon-readme-md/  
