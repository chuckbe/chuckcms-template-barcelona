<?php

namespace Chuckbe\ChuckcmsTemplateBarcelona\Commands;

use Chuckbe\ChuckcmsTemplateBarcelona\seeds\ChuckcmsTemplateBarcelonaTableSeeder;
use Illuminate\Console\Command;

class PublishBarcelona extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-barcelona:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Barcelona template for ChuckCMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateBarcelonaTableSeeder();
        $seeder->run();
        
        $this->info('Just a moment... ChuckCMS is generating your template.');

        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('.... BARCELONA ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info('.         .');
        $this->info('..         ..');
        $this->info('...         ...');
        $this->info('....   NOW   ....');
        $this->info('...         ...');
        $this->info('..         ..');
        $this->info('.         .');
        $this->info(' ');
        $this->info('ChuckCMS Template Barcelona published successfully');
        $this->info(' ');
        

        
    }
}
