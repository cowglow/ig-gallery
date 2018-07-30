<?php

namespace Cowglow\InstagramGallery\Application;

use Cowglow\InstagramGallery\Domain\Gram;

/**
 * Class GramFactory
 * @package Cowglow\InstagramGallery\Application
 */
class GramFactory
{
    /**
     * @param \SimpleXMLElement $xml
     *
     * @return array
     */
    public static function createGramsFromXML(\SimpleXMLElement $xml): array
    {
        $grams = [];

        foreach ($xml as $node) {
            $gram  = new Gram();
            $key   = '';
            $value = '';

            /**
             * TODO: Build loop
             */

            $setter = 'set'.ucfirst($key);
            if (is_callable([$grams, $setter])) {
                $gram->$setter($key, $value);
            }

            array_push($grams, $gram);
        }

        return $grams;
    }
}
