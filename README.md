skill-test-01
=============

A Symfony project created on July 2, 2018, 11:03 am.

## Setting up permissions

See: http://symfony.com/doc/2.8/setup/file_permissions.html

### Skill test

A partir du projet Symfony 2.8, réaliser une API rapide avec les 3 fonctionalités suivantes.

Enpoint:

- GET /rest/users           -> Liste des utilisateurs
- GET /rest/users/{id}      -> Retourne un objet user (garder la BDD très simple, une entité à 2/3 champs suffit)
- POST /rest/users/{id}     -> Modifie les propritétés d'un utilisateur passés en POST

- Le controller ne doit pas être chargé de logique le moins possible: utiliser pour cela un event listener pour ces trois endpoints pour y coder la logique qui récupère l'utilisateur dans la base, le modifie, etc.

- Un example de event/event listener est créé (voir ExampleEvent et ExampleEventListener).
- Un example de leur utilisation est "pseudo" codé dans DefaultController::exerciceTip() ou exerciceTip02 pour vous mettre sur les rails.

- L'API doit retourner du JSON
- Il est demandé de créer un service "Serializer" pour retourner une réponse JSON à partir d'un objet (qui pourra être un User mais aussi n'importe quel autre entité potentielle !)

- Sans coder: donnez nous quelques idées qui permettraient de mieux sécuriser l'API à ce jour ouverte
- Enfin, pusher votre branche sur le repository (nous devrons vous y donner accès - à demander au préalable!)
