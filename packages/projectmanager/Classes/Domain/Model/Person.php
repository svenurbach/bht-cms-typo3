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
 * Person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * role
     *
     * @var string
     */
    protected $role = null;

    /**
     * worksAt
     *
     * @var \projectmanager\Classes\Domain\Model\Project
     */
    protected $worksAt = null;

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
     * Returns the role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets the role
     *
     * @param string $role
     * @return void
     */
    public function setRole(string $role)
    {
        $this->role = $role;
    }

    /**
     * Returns the worksAt
     *
     * @return \projectmanager\Classes\Domain\Model\Project
     */
    public function getWorksAt()
    {
        return $this->worksAt;
    }

    /**
     * Sets the worksAt
     *
     * @param \projectmanager\Classes\Domain\Model\Project $worksAt
     * @return void
     */
    public function setWorksAt(\projectmanager\Classes\Domain\Model\Project $worksAt)
    {
        $this->worksAt = $worksAt;
    }
}
