<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AteliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AteliersTable Test Case
 */
class AteliersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AteliersTable
     */
    public $Ateliers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ateliers',
        'app.Users',
        'app.AtelierClients',
        'app.Collectionateliers',
        'app.Coutures',
        'app.Mesures',
        'app.Parametres',
        'app.Partagecollections',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ateliers') ? [] : ['className' => AteliersTable::class];
        $this->Ateliers = TableRegistry::getTableLocator()->get('Ateliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ateliers);

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
