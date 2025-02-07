<?php

namespace App\Livewire\FollowUp;

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
    public string $date;

    public function mount()
    {
        if (!auth()->check() || !auth()->user()->hasPermissionTo('display followup notebook')) {
            return redirect()->route('dashboard')->with('error', 'auth.unauthorized access');
        }
    }
    public function render()
    {
        try {

            $month = Carbon::now()->format('F j');
            $this->date = Carbon::now()->format('Y-m-d');
            $lang = LaravelLocalization::setLocale();
            $classroom = Classroom::findorfail($this->classroom_id);
            if (strlen($this->search) >= 1) {
                $this->isPaginate = false;
                $followups = FollowUpChild::where('classroom_id', $this->classroom_id)
                    ->where(function ($query) {
                        $query->where('created_at', 'like', "%$this->date%")
                            ->where(function ($subQuery) {
                                $subQuery->where('homework', 'like', "%$this->search%")
                                    ->orWhere('bath->en', 'like', "%$this->search%")
                                    ->orWhere('bath->ar', 'like', "%$this->search%")
                                    ->orWhere('snack->en', 'like', "%$this->search%")
                                    ->orWhere('snack->ar', 'like', "%$this->search%")
                                    ->orWhere('food->en', 'like', "%$this->search%")
                                    ->orWhere('food->ar', 'like', "%$this->search%");
                            });
                    })
                    ->orWhereHas('student', function ($query) {
                        $query->where('classroom_id', $this->classroom_id)
                            ->where('created_at', 'like', "%$this->date%")
                            ->where(function ($subQuery) {
                                $subQuery->where('name->en', 'like', "%$this->search%")
                                    ->orWhere('name->ar', 'like', "%$this->search%");
                            });
                    })
                    ->get();

            } else {
                $this->isPaginate = true;
                $followups = FollowUpChild::where('created_at', 'like', "%$this->date%")
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
