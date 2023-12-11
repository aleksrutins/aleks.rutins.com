<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class Langley {
    private $langleyUrl = "https://langley.farthergate.com";

    public function getLanguages(string $repo): array {
        return Http::get($this->langleyUrl . '/' . $repo)->json();
    }
}
