<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportOrderToCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:order-to-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export order to a CSV file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Ambil data dari tabel 'order'
        $orders = DB::table('order')->get();

        // Nama file CSV
        $fileName = 'orders.csv';

        // Path untuk menyimpan file
        $filePath = storage_path($fileName);

        // Buka file untuk ditulis
        $file = fopen($filePath, 'w');

        // Tambahkan header secara manual
        fwrite($file, "id,user id,nama pesanan,status pesanan,created_at,updated_at\n");

        // Tambahkan data dari database secara manual
        foreach ($orders as $order) {
            $row = implode(',', [
                $order->id,
                $order->user_id,
                $order->nama_pesanan,
                $order->status_pesanan,
                $order->created_at,
                $order->updated_at,
            ]);

            fwrite($file, $row . "\n");
        }

        // Tutup file
        fclose($file);

        $this->info("Data successfully exported to: $filePath");
    }
}
