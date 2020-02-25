<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollectionateliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollectionateliersTable Test Case
 */
class CollectionateliersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CollectionateliersTable
     */
    public $Collectionateliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Collectionateliers',
        'app.Users',
        'app.Ateliers',
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
        $config = TableRegistry::getTableLocator()->exists('Collectionateliers') ? [] : ['className' => CollectionateliersTable::class];
        $this->Collectionateliers = TableRegistry::getTableLocator()->get('Collectionateliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Collectionateliers);

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
