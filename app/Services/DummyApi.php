<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DummyApi
{
    const BASE_URL = 'https://dummyapi.online/api';

    public function blogs()
    {
        return $this->makeRequest('blogposts');
    }

    public function blog(string $id)
    {
        $endpoint = sprintf('blogposts/%s', $id);
        return $this->makeRequest($endpoint);
    }

    protected function makeRequest(string $endpoint, array $params = [], string $method = 'get'): array
    {
        $url = sprintf('%s/%s', self::BASE_URL, $endpoint);

        try {
            $http = Http::acceptJson()->timeout(10);
            $response = call_user_func_array([$http, $method], [$url, $params]);
            if (!$response->ok()) {
                throw new Exception($response->body(), $response->status());
            }

            return [
                'status' => true,
                'code' => 200,
                'message' => 'OK',
                'data' => $response->json(),
            ];
        } catch (Exception $e) {
            Log::error('DUMMY_API', [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
                'data' => [
                    'url' => $url,
                    'params' => $params,
                ]
            ]);

            return [
                'status' => false,
                'code' => $e->getCode(),
                'message' => 'INTERNAL_SERVER_ERROR',
                'data' => null,
            ];
        }
    }
}
