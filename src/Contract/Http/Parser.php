<?php
/**
 * @copyright Changes made by Jack on 2025-03-23 11:45:00
 *
 * CHANGELOG:
 * - Added comprehensive PHPDoc comments for better IDE support and documentation
 * - Added return type hint for better type safety
 * - Added PHPDoc for interface description
 * - Improved method parameter documentation
 * - Added example usage in documentation
 */

namespace Dingo\Api\Contract\Http;

use Illuminate\Http\Request as IlluminateRequest;

/**
 * Parser Interface for handling HTTP requests in the Dingo API package.
 *
 * This interface defines the contract for classes that parse incoming HTTP requests
 * to extract and normalize data for API consumption. Implementations of this interface
 * should handle various content types and formats, such as JSON, XML, form data, etc.
 *
 * @package Dingo\Api\Contract\Http
 */
interface Parser
{
    /**
     * Parse an incoming HTTP request.
     *
     * This method processes the request and extracts relevant data based on
     * content type, headers, or other request properties. It should normalize
     * the extracted data into a consistent format for the API to process.
     *
     * @param IlluminateRequest $request The incoming HTTP request to parse
     *
     * @return mixed The parsed data from the request
     *
     * @example
     * // Example implementation:
     * // class JsonParser implements Parser
     * // {
     * //     public function parse(IlluminateRequest $request)
     * //     {
     * //         return json_decode($request->getContent(), true);
     * //     }
     * // }
     */
    public function parse(IlluminateRequest $request);
}
