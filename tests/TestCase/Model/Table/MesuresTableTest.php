<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesuresTable Test Case
 */
class MesuresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MesuresTable
     */
    public $Mesures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mesures',
        'app.Users',
        'app.Ateliers',
        'app.AtelierClients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mesures') ? [] : ['className' => MesuresTable::class];
        $this->Mesures = TableRegistry::getTableLocator()->get('Mesures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mesures);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
