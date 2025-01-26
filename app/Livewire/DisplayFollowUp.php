<?php

namespace App\Livewire;

use App\Models\Classroom\Classroom;
use App\Models\FollowUpChild;
use App\Traits\QueryTrait;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class DisplayFollowUp extends Component
{
    use WithPagination;
    use QueryTrait;

    public int $classroom_id;
    public bool $isPaginate;
    public function render()
    {
        try {
            $lang = LaravelLocalization::setLocale();
            $classroom = Classroom::findorfail($this->classroom_id);
            $month = Carbon::now()->format('F j');
            $date = Carbon::now()->format('Y-m-d');
            if (strlen($this->search) >= 1) {
                $this->isPaginate = false;
                $followups = FollowUpChild::where('homework', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('bath->en', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('bath->ar', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('snack->en', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('snack->ar', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('food->en', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->orwhere('food->ar', 'like', "%$this->search%")
                    ->where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)
                    ->get();

            } else {
                $this->isPaginate = true;
                $followups = FollowUpChild::where('created_at', 'like', "%$date%")
                    ->where('classroom_id', $this->classroom_id)->orderBy(
                        ($this->orderBy) == 'bath' ? 'bath->' . $lang : $this->orderBy,
                        $this->sortOrder)->paginate($this->pagination);
            }
            return view('teachers-affairs.follow_up_children.display_follow_up_children', [
                'followups' => $followups,
                'classroom' => $classroom,
                'month' => $month,
            ])->title('followup');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
