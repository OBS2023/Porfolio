private function verifierQteFraisForfait(array $lesFrais):string
    {
        $error='';
        foreach ($lesFrais as $code=>$quantite) :
            if (ctype_digit($quantite) == false) {
                $error = "Les quantités des frais doivent être numériques ...";
                break;
            }
            if($code=="NUI" && $quantite > date("t")){
                $error = "Le nombre de nuitées est supérieur au nombre de jour du mois";
            }
        endforeach;
        
        return $error;
    }