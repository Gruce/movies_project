<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Collaboration;

class Comment extends Component
{
    use WithPagination;

    public $commentable, $comment, $collaboration;


    public function mount($room = null)
    {
        if ($room)
            $this->collaboration = Collaboration::where('room', $room)->first();
    }

    public function comment()
    {
        $this->commentable->comment($this->comment, $this->collaboration);
        $this->comment = '';
    }

    public function render()
    {
        $comments = $this->commentable->comments();
        
        if ($this->collaboration)
            $comments = $comments->where('collaboration_id', $this->collaboration->id);
        else
            $comments = $comments->whereNull('collaboration_id');

        $comments = $comments->orderBy('id', 'desc')->paginate(10);
        return view('livewire.ui.comment', compact('comments'));
    }
}
