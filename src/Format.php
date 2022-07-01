<?php

namespace Antare74\ResponseFormatter;

/**
 * Format response.
 */
class Format
{
    /**
     * API Response
     *
     * @var array
     */
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null,
            'is_paginated' => false,
        ],
        'pagination' => [
        ],
        'data' => null,
    ];

    /**
     * Give success response.
     */
    public static function success($data = null, $message = null, bool $isPaginate = false)
    {
        self::$response['meta']['message'] = $message;
        self::$response['meta']['is_paginated'] = $isPaginate;
        self::$response['data'] = $data;
        if ($isPaginate) {
            self::$response['pagination'] = [
                'total_data' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem(),
                'next_page_url' => $data->nextPageUrl(),
            ];
        }
        return response()->json(self::$response, self::$response['meta']['code']);
    }

    /**
     * Give error response.
     */
    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;
        if (!self::$response['meta']['is_paginated']) {
            unset(self::$response['pagination']);
        }
        return response()->json(self::$response, $code);
        return response()->json(self::$response, self::$response['meta']['code']);
    }
}
