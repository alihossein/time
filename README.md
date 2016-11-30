
package's home : [alihossein/time](http://alihossein.ir/courses/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B3%D8%A7%D8%AE%D8%AA-%D9%BE%DA%A9%DB%8C%D8%AC-%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84) 

This package belong to Course ["How to create a Laravel 5.3 package"](http://alihossein.ir/courses/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%B3%D8%A7%D8%AE%D8%AA-%D9%BE%DA%A9%DB%8C%D8%AC-%D9%84%D8%A7%D8%B1%D8%A7%D9%88%D9%84) 
 


----------


**Installation**:

Run below statements on your terminal :

STEP 1 : 

    composer require "alihossein/time":"dev-master"
    
STEP 2 : Add `provider` and `facade` in config/app.php

    'providers' => [
      ...
      \Alihossein\Time\TimeServiceProvider::class, // <-- add this line at the end of provider array
    ],


    'aliases' => [
      ...
      'MyTimerFacade'=>\Alihossein\Time\Facade\TimerFacade::class, // <-- add this line at the end of aliases array
    ]

Step 3:  

    php artisan vendor:publish

Step 4: 

    php artisan migrate


Configuration file is placed in config/MyConfig.php , open it and enter your Timezone:
