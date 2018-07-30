<?php

namespace Cowglow\InstagramGallery\Domain;

/**
 * Class AbstractEntity
 * @package Cowglow\InstagramGallery\Domain
 */
abstract class AbstractEntity
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $this;

        return $this;
    }
}
