<?php

/*
 * This file is part of the LiveTest package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LiveTest\Packages\Runner\Listeners;

use LiveTest\Listener\Base;
use LiveTest\TestRun\Properties;
use phmLabs\Components\Annovent\Annotation\Event;

/**
 * @author Nils Langner
 */
class Credentials extends Base
{
    /**
     * @Event("LiveTest.Runner.InitCore")
     */
    public function runnerInit()
    {
        $output = $this->getEventDispatcher()->getOutput();

        //TODO remove once everything is handled by output
        if (!$output) {

            echo "\nLiveTest " . LIVETEST_VERSION . "\n\n";

            return;
        }

        $output->writeln('');
        $output->writeln('LiveTest <comment>' . LIVETEST_VERSION .'</comment>');
        $output->writeln('');
    }
}