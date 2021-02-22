<?php

namespace App\Providers;

use App\Algorithms\Genetic\Chromosome;
use App\Algorithms\Genetic\ChromosomeImpl;
use App\Algorithms\Genetic\Gene;
use App\Algorithms\Genetic\GeneImpl;
use App\Algorithms\Genetic\GeneticAlgorithm;
use App\Algorithms\Genetic\GeneticAlgorithmImpl;
use App\Algorithms\Genetic\Population;
use App\Algorithms\Genetic\PopulationImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Gene::class, GeneImpl::class);
        $this->app->bind(Chromosome::class, ChromosomeImpl::class);
        $this->app->bind(Population::class, PopulationImpl::class);
        $this->app->bind(GeneticAlgorithm::class, GeneticAlgorithmImpl::class);
    }
}
