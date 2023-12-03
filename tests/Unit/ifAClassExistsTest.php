<?php

describe('if A Class Exists', function () {

    it('sholud return true', function () {

        $num = 5;

        expect($num > 2)->toBeTrue();
    });


    it('sholud return false', function () {

        $num = 3;

        expect($num > 2)->toBeTrue();
    });
});
