<?

namespace Nsm\Hakim;
use Illuminate\Support\ServiceProvider;
use Tests\Services\TestService;

class MethodCacheServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
         $this->app->beforeResolving(function($abstract,$app){
            if($abstract !== TestService::class)
            {
                return;
            }
         app()->bind(TestService::class,fn() =>new class{});
    });
    }
   
}

/**
 * Bootstrap any package services.
 */
// public function boot(): void
// {
//     $this->publishes([
//         __DIR__.'/../config/courier.php' => config_path('courier.php'),
//     ]);
// }