<?php

namespace App\AppTest;

use PHPUnit\Framework\TestCase;
use App\App;

class AppTest extends TestCase
{
    public function testRun()
    {
        $_SERVER['REQUEST_URI'] = '/test-route';

        $tempDir = sys_get_temp_dir() . '/app_test_' . uniqid();
        mkdir($tempDir, 0777, true); 
        mkdir($tempDir . '/config'); 

        $routeFilePath = $tempDir . '/config/routes.php';
        file_put_contents($routeFilePath, "<?php return ['/test-route' => function() { echo 'Test Route Called'; }];");

        if (!defined('APP_PATH')) {
            define('APP_PATH', $tempDir);
        }

        ob_start();

        $app = new App();
        $app->run();

        $output = ob_get_clean();
        $this->assertEquals('Test Route Called', $output);
    }
}