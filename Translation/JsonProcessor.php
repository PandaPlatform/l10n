<?php

/*
 * This file is part of the Panda Localization Component.
 *
 * (c) Ioannis Papikas <papikas.ioan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Panda\Localization\Translation;

use Exception;
use Panda\Contracts\Localization\FileProcessor;
use Panda\Support\Helpers\ArrayHelper;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

/**
 * Class JsonProcessor
 *
 * @package Panda\Localization\Translation
 *
 * @version 0.1
 */
class JsonProcessor extends AbstractProcessor implements FileProcessor
{
    /**
     * @var string
     */
    protected $baseDirectory;

    /**
     * JsonProcessor constructor.
     *
     * @param $baseDirectory
     */
    public function __construct($baseDirectory)
    {
        $this->baseDirectory = $baseDirectory;
    }

    /**
     * Get the base directory for the literals
     *
     * @return string
     */
    public function getBaseDirectory()
    {
        return $this->baseDirectory;
    }

    /**
     * @param string $baseDirectory
     */
    public function setBaseDirectory(string $baseDirectory)
    {
        $this->baseDirectory = $baseDirectory;
    }
}
