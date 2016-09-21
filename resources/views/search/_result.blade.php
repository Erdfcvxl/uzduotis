<div class="loader">
    <img src="img/loader.svg">
</div>

<div class="text-center" style="clear: both;">
    {!! $items->links() !!}
</div>

<?php $count = 1; ?>
@foreach($items as $item)
    @if($count == 1)
        <div class="items">
    @endif

    @include('search._item', ['item' => $item, 'count' => $count])

    @if($count == 4)
        <?php $count = 1; ?>
        </div>
    @else
        <?php $count++; ?>
    @endif
@endforeach



<div class="text-center" style="clear: both;">
    {!! $items->links() !!}
</div>