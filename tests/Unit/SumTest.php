<?php

use App\Functions\Study;

describe('sum', function () {
    it('may sum integers', function () {
        expect(Study::sum(1, 2))->toBe(3);
    });

    it('may sum floats', function () {
        expect(Study::sum(1.0, 3.0))->toBe(4.0);
    });

    it('may sum integers and floats', function () {
        expect(Study::sum(1, 3.0))->toBe(4.0);
    });
});
