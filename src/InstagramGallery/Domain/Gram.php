<?php

namespace Cowglow\InstagramGallery\Domain;

/**
 * Class Gram
 * @package Cowglow\InstagramGallery\Domain
 */
class Gram extends AbstractEntity
{

    /**
     * @var array
     */
    protected $class;

    /**
     * @var string
     */
    protected $srcPath;

    /**
     * @var string
     */
    protected $src;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var array
     */
    protected $style;

    /**
     * @return array
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param array $class
     */
    public function setClass(array $class): void
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getSrcPath(): string
    {
        return $this->srcPath;
    }

    /**
     * @param string $srcPath
     */
    public function setSrcPath(string $srcPath): void
    {
        $this->srcPath = $srcPath;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @param string $src
     */
    public function setSrc(string $src): void
    {
        $this->src = $src;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getStyle(): array
    {
        return $this->style;
    }

    /**
     * @param array $style
     */
    public function setStyle(array $style): void
    {
        $this->style = $style;
    }
}
