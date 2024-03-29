<?php
/**
 * ServiceChannelApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PTV Open Api version 11
 *
 * Here you can see listed all the PTV Open Api methods.
 *
 * The version of the OpenAPI document: v11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Tampere\PtvV11\Test\Api;

use \Tampere\PtvV11\Configuration;
use \Tampere\PtvV11\ApiException;
use \Tampere\PtvV11\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ServiceChannelApiTest Class Doc Comment
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServiceChannelApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for apiV11ServiceChannelActiveGet
     *
     * Gets all service channels within PTV as a list of service channel ids and names. Also service channels with draft and modified versions are included.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Certain type of service channels can be fetched by setting query string parameter type.  NOTE! This is a restricted endpoint..
     *
     */
    public function testApiV11ServiceChannelActiveGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelActiveIdGet
     *
     * Fetches all the information related to a single service channel. Also service channels with only draft or modified versions are returned.  NOTE! This is a restricted endpoint..
     *
     */
    public function testApiV11ServiceChannelActiveIdGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelArchivedListGet
     *
     * Fetches automatically/manually archived service channels.
     *
     */
    public function testApiV11ServiceChannelArchivedListGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelAreaAreaCodeCodeGet
     *
     * Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter..
     *
     */
    public function testApiV11ServiceChannelAreaAreaCodeCodeGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelEChannelIdPut
     *
     * Updates electronic channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelEChannelIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelEChannelPost
     *
     * Creates a new electronic channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelEChannelPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelEChannelSourceIdSourceIdPut
     *
     * Updates electronic channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelEChannelSourceIdSourceIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelGet
     *
     * Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as 'Archived' and withdrawn items can be fetched by setting status parameter as 'Withdrawn'..
     *
     */
    public function testApiV11ServiceChannelGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelIdGet
     *
     * Fetches all the information related to a single service channel..
     *
     */
    public function testApiV11ServiceChannelIdGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelListAreaAreaCodeCodeGet
     *
     * Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter..
     *
     */
    public function testApiV11ServiceChannelListAreaAreaCodeCodeGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelListGet
     *
     * Fetches all the information related to requested service channels..
     *
     */
    public function testApiV11ServiceChannelListGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelListOrganizationGet
     *
     * Fetches all the information of service channels related to certain organization. Either organizationId, code or oid needs to be added as a parameter..
     *
     */
    public function testApiV11ServiceChannelListOrganizationGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelOrganizationOrganizationIdGet
     *
     * Gets a list of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter..
     *
     */
    public function testApiV11ServiceChannelOrganizationOrganizationIdGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet
     *
     * Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter..
     *
     */
    public function testApiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPhoneIdPut
     *
     * Updates phone channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPhoneIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPhonePost
     *
     * Creates a new phone channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPhonePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPhoneSourceIdSourceIdPut
     *
     * Updates phone channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPhoneSourceIdSourceIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPrintableFormIdPut
     *
     * Updates printable form channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPrintableFormIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPrintableFormPost
     *
     * Creates a new printable form channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPrintableFormPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelPrintableFormSourceIdSourceIdPut
     *
     * Updates printable form channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelPrintableFormSourceIdSourceIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelServiceLocationIdPut
     *
     * Updates service location channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelServiceLocationIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelServiceLocationPost
     *
     * Creates a new service location channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelServiceLocationPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelServiceLocationSourceIdSourceIdPut
     *
     * Updates service location channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelServiceLocationSourceIdSourceIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelTypeTypeGet
     *
     * Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter..
     *
     */
    public function testApiV11ServiceChannelTypeTypeGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelWebPageIdPut
     *
     * Updates webpage channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelWebPageIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelWebPagePost
     *
     * Creates a new web page channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelWebPagePost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for apiV11ServiceChannelWebPageSourceIdSourceIdPut
     *
     * Updates webpage channel with the data provided as input..
     *
     */
    public function testApiV11ServiceChannelWebPageSourceIdSourceIdPut()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
