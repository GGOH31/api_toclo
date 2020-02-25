<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollectionclientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollectionclientsTable Test Case
 */
class CollectionclientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CollectionclientsTable
     */
    public $Collectionclients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Collectionclients',
        'app.Users',
        'app.Clients',
        'app.Coutures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Collectionclients') ? [] : ['className' => CollectionclientsTable::class];
        $this->Collectionclients = TableRegistry::getTableLocator()->get('Collectionclients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Collectionclients);

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
