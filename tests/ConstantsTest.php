<?php
/**
 * Tests the definition of time constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    /**
     * Ensure that each constant is defined and numeric.
     *
     * @dataProvider constantsProvider()
     */
    public function testConstantsAreDefined($constant)
    {
        $this->assertTrue(defined($constant), 'Expected the constant to be defined.');
        $this->assertInternalType('integer', constant($constant), 'Expected an integer value.');
    }

    /**
     * Provides a list of all constants defined by this package.
     */
    public function constantsProvider()
    {
        return [
            'One minute (in seconds)'       => ['MINUTE_IN_SECONDS'],
            'One hour (in seconds)'         => ['HOUR_IN_SECONDS'],
            'One day (in seconds)'          => ['DAY_IN_SECONDS'],
            'One week (in seconds'          => ['WEEK_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['MONTH_IN_SECONDS'],
            'One year (in seconds)'         => ['YEAR_IN_SECONDS'],
            'One hour (in minutes)'         => ['HOUR_IN_MINUTES'],
            'One day (in minutes)'          => ['DAY_IN_MINUTES'],
            'One week (in minutes'          => ['WEEK_IN_MINUTES'],
            'One 30-day month (in minutes)' => ['MONTH_IN_MINUTES'],
            'One year (in minutes)'         => ['YEAR_IN_MINUTES'],
        ];
    }
}
