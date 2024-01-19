<?php

declare(strict_types=1);

namespace Projectmanager\Projectmanager\Domain\Model;


/**
 * This file is part of the "Projectmanager" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Sven Urbach <s87412@bht-berlin.de>, SU-DEV
 */

/**
 * Tech
 */
class Tech extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * version
     *
     * @var string
     */
    protected $version = null;

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets the version
     *
     * @param string $version
     * @return void
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
