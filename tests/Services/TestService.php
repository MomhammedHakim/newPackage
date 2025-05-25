<?php

namespace Tests\Services;
use Illuminate\Support\Str;

class TestService
{
    public function getUuid():string
    {
        return Str::uuid();
    }
}