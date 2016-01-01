<?php

/*
 * This file is part of Symplify
 * Copyright (c) 2012 Tomas Votruba (http://tomasvotruba.cz).
 */

namespace Symplify\CodingStandard\Runner;

use Symfony\Component\Process\Process;
use Symplify\CodingStandard\Contract\Runner\RunnerInterface;

final class Psr2Runner implements RunnerInterface
{
    /**
     * @var string
     */
    private $output;

    /**
     * {@inheritdoc}
     */
    public function runForDirectory($directory)
    {
        $process = new Process(
            sprintf(
                'php vendor/bin/phpcs %s --standard=PSR2 -p -s --colors --extensions=php',
                $directory
            )
        );
        $process->run();

        $this->output = $process->getOutput();

        return $this->output;
    }

    /**
     * {@inheritdoc}
     */
    public function hasErrors()
    {
        if (strpos($this->output, 'ERROR') !== false) {
            return true;
        }

        return false;
    }
}
