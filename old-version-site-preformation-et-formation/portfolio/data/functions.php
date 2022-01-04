<?php

function display_texte(array $texte) : string
{
    $texte_content = '';
    if ($texte['is_enabled']) {
        $texte_content = '<article>';
        $texte_content .= '<h3>' . $texte['title'] . '</h3>';
        $texte_content .= '<div>' . $texte['texte'] . '</div>';
        $texte_content .= '<i>' . $texte['author'] . '</i>';
        $texte_content .= '</article>';
    }
        return $texte_content;

}


function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
        }
    }
    return $author['full_name'] . ' ( Rubrique : ' . $author['theme'] . ' )';
}

function getTextes(array $textes) : array
{
    $validTextes = [];

    foreach($textes as $texte) {
        if ($texte['is_enabled']) {
            $validTextes[] = $texte;
        }
    }

    return $validTextes;
}

// SAUVEGARDE Version Precedente paragraphe 1)
//function isValidTexte(array $texte) : bool
//{
//    if (array_key_exists('is_enabled', $texte)) {
//        $isEnabled = $texte['is_enabled'];
//    } else {
//        $isEnabled = false;
//    }
//
//    return $isEnabled;
//}
// SAUVEGARDE TROISIEME
//function getTextes(array $textes) : array
//{
//    $validTextes = [];
//
//    foreach($textes as $texte) {
//        if (isValidTexte($texte)) {
//            $validTextes[] = $texte;
//        }
//    }
//
//    return $validTextes;
//}
//
//
//
//