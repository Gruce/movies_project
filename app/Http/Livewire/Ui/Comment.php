<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Movie;
use Livewire\WithPagination;


class Comment extends Component
{
    use WithPagination;

    public $commentable;
    public $comment;

    public function comment(){
        $this->commentable->comment($this->comment);
        $this->comment = '';
    }

    public function render(){
        $comments = $this->commentable->comments()->orderBy('id', 'desc')->paginate(10);
        return view('livewire.ui.comment', compact('comments'));
    }
}
