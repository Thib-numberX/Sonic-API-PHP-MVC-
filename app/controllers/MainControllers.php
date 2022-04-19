<?php

class MainController {

    public function homeAction(){

        //creer l'objet à partir de l'instance de la class Character
        $characterModel = new Character;
        //var_dump($characterModel);

        $characters = $characterModel-> findAll();
        // var_dump($characters); //! j'ai ici les persos
        $data = [
            'character' => $characters,
        ];
        // var_dump($data); //! j'ai aussi les persos, donc ils sont dans le tableau

        $this->show('home', $data);

    }


    public function createurAction(){

        $this->show('createurs');
        
    }

    public function show($viewName, array $viewData = [])
    {
       
        // On demande à PHP d'aller chercher la variable $router pour pouvoir l'utiliser dans nos templates.
        //! C'est une mauvaise pratique. Elle passe outre les différents principes mis en place avec notre architecture. Donc on verra plus tard comment procéder autrement.
        global $router;

        // Sur toutes les pages, on a besoin d'avoir accès à la variable $absoluteUrl. Celle-ci contient le chemin vers le dossier public et permet de générer les liens vers les assets.
        $absoluteUrl = $_SERVER['BASE_URI'];


        // On "déballe" le  "colis" $viewData. C'est à dire on extrait chacune de ses entrées dans des variables qui portent le meme nom que les entrées
        // Exemple  pour un tableau donné : 
        // $array = [
        //     'truc' => true,
        //     'machin' => false,
        //     'bidule' => 5
        // ];
        // extract($array) //donnera trois variables : $truc, $machin, $bidule.

        extract($viewData);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }


}