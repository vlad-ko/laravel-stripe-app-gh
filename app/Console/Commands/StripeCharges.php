<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Stripe;
use App\Services\ChargeParser;

/**
 * Artisan command, which can be used to schedule daily
 * updates. To get Charges from the Stripe API.
 * 
 * Small update to trigger a build
 */
class StripeCharges extends Command
{

    /**
     * ChargeParser service instance
     *
     * @var  object
     */
    protected $chargeParser;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stripe:charges {limit=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all charges from Stripe API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ChargeParser $chargeParser)
    {
        parent::__construct();
        $this->chargeParser = $chargeParser;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $limit = $this->argument('limit');
        // it looks like there are only 36 charges in testing
        // we could optimize this schedule by adjusting the all()
        // method with conditions, like: all(['craeted[gte]' => strtotime(-1 day));
        // if run every 24 hrs this will grab all previous charges for the day
        // would need to ensure there is no overlap.
        $charges = Stripe::charges()->all(['limit' => $limit]);
        $chargesProcessed = $this->chargeParser->process($charges);
        //output processed charges
        $this->info('['. date('Y-m-d H:i:s') . '] - Total records processed: ' . $chargesProcessed);
    }
}
