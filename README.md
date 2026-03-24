# Mediatekformation
## Application d'origine
L'application d'origine est disponible en suivant ce lien : https://github.com/CNED-SLAM/mediatekformation <br>
La documentation est disponible dans le readme du dépôt ci-dessus.
<br>

## Présentation
Ce site, développé avec Symfony 6.4, permet d'accéder aux vidéos d'auto-formation proposées par une chaîne de médiathèques et qui sont aussi accessibles sur YouTube.<br> 
Actuellement, seule la partie front office a été développée. Elle contient les fonctionnalités globales suivantes :<br>

## Les différentes pages

### Page n°1: Les playlists - Front-office
<img width="1586" height="823" alt="Capture d&#39;écran 2026-03-19 135308" src="https://github.com/user-attachments/assets/fbd2ace1-a29e-4a34-abcc-d3631eab609d" />

  
Cette page a déjà été codée. Une colonne affichant le nombre de formations par playlist a été ajoutée, ainsi que des boutons permettant de trier les données par ordre croissant ou décroissant.

### Page n°2: Page de connexion - Back-office
<img width="1507" height="445" alt="Capture d&#39;écran 2026-03-19 135831" src="https://github.com/user-attachments/assets/06f4c086-1ac7-41d0-b826-a1e58c05c738" />

Cette page constitue la partie administrative du site web. Elle permet de gérer l’ensemble du site. Pour y accéder, il suffit d’ajouter /login à l’URL du site et de cliquer sur le bouton Se connecter, ce qui redirige vers l’interface back-office.

### Page n°3: Page des formations - Back-office

<img width="1914" height="830" alt="Capture d&#39;écran 2026-03-19 140848" src="https://github.com/user-attachments/assets/27781a20-0247-4886-9afb-a9147c031fc5" />

Cette page s’affiche après la connexion et correspond au dossier admin/formation du template. Elle présente toutes les formations du front-office. Grâce aux boutons Ajouter, Supprimer et Modifier, il est possible de gérer les formations. On peut trier les formations par ordre croissant ou décroissant selon différents critères tels que la formation, la playlist ou la date. Il est également possible d’effectuer des recherches et d’appliquer des filtres par formation, playlist ou catégorie.

### Page n°4: Ajouter une formation

<img width="1911" height="733" alt="Capture d&#39;écran 2026-03-19 141036" src="https://github.com/user-attachments/assets/eefb9351-2bfc-43ad-beea-d24353d70d75" />
La page s’affiche lorsque l’utilisateur clique sur le bouton Ajouter. Elle reprend les mêmes champs que la section Back‑Office, notamment le titre de la formation, la date de publication, la description, l’ID de la vidéo, la playlist associée et les catégories. Une fois toutes les informations saisies, l’utilisateur peut cliquer sur Enregistrer afin d’ajouter la nouvelle formation à la base de données et de la rendre visible dans le Front‑Office.

Attention : la date de publication ne peut pas être postérieure à aujourd’hui.

### Page n°5: Modifier une formation

<img width="1718" height="627" alt="Capture d&#39;écran 2026-03-19 142039" src="https://github.com/user-attachments/assets/f15fceef-8c88-4a65-9e20-021203169726" />

Cette page s’affiche lorsque l’on clique sur le bouton Modifier. Toutes les informations y sont déjà préremplies, ce qui permet à l’utilisateur de modifier uniquement les éléments souhaités. Après avoir effectué les changements, il suffit de cliquer sur Enregistrer pour que les nouvelles données soient automatiquement mises à jour dans la base de données.

### page n°6: Supprimer des playlists - Back-office
<img width="1090" height="313" alt="Capture d&#39;écran 2026-03-19 142628" src="https://github.com/user-attachments/assets/9e9ac367-9c09-493a-ab5c-64876d77adf8" />

Lorsque l’on clique sur le bouton Supprimer, une fenêtre de confirmation s’affiche pour demander à l’utilisateur s’il souhaite réellement supprimer la formation. Il peut alors soit annuler l’action, soit cliquer sur OK pour confirmer. Une fois la suppression validée, la formation est définitivement supprimée de la base de données en utilisant son identifiant.

### Page n°7: Page des playlists - Back-office

<img width="1861" height="775" alt="Capture d&#39;écran 2026-03-19 143038" src="https://github.com/user-attachments/assets/343d2e7a-3392-46f3-9bd0-471621c7511e" />

Cette page s’affiche après la connexion et correspond au dossier admin/playlist du template. Elle présente l’ensemble des playlists visibles dans le front‑office. Grâce aux boutons Ajouter, Modifier et Supprimer, l’administrateur peut gérer les playlists. Il est également possible de trier les playlists et le nombre de formations associées, en ordre croissant ou décroissant. Enfin, des filtres permettent d’effectuer une recherche par nom de playlist ou par catégorie, afin de retrouver rapidement les éléments souhaités.

### Page n°8: Ajouter playlists - Back-office
<img width="2902" height="1576" alt="image" src="https://github.com/user-attachments/assets/2243f7e9-2b29-4772-ad4f-4ec73a2a7f77" />


Cette page permet, en cliquant sur le bouton Ajouter, d’ajouter une nouvelle playlist via un formulaire dédié.
Pour créer une playlist, l’administrateur doit renseigner les champs Nom de la playlist et Description, puis valider l’opération en cliquant sur le bouton Enregistrer.
Une fois le formulaire soumis, la playlist est automatiquement ajoutée à la liste existante.
### Page n°7: Modifier playlists - Back-office

<img width="1449" height="829" alt="Capture d’écran 2026-03-24 à 17 31 45" src="https://github.com/user-attachments/assets/724e106c-cd8d-4d28-af1f-5fab4c70e785" />


Lorsque l’on clique sur le bouton Modifier, un formulaire s’ouvre afin de mettre à jour la playlist correspondant à son identifiant. Toutes les informations existantes sont automatiquement pré-remplies dans les champs, ce qui permet de les modifier facilement. La page affiche également la liste des formations liées à cette playlist.

### Page n°9: Supprimer des playlists - Back-office

<img width="1145" height="414" alt="image" src="https://github.com/user-attachments/assets/7156eb6d-c3e7-409e-a795-31ec00427fab" />

Lorsque l’on clique sur le bouton Supprimer, la playlist est automatiquement supprimée de la base de données en se basant sur son identifiant.

### Page n°9:  Page des catégories

<img width="2898" height="1658" alt="image" src="https://github.com/user-attachments/assets/4c15eef3-f923-47dc-95dc-1691f588ed2a" />


Cette page de catégories affiche les noms des catégories ainsi que le nombre de formations associées à chacune. Elle propose également un formulaire d’ajout permettant d’insérer une nouvelle catégorie dans la liste existante, à condition que celle-ci n’existe pas déjà.
Il est aussi possible de supprimer une catégorie, mais cette action est soumise à une condition : la catégorie ne doit être liée à aucune formation. Dans le cas contraire, la suppression est impossible.


## Installation de l'application en local
érifier que Composer, Git et Wamserver (ou équivalent) sont installés sur l'ordinateur.
- Télécharger le code et le dézipper dans www de Wampserver (ou dossier équivalent) puis renommer le dossier en "mediatekformation".
- Ouvrir une fenêtre de commandes en mode admin, se positionner dans le dossier du projet et taper "composer install" pour reconstituer le dossier vendor.
- Récupérer le fichier mediatekformation.sql en racine du projet et l'utiliser pour créer la BDD MySQL "mediatekformation" en root avec ou sans psw de selon la configuration de phpMyAdmin (si vous voulez mettre un login/pwd d'accès, il faut le préciser dans le fichier ".env" en racine du projet).

  ## Tester l'application en ligne
  L'application est disponible en ligne à cette adresse : https://mediatekformation.fr/  <br>
La page d'authentification est disponible en rajoutant login à l'adresse : https://mediatekformation.fr/login <br>
Acces a login  Nom d'utilisateur: admin
                password : 8pyBiQPdLez8ECWi
