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
class TechTest extends UnitTestCase
{
    /**
     * @var \projectmanager\Classes\Domain\Model\Tech|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \projectmanager\Classes\Domain\Model\Tech::class,
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
    public function getVersionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getVersion()
        );
    }

    /**
     * @test
     */
    public function setVersionForStringSetsVersion(): void
    {
        $this->subject->setVersion('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('version'));
    }
}
