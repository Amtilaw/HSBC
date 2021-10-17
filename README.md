# HSBC Web application | Application web

This application is written with the help of the symfony framework \
Cette application est développé avec l'aide du framework symfony.
## Prérequis | Dependance
Your computer need to have the following application for installing this symfony application : \
Votre ordinateur à besoin des application suivante déjà installé
1) Git , composer, xampp

## Installation
### Windows

1) The application need now to be connected to his database
- Launch the XAMPP control panel & run Apache and MySQL \
 Lancer XAMPP control panel & lancer Apache et MyQSL

2) Open the command prompt by searching "command prompt" \
  Ouvrir l'invité de commande en recherchant "cmd"

![Alt text](resourceReadme/WindowsCmdOpen.jpeg?raw=true "CmdSearch")

3)  copy those commands in the terminal \
Copier ces commandes dans l'invité commande

```bash
git clone https://github.com/Amtilaw/HSBC.git
dir HSBC
composer install
php bin/console doctrine:database:create 
php bin/console make:migration 
php bin/console doctrine:migration:migrate 
php -S 127.0.0.1:9000 -t public
```

4) Start your web navigator and put this url : http://127.0.0.1:9000/contact/view

### Linux
1) Just open your terminal then
```bash
git clone https://github.com/Amtilaw/HSBC.git
cd HSBC
chmod +x install.bash
sudo ./install.bash # This file contain the same command then Windows --> look 3)
php -S 127.0.0.1:9000 -t public
```

2) Start your web navigator and put this url : http://127.0.0.1:9000/contact/view

Enjoy!

Sinon vous pouvez visiter l'application à l'adresse suivante : http://192.168.0.107/HSBC/public/contact/view
