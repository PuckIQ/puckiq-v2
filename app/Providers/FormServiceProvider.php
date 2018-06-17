<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('bsNumber', 'components.form.number', ['label', 'name', 'value' => null, 'attributes' => []]);
        #Form::component('bsDate', 'components.form.daterange', ['label', 'name1', 'name2', 'value1' => null, 'value2' => null, 'attributes1' => [], 'attributes2' => []]);
        Form::component('bsDate', 'components.form.daterange', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
        Form::component('bsSelect', 'components.form.select', ['label', 'name', 'value' => [], 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
