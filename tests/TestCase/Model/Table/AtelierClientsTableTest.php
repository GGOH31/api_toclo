<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtelierClientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtelierClientsTable Test Case
 */
class AtelierClientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtelierClientsTable
     */
    public $AtelierClients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AtelierClients',
        'app.Users',
        'app.Ateliers',
        'app.Clients',
        'app.Coutures',
        'app.Mesures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AtelierClients') ? [] : ['className' => AtelierClientsTable::class];
        $this->AtelierClients = TableRegistry::getTableLocator()->get('AtelierClients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AtelierClients);

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
