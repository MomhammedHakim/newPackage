<?php

use Tests\Services\TestService;


    it('caches a specific method',function(){
        $service = app(TestService::class);

        $uuid = $service->getUuid();

        expect($service->getUuid())->toBe($uuid);
        expect($service->getUuid())->toBe($uuid);
        sleep(1);
        expect($service->getUuid())->on()->toBe($uuid);
    });
?>