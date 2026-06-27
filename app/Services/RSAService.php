<?php

namespace App\Services;

class RSAService
{
    /*
    |--------------------------------------------------------------------------
    | RSA PUBLIC KEY
    |--------------------------------------------------------------------------
    */
    private $publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2086YlpUGcQBq2UB/yzA
Ani9ckirgXamMndAx1Y3G+vV6rVhTBZTa79zkJdYkxuBFbJT/XnOVxJMvU7WOU6f
LyB/Vj4kynMeZ+sy/dcLHqGh5ix4jPhFD/F1fcRnqpH0I1Tg2ir5IDPN089h/OgN
wuPftah0S3j0GWYfgQglycZHW4R+i1cJSSIWBPYYxtHuVtKuLlF3xDiYZ4qsO47K
6thEUlPck2rJ5fWjaiTvHnrBWYYhWV8MiFob4RYFetG4jfzYgESHJrbU9iKHB8mB
S25ji2LkD/KAq8qa1cTce2eEFCuS6sAjU3Abb5lqGp8hyKjrR0DmcTdU4l2/RzUv
sQIDAQAB
-----END PUBLIC KEY-----
EOD;


    /*
    |--------------------------------------------------------------------------
    | RSA PRIVATE KEY
    |--------------------------------------------------------------------------
    */
    private $privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEpQIBAAKCAQEA2086YlpUGcQBq2UB/yzAAni9ckirgXamMndAx1Y3G+vV6rVh
TBZTa79zkJdYkxuBFbJT/XnOVxJMvU7WOU6fLyB/Vj4kynMeZ+sy/dcLHqGh5ix4
jPhFD/F1fcRnqpH0I1Tg2ir5IDPN089h/OgNwuPftah0S3j0GWYfgQglycZHW4R+
i1cJSSIWBPYYxtHuVtKuLlF3xDiYZ4qsO47K6thEUlPck2rJ5fWjaiTvHnrBWYYh
WV8MiFob4RYFetG4jfzYgESHJrbU9iKHB8mBS25ji2LkD/KAq8qa1cTce2eEFCuS
6sAjU3Abb5lqGp8hyKjrR0DmcTdU4l2/RzUvsQIDAQABAoIBAQCsENZS8mIHsSRK
MD7H0Xl4tviUYPXG5qtw7uWxQDCOxJMaymJjSyT6ZcSrDkOdb7fwqPCC8H13DVGO
OfuUDN6SICIoLSu6d2XEzOE+DemYh+I5cGzI1cWBw8WV/nIDfu4YhnDAW3UI0fxM
kepkfkDFxvnvUhKkYGrMPra7CwRy8J2eIZ8Ah5+TPoVi5PReiKg8kN+D/y3J3JZ5
4UPeB8J5HWCkt6COafkr2346zSom7VkQrUuk+uDgPqQDJuwXXbkCpVZFiTAXSAgz
gJK9Fbjay4uxsoGW2I4jAnqCgHe/3rRuzg80/xH3LaunMq1I8K/j6Kdk4SFDqkM1
oTIw4YfRAoGBAO1cxamUOxCbmLYSyu9u304ltwKDgjZq5jFcoU1EuGzWKJRjikSo
HTT7utC7zY0Q0EAB3L+vALnbab5SwFXEhD0nNyJseSS9zd3e4YNDS8jWrtOXABDl
4pEkeHI8vKK9LNVzwRcn2JeFbcNYd+MX3nL+7ui5qQocMo68SHNk2uX1AoGBAOyH
kvBglHr8dWRhQv+Lff2kGH+tEQPbUu222PPTdKDH+FzSoa2EPcGniWbEIZQRqVSP
EV6/Icws2/OUkDrQ0LBeON58MM1vRvSsasUY6aYxC754LmmhA0KM9/yXUxWIAkWb
t/T+Fb+pYzsD77kWpdBETfh39AF9O+dh1KJHfdFNAoGBAOJ6lo+LxB/AlyGDJOb4
X1FtYwWe/Wt27FVFERNs8pvGa8nKgG+qCNQ5LLNlvmdPF6U7Iao0DPlJhcf3pVUw
wQyokk7iOWT5RajhtUNNvs3PKdjyRznYXyomJla55TNSVakFXcP+XQeWZHjzvNCO
Qc5vuP2NyODAruzKckbIgKTRAoGAYR0Y+5Dr5cMZ/+jfNUT0qdtiI6nPPqIiXm+g
jBvZ2tm/43yn3TJamNRM2eDVWJIX0BwdqaUYH1ibxlrNDRkHViKZft/GudJic7sG
633bEN06US3PAJeXWw++EfufpUt+g034LaLVEyhdEbIADyJ5WhVxXf8CNEpS+iF0
yFxKEFECgYEAk+EilCX5N2FAYfhJ58t9TRShMLl4iuCBj3HbQ71bSkNH3uDiwKcv
r8V57RSTIO+vZV2tSwY5ag+3jt7wd02m1h6CJj+pQvtJRj3OBRQpc2HAvvuqOd8F
r3XPSi2IakpgNbOHIabaPURKKwHGv3d62MrQgVd8qXfXMbnbRoxG4rQ=
-----END RSA PRIVATE KEY-----
EOD;


    public function getPublicKey()
    {
        return $this->publicKey;
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    public function encryptAESKey($aesKey)
    {
        $encrypted = null;

        $success = openssl_public_encrypt(
            $aesKey,
            $encrypted,
            $this->publicKey
        );

        if (!$success) {
            throw new \Exception("RSA Encryption Failed");
        }

        return base64_encode($encrypted);
    }

    public function decryptAESKey($encryptedAESKey)
    {
        $decrypted = null;

        $success = openssl_private_decrypt(
            base64_decode($encryptedAESKey),
            $decrypted,
            $this->privateKey
        );

        if (!$success) {
            throw new \Exception("RSA Decryption Failed");
        }

        return $decrypted;
    }
}
