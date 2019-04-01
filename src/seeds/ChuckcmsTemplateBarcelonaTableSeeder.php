<?php

namespace Chuckbe\ChuckcmsTemplateBarcelona\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateBarcelonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateStarter\\seeds\\ChuckcmsTemplateStarterTableSeeder
        $fonts = [];
        $fonts['lato'] = 'Lato:100,200,300,400,500,600,700,800,900';
        $fonts['iconsmind'] = 'chuckbe/chuckcms-template-barcelona/fonts/iconsmind.woff';
        $fonts['socicon'] = 'chuckbe/chuckcms-template-barcelona/fonts/socicon.woff';
        $fonts['stack-interface'] = 'chuckbe/chuckcms-template-barcelona/fonts/stack-interface.woff';
        
        
        $css = [];
        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-barcelona/css/bootstrap.css';
        $css['bootstrap']['asset'] = 'true'; 
        
        $css['custom']['href'] = 'chuckbe/chuckcms-template-barcelona/css/custom.css';
        $css['custom']['asset'] = 'true';
        
        $css['flickity']['href'] = 'chuckbe/chuckcms-template-barcelona/css/flickity.css';
        $css['flickity']['asset'] = 'true';
        
        $css['flickity']['href'] = 'chuckbe/chuckcms-template-barcelona/css/flickity.css';
        $css['flickity']['asset'] = 'true';
        
        $css['font-frankruhl-firasans']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-frankruhl-firasans.css';
        $css['font-frankruhl-firasans']['asset'] = 'true';
        
        $css['font-karla']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-karla.css';
        $css['font-karla']['asset'] = 'true';
        
        $css['font-merriweather-ptsans']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-merriweather-ptsans.css';
        $css['font-merriweather-ptsans']['asset'] = 'true';
        
        $css['font-raleway']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-raleway.css';
        $css['font-raleway']['asset'] = 'true';
        
        $css['font-roboto']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-roboto.css';
        $css['font-roboto']['asset'] = 'true';
        
        $css['font-robotoslab']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-robotoslab.css';
        $css['font-robotoslab']['asset'] = 'true';
        
        $css['font-rubiklato']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-rubiklato.css';
        $css['font-rubiklato']['asset'] = 'true';
        
        $css['font-sourcesanspro']['href'] = 'chuckbe/chuckcms-template-barcelona/css/font-sourcesanspro.css';
        $css['font-sourcesanspro']['asset'] = 'true';
        
        $css['iconsmind']['href'] = 'chuckbe/chuckcms-template-barcelona/css/iconsmind.css';
        $css['iconsmind']['asset'] = 'true';
        
        $css['jquery.steps']['href'] = 'chuckbe/chuckcms-template-barcelona/css/jquery.steps.css';
        $css['jquery.steps']['asset'] = 'true';
        
        $css['lightbox.min']['href'] = 'chuckbe/chuckcms-template-barcelona/css/lightbox.min.css';
        $css['lightbox.min']['asset'] = 'true';
        
        $css['socicon']['href'] = 'chuckbe/chuckcms-template-barcelona/css/socicon.css';
        $css['socicon']['asset'] = 'true';
        
        $css['stack-interface']['href'] = 'chuckbe/chuckcms-template-barcelona/css/stack-interface.css';
        $css['stack-interface']['asset'] = 'true';
        
        $css['theme-aqua']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-aqua.css';
        $css['theme-aqua']['asset'] = 'true';
        
        $css['theme-cedar']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-cedar.css';
        $css['theme-cedar']['asset'] = 'true';
        
        $css['theme-charcoal']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-charcoal.css';
        $css['theme-charcoal']['asset'] = 'true';
        
        $css['theme-greensea']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-greensea.css';
        $css['theme-greensea']['asset'] = 'true';
        
        $css['theme-red']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-red.css';
        $css['theme-red']['asset'] = 'true';
        
        $css['theme-rtl']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-rtl.css';
        $css['theme-rtl']['asset'] = 'true';
        
        $css['theme-serpent']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-serpent.css';
        $css['theme-serpent']['asset'] = 'true';
        
        $css['theme-tangerine']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-tangerine.css';
        $css['theme-tangerine']['asset'] = 'true';
        
        $css['theme-yeller']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme-yeller.css';
        $css['theme-yeller']['asset'] = 'true';
        
        $css['theme']['href'] = 'chuckbe/chuckcms-template-barcelona/css/theme.css';
        $css['theme']['asset'] = 'true';
        
        
        $js = []; 
        
        
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-barcelona/js/jquery-3.1.1.min.js';
        $js['jquery']['asset'] = 'true';
        
        $js['jquery-steps']['href'] = 'chuckbe/chuckcms-template-barcelona/js/jquery.steps.min.js';
        $js['jquery-steps']['asset'] = 'true';
        
        $js['isotope']['href'] = 'chuckbe/chuckcms-template-barcelona/js/isotope.min.js';
        $js['isotope']['asset'] = 'true';
        
        $js['countdown.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/countdown.min.js';
        $js['countdown.min']['asset'] = 'true';
        
        $js['easypiechart.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/easypiechart.min.js';
        $js['easypiechart.min']['asset'] = 'true';
        
        $js['flickity.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/flickity.min.js';
        $js['flickity.min']['asset'] = 'true';
        
        $js['granim.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/granim.min.js';
        $js['granim.min']['asset'] = 'true';
        
        $js['lightbox.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/lightbox.min.js';
        $js['lightbox.min']['asset'] = 'true';
        
        $js['parallax']['href'] = 'chuckbe/chuckcms-template-barcelona/js/parallax.js';
        $js['parallax']['asset'] = 'true';
        
        $js['scripts']['href'] = 'chuckbe/chuckcms-template-barcelona/js/scripts.js';
        $js['scripts']['asset'] = 'true';
        
        $js['smooth-scroll.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/smooth-scroll.min.js';
        $js['smooth-scroll.min']['asset'] = 'true';
        
        $js['spectragram.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/spectragram.min.js';
        $js['spectragram.min']['asset'] = 'true';
        
        $js['twitterfetcher.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/twitterfetcher.min.js';
        $js['twitterfetcher.min']['asset'] = 'true';
        
        $js['typed.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/typed.min.js';
        $js['typed.min']['asset'] = 'true';
        
        $js['ytplayer.min']['href'] = 'chuckbe/chuckcms-template-barcelona/js/ytplayer.min.js';
        $js['ytplayer.min']['asset'] = 'true';
        
  
        

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-barcelona'],
            ['name' => 'ChuckCMS Template Barcelona',
            'hintpath' => 'chuckcms-template-barcelona',
            'path' => 'chuckbe/chuckcms-template-barcelona',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1]
        );
    }
}
