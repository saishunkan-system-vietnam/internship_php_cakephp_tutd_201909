<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SliderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SliderTable Test Case
 */
class SliderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SliderTable
     */
    public $Slider;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Slider'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Slider') ? [] : ['className' => SliderTable::class];
        $this->Slider = TableRegistry::getTableLocator()->get('Slider', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Slider);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
