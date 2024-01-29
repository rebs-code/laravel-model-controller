# Model & Controller with Laravel

Create un nuovo progetto Laravel

tramite phpMyAdmin create un nuovo database laravel_model_controller

Importate nel vostro database la tabella movies in allegato

Inserite le vostre credenziali per il database nel file .env

Create un model Movie -> php artisan make:model Movie

Create un controller che gestirà la rotta / -> php artisan make:controller Guest/PageController

All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.