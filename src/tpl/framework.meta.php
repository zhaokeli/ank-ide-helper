<?php

namespace PHPSTORM_META {
    override(\ank\App::get(0),         // method signature //argument number is ALWAYS 0 now.
        map([                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //map of argument value -> return type
            //            "log"        => \ank\driver\log\Log::class,
            ""           => "@",
            "cache"      => \ank\Cache::class,
            "console"    => \ank\Console::class,
            'config'     => \ank\Config::class,
            'lang'       => \ank\Lang::class,
            'app'        => \ank\App::class,
            'request'    => \ank\Request::class,
            'route'      => \ank\Route::class,
            'url'        => \ank\Url::class,
            'view'       => \ank\View::class,
            'db'         => \ank\Db::class,
            'cache'      => \ank\Cache::class,
            'cookie'     => \ank\Cookie::class,
            'session'    => \ank\Session::class,
            'log'        => \ank\Log::class,
            'debug'      => \ank\Debug::class,
            'handle'     => \ank\Handle::class,
            'middleware' => \ank\Middleware::class,
            'event'      => \ank\Event::class,
            //Reference target classes by ::class constant
            //            \ExampleFactory::EXAMPLE_B => ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           // FYI, we can now support class constant argument values
            //            \EXAMPLE_B                 => \ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          // and global constants too
            //non mapped value, e.g. $getByClassNameConst case above will be returned automatically
        ]));
    override(app(0),         // method signature //argument number is ALWAYS 0 now.
        map([                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //map of argument value -> return type
            //            "log"        => \ank\driver\log\Log::class,
            ""           => "@",
            "cache"      => \ank\Cache::class,
            "console"    => \ank\Console::class,
            'config'     => \ank\Config::class,
            'lang'       => \ank\Lang::class,
            'app'        => \ank\App::class,
            'request'    => \ank\Request::class,
            'route'      => \ank\Route::class,
            'url'        => \ank\Url::class,
            'view'       => \ank\View::class,
            'db'         => \ank\Db::class,
            'cache'      => \ank\Cache::class,
            'cookie'     => \ank\Cookie::class,
            'session'    => \ank\Session::class,
            'log'        => \ank\Log::class,
            'debug'      => \ank\Debug::class,
            'handle'     => \ank\Handle::class,
            'middleware' => \ank\Middleware::class,
            'event'      => \ank\Event::class,
            //Reference target classes by ::class constant
            //            \ExampleFactory::EXAMPLE_B => ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           // FYI, we can now support class constant argument values
            //            \EXAMPLE_B                 => \ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          // and global constants too
            //non mapped value, e.g. $getByClassNameConst case above will be returned automatically
        ]));
    override(App::make(0),         // method signature //argument number is ALWAYS 0 now.
        map([                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //map of argument value -> return type
            //            "log"        => \ank\driver\log\Log::class,
            ""           => "@",
            "cache"      => \ank\Cache::class,
            "console"    => \ank\Console::class,
            'config'     => \ank\Config::class,
            'lang'       => \ank\Lang::class,
            'app'        => \ank\App::class,
            'request'    => \ank\Request::class,
            'route'      => \ank\Route::class,
            'url'        => \ank\Url::class,
            'view'       => \ank\View::class,
            'db'         => \ank\Db::class,
            'cache'      => \ank\Cache::class,
            'cookie'     => \ank\Cookie::class,
            'session'    => \ank\Session::class,
            'log'        => \ank\Log::class,
            'debug'      => \ank\Debug::class,
            'handle'     => \ank\Handle::class,
            'middleware' => \ank\Middleware::class,
            'event'      => \ank\Event::class,
            //Reference target classes by ::class constant
            //            \ExampleFactory::EXAMPLE_B => ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           // FYI, we can now support class constant argument values
            //            \EXAMPLE_B                 => \ExampleB::class,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          // and global constants too
            //non mapped value, e.g. $getByClassNameConst case above will be returned automatically
        ]));
    override(\ank\facade\Db::table(0), map([
        '' => \ank\Db::class,
    ]));
    override(\ank\Controller::table(0), map([
        '' => \ank\Db::class,
    ]));

}