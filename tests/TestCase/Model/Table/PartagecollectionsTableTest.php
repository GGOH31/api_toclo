<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartagecollectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartagecollectionsTable Test Case
 */
class PartagecollectionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartagecollectionsTable
     */
    public $Partagecollections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Partagecollections',
        'app.Clients',
        'app.Users',
        'app.Ateliers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Partagecollections') ? [] : ['className' => PartagecollectionsTable::class];
        $this->Partagecollections = TableRegistry::getTableLocator()->get('Partagecollections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Partagecollections);

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
