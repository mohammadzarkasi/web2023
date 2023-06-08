<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (function_exists('remove_b64_pad') == false) {
            function remove_b64_pad($data)
            {
                $counter = 0;
                while (true) {
                    if (str_ends_with($data, '=') == false) {
                        break;
                    }
                    $counter++;
                    if ($counter > 10) {
                        break;
                    }
                    $data = substr($data, 0, strlen($data) - 1);
                }

                $data = str_replace('+', '-', $data);
                $data = str_replace('/', '_', $data);

                return $data;
            }
        }
        //
        if (function_exists('make_jwt') == false) {
            function make_jwt($payload, $secret, $header = null)
            {
                if ($header == null) {
                    $header = [
                        "alg" => "HS256",
                        "typ" => "JWT"
                    ];
                }

                $header_64 = base64_encode(json_encode($header));
                $payload_64 = base64_encode(json_encode($payload));

                $header_64 = remove_b64_pad($header_64);
                $payload_64 = remove_b64_pad($payload_64);


                $data = $header_64 . '.' . $payload_64;
                $signature = hash_hmac('sha256', $data, $secret);

                $signature = base64_encode(hex2bin($signature));
                $signature = remove_b64_pad($signature);

                return $data . '.' . $signature;
            }
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
