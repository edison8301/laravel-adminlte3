<?php

namespace App\Components;

/*
 * @property \Illuminate\Database\Eloquent\Builder $query
 */

use App\Models\BaseModel;

class GridView
{
    public $query;
    public $limit;
    public $page;
    public $pageSize;
    public $pageTotal;
    public $count;
    public $startNumber;
    public $url;

    public function __construct($params=[])
    {
        foreach($params as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * @return BaseModel[]
     */
    public function get()
    {
        $query = $this->query;
        $query->take($this->pageSize());

        $skip = ($this->page()-1) * $this->pageSize();
        $query->skip($skip);
        return $query->get();
    }

    public function startNumber()
    {
        if($this->startNumber!=null) {
            return $this->startNumber;
        }

        $this->startNumber = ($this->page()-1) * $this->pageSize();
        $this->startNumber++;

        return $this->startNumber;
    }

    public function endNumber()
    {
        $endNumber = $this->startNumber()+$this->pageSize()-1;
        if($endNumber > $this->count()) {
            $endNumber = $this->count();
        }

        return $endNumber;
    }

    public function count()
    {
        if($this->count!=null) {
            return $this->count;
        }

        $this->count = $this->query->count();

        return $this->count;
    }

    public function pageSize()
    {
        if($this->pageSize!=null) {
            return $this->pageSize;
        }

        $this->pageSize = 10;
        return $this->pageSize;
    }

    public function pageTotal()
    {
        if($this->pageTotal != null) {
            return $this->pageTotal;
        }

        $this->pageTotal = ceil($this->count() / $this->pageSize());

        if($this->pageTotal==0) {
            $this->pageTotal = 1;
        }

        return $this->pageTotal;

    }

    public function pageNav()
    {
        $output = '';

        $li = '';
        for($i=1;$i<=$this->pageTotal();$i++) {
            $a = Html::a($i,[$this->url,'page'=>$i],['class'=>'page-link']);

            if($this->page()==$i) {
                $li .= Html::li($a,['class'=>'page-item active']);
            } else {
                $li .= Html::li($a,['class'=>'page-item']);
            }
        }

        $ul = Html::ul($li,['class'=>'pagination']);

        return $ul;

    }

    public function page()
    {
        if($this->page==null) {
            $this->page = 1;
        }

        if($this->page <= $this->pageTotal()) {
            return $this->page;
        }

        $this->page = $this->pageTotal();

        return $this->page;
    }

    public function pageDisplay()
    {
        $output = 'Menampilkan ';
        $output .= '<span style="font-weight:bold">';
        $output .= $this->startNumber().' - '.$this->endNumber();
        $output .= '</span>';
        $output .= ' dari ';
        $output .= '<span style="font-weight:bold">'.$this->count().'</span> item';

        return $output;
    }
}
