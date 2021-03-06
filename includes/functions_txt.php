<?php
/**
 * Created by PhpStorm.
 * User: Evy
 * Date: 20/05/2015
 * Time: 23:51
 */
function code($texte)
{
//Smileys
    $texte = str_replace(':D', '<img src="./images/smileys/heureux.gif" title="heureux" alt="heureux" />', $texte);
    $texte = str_replace(':lol:' , '<img src="./images/smileys/lol.gif" title="lol" alt="lol" />', $texte);
    $texte = str_replace(':triste:', '<img src="./images/smileys/triste.gif" title="triste" alt="triste" />', $texte);
    $texte = str_replace(':frime:', '<img src="./images/smileys/cool.gif" title="cool" alt="cool" />', $texte);
    $texte = str_replace('XD', '<img src="./images/smileys/rire.gif" title="rire" alt="rire" />', $texte);
    $texte = str_replace(':s', '<img src="./images/smileys/confus.gif" title="confus" alt="confus" />', $texte);
    $texte = str_replace(':O', '<img src="./images/smileys/choc.gif" title="choc" alt="choc" />', $texte);
    $texte = str_replace(':P', '<img src="./images/smileys/langue.gif" title="?" alt="?" />', $texte);
    $texte = str_replace(':ok:', '<img src="./images/smileys/ok.gif" title="!" alt="!" />', $texte);

//Mise en forme du texte
//gras
    $texte = preg_replace('`\[g\](.+)\[/g\]`isU', '<strong>$1</strong>', $texte);
//italique
    $texte = preg_replace('`\[i\](.+)\[/i\]`isU', '<em>$1</em>', $texte);
//souligné
    $texte = preg_replace('`\[s\](.+)\[/s\]`isU', '<u>$1</u>', $texte);
//lien
    $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);
//etc., etc.

//On retourne la variable texte
    return $texte;
}
?>