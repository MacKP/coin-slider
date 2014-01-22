<?php
class CoinSliderRunonceJob extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->import('Database');
    }
    public function run() {
        Database\Updater::convertSingleField('tl_coinPictures', 'singleSRC');
    }
}
$objCoinSliderRunonceJob = new CoinSliderRunonceJob();
$objCoinSliderRunonceJob->run();
?>