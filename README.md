# HSBC Web application | Application web

Cette application est développée avec l'aide du framework symfony.
## Prérequis | Dependance
Votre ordinateur a besoin des applications suivantes déjà installées
1) Git , composer, xampp

## Installation
### Windows

 1) L'application à besoin d'être connecté à une base de donnée mysql 
 Lancer XAMPP control panel & lancer Apache et MyQSL

  2)Ouvrir l'invité de commande en recherchant "cmd"

![Alt text](resourceReadme/WindowsCmdOpen.jpeg?raw=true "CmdSearch")

3) Copier ces commandes dans l'invité commande

```bash
git clone https://github.com/Amtilaw/HSBC.git
dir HSBC
composer install
php bin/console doctrine:database:create 
php bin/console make:migration 
php bin/console doctrine:migration:migrate 
php -S 127.0.0.1:9000 -t public
```

4) Lancer votre navigateur web et entré l'adresse suivante: http://127.0.0.1:9000/contact/view

### Linux
1) Ouvrer votre terminal
```bash
git clone https://github.com/Amtilaw/HSBC.git
cd HSBC
chmod +x install.bash
sudo ./install.bash # This file contain the same command then Windows --> look 3)
php -S 127.0.0.1:9000 -t public
```

2) Lancer votre navigateur web et entré l'adresse suivante: http://127.0.0.1:9000/contact/view

Enjoy!


Sinon vous pouvez visiter l'application à l'adresse suivante : http://94.224.78.233/HSBC/public/contact/view
