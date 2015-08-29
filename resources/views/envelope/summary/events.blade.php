<div class="panel panel-default">
    <div class="panel-heading text-right">
        <i class="fa fa-fw fa-history pull-left"></i>
        @lang('event.title')
    </div>
    <ul class="list-group">
        @foreach($events as $event)
            <li class="list-group-item small {{ $event->user_id !== Auth::user()->id ? 'active' : '' }}">
                {!! $event !!}
            </li>
        @endforeach
    </ul>
    @if ($events->hasPages())
        <div class="routable panel-footer text-right" data-target='#envelope-summary-events'>
            {!! $events->render() !!}
        </div>
    @endif
</div>
