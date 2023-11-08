<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;
    protected array $symbols = [
        'enable',
        'public',
        'grade',
        'rocket',
        'cookie',
        'thunderstorm',
        'face',
        'skull',
        'home',
        'mode_cool',
        'bedroom_baby',
        'flatware',
        'single_bed',
        'sprinkler',
        'umbrella',
        'token',
        'skillet',
        'stadia_controller',
        'airwave',
        'floor_lamp',
        'close',
        'quiet_time',
        'heat',
        'tools_power_drill',
        'nest_eco_leaf',
        'air_freshener',
        'backspace',
        // 'exlposion',
        'web',
        'interests',
        'rule',
        'bomb',
        'dataset',
        'assistant_direction',
        'eject',
        'heart_minus',
        'tabs',
        'groups',
        'sunny',
        'quiz'
    ];

    #[Computed(persist: true)]
    public function letters(): array
    {
        // dd($this->generateChars());
        shuffle($this->symbols);
        $chars = $this->generateChars();

        return collect($chars)
            ->combine(collect($this->symbols)->take(count($chars)))
            ->toArray();
    }

    public function generateChars(): array
    {
        return collect(range('a', 'z'))
            ->push('0', '1', '2', '3', '4', '5', '6', '7', '8', '9')
            // ->push('ë', 'ç',)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
