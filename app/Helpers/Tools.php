<?php
    namespace App\Helpers;
    use Illuminate\Support\Facades\App;
    use Session;

    Class Tools {

        public $lang = 'en';
        public function __construct()
        {
            if($this->getLanguage()) {
                $this->lang = $this->getLanguage();
            }
        }

        public function setup() {
            $this->setLanguage($this->lang);
        }

        public function getLanguage() {
            return session()->get('lang');
        }

        public function setLanguage($lang) {
            $this->lang = $lang;
            session()->put(['lang'=> $lang]);
            session()->save();
            \Illuminate\Support\Facades\App::setLocale($this->lang);
        }

        public static function instance() {
            return new Tools;
        }
    }
