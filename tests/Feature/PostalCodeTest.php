<?php

namespace xGrz\Qbp\Tests\Feature;

use Brick\Postcode\InvalidPostcodeException;
use Brick\Postcode\UnknownCountryException;
use Tests\TestCase;
use xGrz\Qbp\Helpers\PostalCode;

class PostalCodeTest extends TestCase
{

    public function test_postal_code_is_return_formatted_string()
    {
        $postalCode = (new PostalCode('03986', 'PL'));

        $this->assertEquals('03-986', $postalCode);
    }

    public function test_helper_formats_postal_code()
    {
        $this->assertEquals('02-777', postalCode('02777'));
    }

    public function test_set_postal_code()
    {
        $postalCode = postalCode('02-777')->setPostalCode('03986');

        $this->assertEquals('03-986', $postalCode);

    }

    public function test_set_invalid_postal_code_throws_error()
    {
        $this->expectException(InvalidPostcodeException::class);

        postalCode('0219020', 'PL')->format();
    }

    public function test_set_country()
    {
        $postalCode = postalCode('03-986', 'DE');

        $this->assertEquals('DE', $postalCode->getCountry());
    }

    public function test_set_invalid_country_throws_error()
    {
        $this->expectException(UnknownCountryException::class);

        postalCode('03986', 'DHL')->format();
    }

    public function test_get_raw_postal_code_without_formatting()
    {
        $postalCode = postalCode('02-777');

        $this->assertEquals('02777', $postalCode->raw());
        $this->assertIsString($postalCode->raw());
    }

    public function test_postal_code_validation_success()
    {
        $this->assertTrue( postalCode('82-200')->isValid());
        $this->assertTrue( postalCode('PL82-200')->isValid());
        $this->assertTrue( postalCode('PL 82-200')->isValid());
    }

    public function test_postal_code_validation_fails()
    {
        $this->assertFalse( postalCode('AL82-200')->isValid());
        $this->assertFalse( postalCode('DE 82-200')->isValid());

    }


}
