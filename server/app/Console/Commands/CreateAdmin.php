<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Created new default admin';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);}
}
