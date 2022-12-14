<?php
/**
 * ServiceCollectionApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PTV Open Api version 11
 *
 * Here you can see listed all the PTV Open Api methods.
 *
 * OpenAPI spec version: v11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Tampere\PtvV11;

use Tampere\PtvV11\Configuration;
use Tampere\PtvV11\ApiException;
use Tampere\PtvV11\ObjectSerializer;

/**
 * ServiceCollectionApiTest Class Doc Comment
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceCollectionApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionGet
     *
     * Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Service collections created before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting parameter archived to true..
     *
     */
    public function testApiV11ServiceCollectionGet()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionIdGet
     *
     * Fetches all the information related to a single service collection..
     *
     */
    public function testApiV11ServiceCollectionIdGet()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionIdPut
     *
     * Updates the defined service collection with the data provided as input..
     *
     */
    public function testApiV11ServiceCollectionIdPut()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionOrganizationGet
     *
     * Gets the published service collections within PTV related to certain organization. Either organizationId or code needs to be added as a parameter..
     *
     */
    public function testApiV11ServiceCollectionOrganizationGet()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionPost
     *
     * Creates a new service collection with the data provided as input..
     *
     */
    public function testApiV11ServiceCollectionPost()
    {
    }

    /**
     * Test case for apiV11ServiceCollectionSourceIdSourceIdPut
     *
     * Updates the defined service collection with the data provided as input..
     *
     */
    public function testApiV11ServiceCollectionSourceIdSourceIdPut()
    {
    }
}
