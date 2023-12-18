<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Barang;
use App\Models\Pegawai;

class GenerateRandomData extends Command
{
    protected $signature = 'generate:random-data';
    protected $description = 'Generate random data for Barang and Pegawai models';

    public function handle()
    {
        $this->info('Generating random data...');

        // Generate random data for Barang
        factory(Barang::class, 25)->create();
        $this->info('Generated random data for Barang model.');

        // Generate random data for Pegawai
        factory(Pegawai::class, 25)->create();
        $this->info('Generated random data for Pegawai model.');

        $this->info('Random data generation complete.');
    }
}
