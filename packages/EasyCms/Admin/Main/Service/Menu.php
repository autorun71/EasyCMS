<?php


namespace Pkg\EasyCms\Admin\Main\Service;


use Illuminate\Support\Facades\Route;

class Menu
{
    public array $items = [];
    public string $currentKey = '';
    /**
     * @var array
     */
    private array $itemsTmp = [];

    private array $activeRouts = [];

    public function __construct($name)
    {
        $this->setItems(config($name));
        $this->getRouts();
        $this->getChildren();

        $this->test();
    }

    public function setItems($items)
    {

        $this->items = $items;
    }

    public function getItems()
    {

        return $this->items;
    }

    public function getItem($key)
    {
        if (empty($this[$key])) {
            throw new \Exception("Item [{$key}] not found in menu!");
        }

        return $this->items[$key];
    }

    public function getActive($menuItem)
    {
        if (empty($this->activeRouts)) {
            $this->activeRouts = $this->getActiveRouts();
        }
//        echo "<pre>";
//        print_r($this->activeRouts);
//        echo "</pre>";
//
//        echo "<pre>";
//        print_r($menuItem);
//        echo "</pre>";
        if (!empty($this->activeRouts)){
            foreach ($this->activeRouts as $rout){
                if ($rout['key'] == $menuItem['key']){
                    return 'active';
                }
            }
        }

        return false;
    }

    private function getActiveRouts()
    {
        $arKeysTmp = [];
        $activeRouts = [];
        $currentRoute = Route::currentRouteName();
        foreach ($this->itemsTmp as $item) {
            if ($item['route'] == $currentRoute) {
                $arKeysTmp[] = explode('.', $item['key']);
            }
        }

        if (!empty($arKeysTmp)) {
            $count = 0;
            $arKeys = [];
            foreach ($arKeysTmp as $key){
                if (count($key) > $count){
                    $count = count($key);
                    $arKeys = $key;
                }

            }
            $keys = [];
            foreach ($arKeys as $k => $key) {
                if ($k == 0){
                    $keys[$k] = $key;
                    continue;
                }
                $keys[$k] = $keys[$k - 1] . '.' . $key;
            }

            $activeRouts = array_filter($this->itemsTmp, function  ($item) use ($keys) {
                return in_array($item['key'], $keys);
            });

        }
        return $activeRouts;
    }

    private function getRouts()
    {
        foreach ($this->items as $k => $item) {
            if ($item['route'] == Route::currentRouteName()) {
                $this->currentKey = $item['key'];
            }
            $this->items[$k]['url'] = route($item['route'], '');
        }
    }

    private function getChildren()
    {

        $this->items = $this->setTree();

    }

    private function setTree($key = false, $num = 0)
    {
        $num++;
        if (!$key) {
            $this->itemsTmp = $this->items;
        }
        $tree = [];
        foreach ($this->itemsTmp as $k => $value) {
            if (!empty($key)) {
                if (count(explode('.', $value['key'])) == $num && strstr($value['key'], $key . '.')) {
                    $tree[$value['key']] = $value;
                    $tree[$value['key']]['children'] = $this->setTree($value['key'], $num);
                }
            } elseif (count(explode('.', $value['key'])) == 1) {
                $tree[$value['key']] = $value;
                $tree[$value['key']]['children'] = $this->setTree($value['key'], $num);
            }
        }

        return $tree;
    }

    private function getCurrentKey()
    {

    }

    private function test()
    {
//        $keys = explode('.', $this->currentKey);
//        $__currentLoopData = \Illuminate\Support\Arr::get($this->items, current($keys) . '.children');
//        dd($__currentLoopData);
    }
}
