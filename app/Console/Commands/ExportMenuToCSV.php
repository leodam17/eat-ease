<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportMenuToCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:menu-to-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export menu to a CSV file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Ambil data dari tabel 'menu'
        $menus = DB::table('menu')->get();

        // Nama file CSV
        $fileName = 'menu.csv';

        // Path untuk menyimpan file
        $filePath = storage_path($fileName);

        // Buka file untuk ditulis
        $file = fopen($filePath, 'w');

        // Tambahkan header CSV
        fputcsv($file, ['id', 'nama', 'kategori', 'kalori', 'harga', 'popularitas', 'deskripsi', 'waktu_pengerjaan', 'total_pemesanan', 'created_at', 'updated_at']);

        // Tambahkan data dari database
        foreach ($menus as $menu) {
            fputcsv($file, [
                $menu->id,
                $menu->nama,
                $menu->kategori,
                $menu->kalori,
                $menu->harga,
                $menu->popularitas,
                $menu->deskripsi,
                $menu->waktu_pengerjaan,
                $menu->total_pemesanan,
                $menu->created_at,
                $menu->updated_at,
            ]);
        }

        // Tutup file
        fclose($file);

        $this->info("Data successfully exported to: $filePath");
    }
}
