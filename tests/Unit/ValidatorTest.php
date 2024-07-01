<?php

use \Core\Validator;

it('validates a string', function () {

  expect(\Core\Validator::string('foobar'))->toBeTrue();
  expect(\Core\Validator::string(''))->toBeFalse();
  expect(\Core\Validator::string(false))->toBeFalse();
});

it('validates a sting with a min length', function () {
  expect(\Core\Validator::string('foobar', 20))->toBeFalse();
});

it('validates an email', function () {
  expect(\Core\Validator::email('foobar'))->toBeFalse();
  expect(\Core\Validator::email('joe@example.com'))->toBeTrue();
});

it('validates if a number is grater than another', function () {
  expect(\Core\Validator::greaterThan(10, 1))->toBeTrue();
  expect(\Core\Validator::greaterThan(10, 100))->toBeFalse();
})->only();