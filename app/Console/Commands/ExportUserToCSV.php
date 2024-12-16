<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportUserToCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:user-to-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export user to a CSV file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Ambil data dari tabel 'user'
        $users = DB::table('user')->get();

        // Nama file CSV
        $fileName = 'users.csv';

        // Path untuk menyimpan file
        $filePath = storage_path($fileName);

        // Buka file untuk ditulis
        $file = fopen($filePath, 'w');

        // Tambahkan header CSV
        fputcsv($file, ['id', 'nama', 'email', 'password', 'preferensi', 'alergi', 'created_at', 'updated_at']);

        // Tambahkan data dari database
        foreach ($users as $user) {
            fputcsv($file, [
                $user->id,
                $user->nama,
                $user->email,
                $user->password,
                $user->preferensi,
                $user->alergi,
                $user->created_at,
                $user->updated_at,
            ]);
        }

        // Tutup file
        fclose($file);

        $this->info("Data successfully exported to: $filePath");
    }
}
