<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CouturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CouturesTable Test Case
 */
class CouturesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CouturesTable
     */
    public $Coutures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Coutures',
        'app.Clients',
        'app.Users',
        'app.Ateliers',
        'app.Collectionateliers',
        'app.Collectionclients',
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
        $config = TableRegistry::getTableLocator()->exists('Coutures') ? [] : ['className' => CouturesTable::class];
        $this->Coutures = TableRegistry::getTableLocator()->get('Coutures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coutures);

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
