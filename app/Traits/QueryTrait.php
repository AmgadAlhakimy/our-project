<?php


namespace App\Traits;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

trait QueryTrait
{
    public string $sortOrder = 'asc';
    public bool $arrow = false;
    public string $showArrow = 'id';
    public int $pagination = 5;


    public string $search = '';
    public string $orderBy = 'id';

    public bool $isPaginate;
    public function queryData($myModel,$myQuery)
    {
        $lang = LaravelLocalization::setLocale();
        if (strlen($this->search) >= 1) {
            $this->isPaginate = false;
            $data = $myQuery;
        } else {
            $this->isPaginate = true;
            $data = $myModel::orderBy(
                ($this->orderBy) == 'name' ? 'name->' . $lang : $this->orderBy,
                $this->sortOrder)->paginate($this->pagination);
        }

        return $data;
    }

    public function ordering($item): void
    {
        $this->showArrow = $item;
        if ($this->orderBy == $item) {
            $this->sortOrder = $this->sortOrder === 'asc' ? 'desc' : 'asc';
            $this->arrow = !$this->arrow;
        }
        $this->orderBy = $item;
    }

}
