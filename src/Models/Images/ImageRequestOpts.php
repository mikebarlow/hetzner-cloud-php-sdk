<?php
/**
 * Created by PhpStorm.
 * User: lukaskammerling
 * Date: 2019-03-28
 * Time: 13:51.
 */

namespace LKDev\HetznerCloud\Models\Images;

use LKDev\HetznerCloud\RequestOpts;

class ImageRequestOpts extends RequestOpts
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $architecture;

    /**
     * RequestOpts constructor.
     *
     * @param $name
     * @param $arch
     * @param $perPage
     * @param $page
     * @param $labelSelector
     */
    public function __construct(string $name = null, string $arch = null, int $perPage = null, int $page = null, string $labelSelector = null)
    {
        parent::__construct($perPage, $page, $labelSelector);
        $this->name = $name;
        $this->architecture = $arch;
    }
}
