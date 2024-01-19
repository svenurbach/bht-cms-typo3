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
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * teammember
     *
     * @var string
     */
    protected $teammember = null;

    /**
     * client
     *
     * @var string
     */
    protected $client = null;

    /**
     * has
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\projectmanager\Classes\Domain\Model\Tech>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $has = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->has = $this->has ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Returns the teammember
     *
     * @return string
     */
    public function getTeammember()
    {
        return $this->teammember;
    }

    /**
     * Sets the teammember
     *
     * @param string $teammember
     * @return void
     */
    public function setTeammember(string $teammember)
    {
        $this->teammember = $teammember;
    }

    /**
     * Returns the client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Sets the client
     *
     * @param string $client
     * @return void
     */
    public function setClient(string $client)
    {
        $this->client = $client;
    }

    /**
     * Adds a Tech
     *
     * @param \projectmanager\Classes\Domain\Model\Tech $ha
     * @return void
     */
    public function addHa(\projectmanager\Classes\Domain\Model\Tech $ha)
    {
        $this->has->attach($ha);
    }

    /**
     * Removes a Tech
     *
     * @param \projectmanager\Classes\Domain\Model\Tech $haToRemove The Tech to be removed
     * @return void
     */
    public function removeHa(\projectmanager\Classes\Domain\Model\Tech $haToRemove)
    {
        $this->has->detach($haToRemove);
    }

    /**
     * Returns the has
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\projectmanager\Classes\Domain\Model\Tech>
     */
    public function getHas()
    {
        return $this->has;
    }

    /**
     * Sets the has
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\projectmanager\Classes\Domain\Model\Tech> $has
     * @return void
     */
    public function setHas(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $has)
    {
        $this->has = $has;
    }
}
