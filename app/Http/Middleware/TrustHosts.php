<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 57108d3 (Pertemuan 13)
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
