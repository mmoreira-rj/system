<?php
namespace Aura\Framework\Cli\CacheClassmap;
use Aura\Framework\Cli\AbstractCommandTest;

/**
 * Test class for Command.
 * Generated by PHPUnit on 2011-10-06 at 15:19:38.
 */
class CommandTest extends AbstractCommandTest
{
    /**
     * @var Command
     */
    protected $command_name = 'CacheClassmap';
    
    protected function newCommand($argv = [], $system_dir = AURA_TEST_RUN_SYSTEM_DIR)
    {
        $command = parent::newCommand($argv, $system_dir);
        $command->setSystem($this->system);
        return $command;
    }
    
    /**
     * @todo Implement testAction().
     */
    public function testAction()
    {
        $command = $this->newCommand();
        
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
