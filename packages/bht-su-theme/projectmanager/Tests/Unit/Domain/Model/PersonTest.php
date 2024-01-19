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
class PersonTest extends UnitTestCase
{
    /**
     * @var \projectmanager\Classes\Domain\Model\Person|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \projectmanager\Classes\Domain\Model\Person::class,
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
    public function getRoleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getRole()
        );
    }

    /**
     * @test
     */
    public function setRoleForStringSetsRole(): void
    {
        $this->subject->setRole('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('role'));
    }

    /**
     * @test
     */
    public function getWorksAtReturnsInitialValueForProject(): void
    {
        self::assertEquals(
            null,
            $this->subject->getWorksAt()
        );
    }

    /**
     * @test
     */
    public function setWorksAtForProjectSetsWorksAt(): void
    {
        $worksAtFixture = new \projectmanager\Classes\Domain\Model\Project();
        $this->subject->setWorksAt($worksAtFixture);

        self::assertEquals($worksAtFixture, $this->subject->_get('worksAt'));
    }
}
