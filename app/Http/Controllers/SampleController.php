<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class SampleController {
    public function sample() {
        // $process = new Process(['python', base_path() . '/test.py']);
        // $process->run();
        return view('sample');
    }
    public function sample2() {
        $process = new Process(['python', '../../Python/test.py']);
        $process->run();
        dd($process->getOutput());

        return $process->getOutput();
    }
}
