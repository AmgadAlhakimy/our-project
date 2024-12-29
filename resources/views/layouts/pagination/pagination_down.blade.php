

        <div class="small text-muted rows_2 num_rows ">
            @if($isPaginate)
                <label class=""> {{__('public.number of rows:')}} </label>
                <select class=" num_rows" wire:model.live="pagination">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            @endif
        </div>






