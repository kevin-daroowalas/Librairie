<?php

declare(strict_types=1);


interface Hydratation
{

    /**
     * @param  $array
     */
    public function __construct( $array);

    /**
     * @param  $array
     */
    public function hydrate( $array);

}