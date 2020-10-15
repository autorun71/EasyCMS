<?php


namespace Pkg\EasyCms\Admin\Main\Models;


use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $table = "main";

    public function locale()
    {
        return $this->hasOne(Locale::class, 'id');
    }

    public function getTitleAttribute() {
        return str_replace('#SITE_NAME#', $this->site_name, $this->title_tmp);
    }

    public function getDescriptionAttribute() {
        return str_replace('#SITE_NAME#', $this->site_name, $this->description_tmp);
    }

}
