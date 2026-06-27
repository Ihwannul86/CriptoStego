<?php

namespace App\Services;

class LSBService
{
    /*
    |--------------------------------------------------------------------------
    | Convert text into binary
    |--------------------------------------------------------------------------
    */
    private function textToBinary($text)
    {
        $binary = '';

        for ($i = 0; $i < strlen($text); $i++) {

            $binary .= str_pad(
                decbin(ord($text[$i])),
                8,
                '0',
                STR_PAD_LEFT
            );
        }

        // end delimiter
        $binary .= '1111111111111110';

        return $binary;
    }


    /*
    |--------------------------------------------------------------------------
    | Convert binary into text
    |--------------------------------------------------------------------------
    */
    private function binaryToText($binary)
    {
        $text = '';

        for ($i = 0; $i < strlen($binary); $i += 8) {

            $byte = substr($binary, $i, 8);

            $text .= chr(
                bindec($byte)
            );
        }

        return $text;
    }


    /*
    |--------------------------------------------------------------------------
    | Embed message into PNG using LSB
    |--------------------------------------------------------------------------
    */
    public function embedMessage(
        $inputImagePath,
        $secretMessage,
        $outputImagePath
    ) {

        $image = imagecreatefrompng($inputImagePath);

        if (!$image) {
            throw new \Exception("PNG image failed to load");
        }

        $width = imagesx($image);
        $height = imagesy($image);

        $binaryMessage = $this->textToBinary(
            $secretMessage
        );

        $messageLength = strlen(
            $binaryMessage
        );

        $binaryIndex = 0;

        for ($y = 0; $y < $height; $y++) {

            for ($x = 0; $x < $width; $x++) {

                if ($binaryIndex >= $messageLength) {
                    break 2;
                }

                $rgb = imagecolorat(
                    $image,
                    $x,
                    $y
                );

                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                $bit = $binaryMessage[
                    $binaryIndex
                ];

                $r = ($r & 0xFE) | $bit;

                $binaryIndex++;

                $newColor = imagecolorallocate(
                    $image,
                    $r,
                    $g,
                    $b
                );

                imagesetpixel(
                    $image,
                    $x,
                    $y,
                    $newColor
                );
            }
        }

        imagepng(
            $image,
            $outputImagePath
        );

        imagedestroy(
            $image
        );

        return true;
    }


    /*
    |--------------------------------------------------------------------------
    | EXTRACT SECRET MESSAGE FROM PNG
    |--------------------------------------------------------------------------
    */
    public function extractMessage($imagePath)
    {
        $image = imagecreatefrompng($imagePath);

        if (!$image) {
            throw new \Exception("Cannot load stego image");
        }

        $width = imagesx($image);
        $height = imagesy($image);

        $binary = '';

        for ($y = 0; $y < $height; $y++) {

            for ($x = 0; $x < $width; $x++) {

                $rgb = imagecolorat(
                    $image,
                    $x,
                    $y
                );

                $r = ($rgb >> 16) & 0xFF;

                // ambil bit terakhir
                $binary .= ($r & 1);

                // cek delimiter akhir
                if (
                    substr(
                        $binary,
                        -16
                    ) === '1111111111111110'
                ) {

                    // hapus delimiter
                    $binary = substr(
                        $binary,
                        0,
                        -16
                    );

                    imagedestroy($image);

                    return $this->binaryToText(
                        $binary
                    );
                }
            }
        }

        imagedestroy($image);

        throw new \Exception(
            "No hidden message found"
        );
    }
}
