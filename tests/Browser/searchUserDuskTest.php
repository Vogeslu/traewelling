<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class searchUserDuskTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample() {
        $this->browse(function(Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->type('email', 'gertrud@traewelling.de')
                    ->type('password', 'thisisnotasecurepassword123')
                    ->press('ANMELDEN')
                    ->assertPathIs('/dashboard/global')
                    ->type('searchQuery', 'Gertrud')
                    ->clickAtXPath('/html/body/div[2]/nav/div/div[2]/ul[2]/form/div/div')
                    ->assertPathIs('/search');
        });
    }
}
