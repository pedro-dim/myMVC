<?php

describe(
    'Class and Methods ',
    function () {

        it('should check if MyClass exists', function () {
            expect(class_exists('App\Routes\Route'))->toBeTrue();
        });

        it('should check if Method exists', function () {

            expect(method_exists('App\Routes\Route', 'GET'))->toBeTrue();
        });
    }



);