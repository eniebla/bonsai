<?php
/**
 * Part of the Caffeinated PHP packages.
 *
 * MIT License and copyright information bundled with this package in the LICENSE file
 */
namespace Caffeinated\Bonsai\Assets;

use Assetic\Filter\HashableInterface;

/**
 * This is the AssetCollection.
 *
 * @package        Caffeinated\Bonsai
 * @author         Caffeinated Dev Team
 * @copyright      Copyright (c) 2015, Caffeinated
 * @license        https://tldrlegal.com/license/mit-license MIT License
 */
class AssetCollection extends \Assetic\Asset\AssetCollection
{
    /** Instantiates the class */
    public function getCacheKey()
    {
        $key = '';
        foreach($this->all() as $asset)
        {
            if(!$asset instanceof Asset) continue;
            $key .= $asset->getCacheKey();
        }
        return 'col_'.$key;
    }
    public function getHandle()
    {
        return 'col_';
    }
}
