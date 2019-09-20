<div class="uk-child-width-1-3@s" uk-grid>
    @foreach ($items as $item)
    <div>
        <div class="uk-card uk-card-default uk-card-small uk-card-body">
        <h3 class="uk-card-title">{{$item->name}}</h3>
        <p>{{$item->body}}</p>
        </div>
    </div>
    @endforeach
</div>

{{-- just add bellow code for enable pagatination uikit --}}
@include('uikit_pagination', ['paginator' => $items])
