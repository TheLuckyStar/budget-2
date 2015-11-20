
<div class="col-md-12">
    <ul class="breadcrumb">

        @foreach ($elements as $action => $title)
            <li>
                {!! Html::linkAction(
                    $action,
                    $title,
                    isset($params[$action]) ? $params[$action] : [],
                    ['class' => 'routable', 'data-target' => '#page-wrapper']
                ) !!}
            </li>
        @endforeach

        <li class="active">{!! $active !!}</li>

    </ul>
</div>