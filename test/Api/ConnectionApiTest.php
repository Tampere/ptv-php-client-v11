<?php
/**
 * ConnectionApiTest
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
 * ConnectionApiTest Class Doc Comment
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectionApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut
     *
     * Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set 'deleteAllServiceRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it..
     *
     */
    public function testApiV11ConnectionASTIServiceChannelIdServiceChannelIdPut()
    {
    }

    /**
     * Test case for apiV11ConnectionASTIServiceIdServiceIdPut
     *
     * Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it..
     *
     */
    public function testApiV11ConnectionASTIServiceIdServiceIdPut()
    {
    }

    /**
     * Test case for apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut
     *
     * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it..
     *
     */
    public function testApiV11ConnectionASTIServiceSourceIdServiceSourceIdPut()
    {
    }

    /**
     * Test case for apiV11ConnectionPost
     *
     * Creates a connections between services and service channels with extra data..
     *
     */
    public function testApiV11ConnectionPost()
    {
    }

    /**
     * Test case for apiV11ConnectionServiceIdServiceIdPut
     *
     * Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set 'deleteAllChannelRelations' property to true..
     *
     */
    public function testApiV11ConnectionServiceIdServiceIdPut()
    {
    }

    /**
     * Test case for apiV11ConnectionServiceSourceIdServiceSourceIdPut
     *
     * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set 'deleteAllChannelRelations' property to true.  ASTI connections are not removed - data for those connections can be updated though..
     *
     */
    public function testApiV11ConnectionServiceSourceIdServiceSourceIdPut()
    {
    }

    /**
     * Test case for apiV11ConnectionSourcePost
     *
     * Creates a connections between services and service channels with extra data. External source ids are used..
     *
     */
    public function testApiV11ConnectionSourcePost()
    {
    }
}