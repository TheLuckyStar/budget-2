
<ul class="breadcrumb">

    @foreach ($elements as $action => $title)
        <li>{!! Html::linkAction($action, $title, [], ['class' => 'link-to-page']) !!}</li>
    @endforeach

    <li class="active">{{ $active }}</li>

</ul>
