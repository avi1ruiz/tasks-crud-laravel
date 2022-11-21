<?php

namespace App\View\Components;

use Carbon\Carbon;
use App\Models\Tasks;
use Illuminate\View\Component;

class TasksFormBody extends Component
{
    /**
     * Create a new component instance.
     *
     * @param\App\Model\Tasks $tasks
     * @return void
     */
    public function __construct($tasks = null)
    {
        if (is_null($tasks)) {
            $tasks = Tasks::make([
                'state' => 0,
                'limit' => Carbon::now()
            ]);
        }
        $this->tasks = $tasks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = ['tasks' => $this->tasks];
        return view('components.tasks-form-body', $params);
    }
}
