<?php

test('convert command', function () {
    $this->artisan('convert hello world')
        ->expectsOutput('HELLO WORLD')
        ->expectsOutput('hElLo wOrLd')
        ->expectsOutput('CSV created')
        ->assertExitCode(0);
});
    