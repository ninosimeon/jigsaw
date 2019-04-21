<?php

namespace Jigsaw\FirstGame;

describe('Subset sum', function () {
    describe('#getFirstSubset', function () {
        context('Positive integer values', function () {
            it('3 elements', function () {
                $subset = new SubsetSum([2, 3, 4], 7);
                expect($subset->getFirstSubset())->toBe([3, 4]);
            });
            it('4 elements', function () {
                $subset = new SubsetSum([1, 2, 3, 4], 5);
                expect($subset->getFirstSubset())->toBe([1, 4]);
            });
        });
    });
});