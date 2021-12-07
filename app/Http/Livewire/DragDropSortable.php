<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DragDropSortable extends Component
{
    public $data;

    public $sequence;

    public $url, $token;

    public function mount()
    {

        $this->url = env('API_URL');
        $this->token = env('API_TOKEN');

        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Secret-Token' => $this->token,
        ])->get($this->url . 'medias?limit=7');

        if ($response->successful()) {
            $this->data = $response->json()['results'];
        }

        if ($response->clientError() || $response->serverError()) {
            dd($response->throw());
        }
    }

    public function render()
    {
        return view('livewire.drag-drop-sortable');
    }

    public function updateSortable($a)
    {
        $this->data = $this->reorder($a, $this->data);
        $this->sequence = $a;
    }

    public function reorder($reordered, $existing)
    {
        if (count($reordered) > 0) {
            foreach ($reordered as $order) {
                foreach ($existing as $ex) {
                    if ($ex['id'] == $order['value']) {
                        $new_order[] = $ex;
                    }
                }
            }
            return $new_order;
        } else {
            return $existing;
        }
    }
}
