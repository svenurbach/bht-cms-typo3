<?php

declare(strict_types=1);

namespace Projectmanager\Projectmanager\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Sven Urbach <s87412@bht-berlin.de>
 */
class ProjectTest extends UnitTestCase
{
    /**
     * @var \projectmanager\Classes\Domain\Model\Project|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \projectmanager\Classes\Domain\Model\Project::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getTeammemberReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTeammember()
        );
    }

    /**
     * @test
     */
    public function setTeammemberForStringSetsTeammember(): void
    {
        $this->subject->setTeammember('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('teammember'));
    }

    /**
     * @test
     */
    public function getClientReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getClient()
        );
    }

    /**
     * @test
     */
    public function setClientForStringSetsClient(): void
    {
        $this->subject->setClient('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('client'));
    }

    /**
     * @test
     */
    public function getHasReturnsInitialValueForTech(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getHas()
        );
    }

    /**
     * @test
     */
    public function setHasForObjectStorageContainingTechSetsHas(): void
    {
        $ha = new \projectmanager\Classes\Domain\Model\Tech();
        $objectStorageHoldingExactlyOneHas = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneHas->attach($ha);
        $this->subject->setHas($objectStorageHoldingExactlyOneHas);

        self::assertEquals($objectStorageHoldingExactlyOneHas, $this->subject->_get('has'));
    }

    /**
     * @test
     */
    public function addHaToObjectStorageHoldingHas(): void
    {
        $ha = new \projectmanager\Classes\Domain\Model\Tech();
        $hasObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $hasObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ha));
        $this->subject->_set('has', $hasObjectStorageMock);

        $this->subject->addHa($ha);
    }

    /**
     * @test
     */
    public function removeHaFromObjectStorageHoldingHas(): void
    {
        $ha = new \projectmanager\Classes\Domain\Model\Tech();
        $hasObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $hasObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ha));
        $this->subject->_set('has', $hasObjectStorageMock);

        $this->subject->removeHa($ha);
    }
}
