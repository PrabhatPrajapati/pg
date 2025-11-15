<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Home as HomeModel;

#[Layout('components.layouts.app')]
class Home extends Component
{
    public $posts = [];
    public $totalUsers = 0;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $homeModel = new HomeModel();
        $this->posts = $homeModel->getRecentPosts();
        $this->totalUsers = $homeModel->getTotalUsers();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
