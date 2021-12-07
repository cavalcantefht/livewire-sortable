<div>
    <ul wire:sortable="updateSortable" class="row"
        style="list-style: none; display: flex; justify-content: space-between; padding: 0;">
        @foreach ($data as $key => $item)
            <li wire:sortable.item="{{ $item['id'] }}" wire:key="item-{{ $item['id'] }}" class="col m-2">
                <div wire:sortable.handle class="card mt-1" style="max-width: 18rem;">
                    <div class="card-body text-center">
                        <h6>{{ $item['name'] }}</h6>
                        <p>ID: {{ $item['id'] }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <b>Sequencia:</b>
    @if (isset($sequence) && is_array($sequence))
        @foreach ($sequence as $seq)
            {{ $seq['value'] }}
        @endforeach
    @endif

</div>
