<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SidebarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SidebarTable Test Case
 */
class SidebarTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SidebarTable
     */
    public $Sidebar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Sidebar'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sidebar') ? [] : ['className' => SidebarTable::class];
        $this->Sidebar = TableRegistry::getTableLocator()->get('Sidebar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sidebar);

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
