<?php

declare(strict_types=1);


class MembreSimple extends MembreSimple
{

    public function __construct( array $donnees)
    {
         Membres:: hydrate($donnees)
    }


}
