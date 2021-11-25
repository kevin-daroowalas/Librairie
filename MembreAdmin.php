<?php

declare(strict_types=1);


class MembreAdmin extends Membres
{

    public function __construct( array $donnees)
    {
        Membres:: hydrate($donnees)
    }

}
