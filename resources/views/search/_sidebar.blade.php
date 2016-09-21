<?php
use Illuminate\Support\Facades\Input;
?>

{{
    Form::macro('customLabel', function($for, $value)
    {
    return '<label for="'.$for.'"><span></span>'.$value.'</label>';
    })
}}

@section('sidebar')
    <div class="loader">
        <img src="img/loader.svg">
    </div>

    <h4 class="text-uppercase">Filtruoti</h4>

    {!! Form::open(['url' => URL::current(),'id' => 'filtrai']) !!}
        <div class="filter-group" id="accordion">

            <div class="group">
                <h5 class="text-uppercase">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Spalva <i class="caret"></i></a>
                </h5>

                <div id="collapse1" class="panel-collapse collapse in ">
                    <div class="panel-body">
                        <div class="scrollbar-inner">

                            <?php $color = Input::has('color') ? Input::get('color') : []; ?>

                            {{ Form::checkbox('color[]', 'Balta', in_array('Balta', $color), ['id' => 'c1']) }}
                            {!! Form::customLabel('c1', 'Balta') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Juoda', in_array('Juoda', $color), ['id' => 'c2']) }}
                            {!! Form::customLabel('c2', 'Juoda') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Raudona', in_array('Raudona', $color), ['id' => 'c3']) }}
                            {!! Form::customLabel('c3', 'Raudona') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Geltona', in_array('Geltona', $color), ['id' => 'c4']) }}
                            {!! Form::customLabel('c4', 'Geltona') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Rusva', in_array('Rusva', $color), ['id' => 'c5']) }}
                            {!! Form::customLabel('c5', 'Rusva') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Violetine', in_array('Violetine', $color), ['id' => 'c6']) }}
                            {!! Form::customLabel('c6', 'Violetine') !!}
                            <br>
                            {{ Form::checkbox('color[]', 'Auksine', in_array('Auksine', $color), ['id' => 'c7']) }}
                            {!! Form::customLabel('c7', 'Auksine') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="group">
                <h5 class="text-uppercase">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Forma <i class="caret gly-rotate-270"></i></a>
                </h5>

                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="scrollbar-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>
            </div>

            <div class="group">
                <h5 class="text-uppercase">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Ilgis <i class="caret gly-rotate-270"></i></a>
                </h5>

                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="scrollbar-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                </div>
            </div>

            <div class="group">
                <h5 class="text-uppercase">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Dydis <i class="caret"></i></a>
                </h5>

                <div id="collapse4" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="scrollbar-inner">
                            <?php $color = Input::has('size') ? Input::get('size') : []; ?>
                            <div class="col-xs-6">
                                {{ Form::checkbox('size[]', '6', in_array('Balta', $color), ['id' => 's1']) }}
                                {!! Form::customLabel('s1', '8') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Juoda', in_array('Juoda', $color), ['id' => 's2']) }}
                                {!! Form::customLabel('s2', '10') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Raudona', in_array('Raudona', $color), ['id' => 's3']) }}
                                {!! Form::customLabel('s3', '12') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Geltona', in_array('Geltona', $color), ['id' => 's4']) }}
                                {!! Form::customLabel('s4', '14') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Rusva', in_array('Rusva', $color), ['id' => 's5']) }}
                                {!! Form::customLabel('s5', '16') !!}
                            </div>

                            <div class="col-xs-6">
                                {{ Form::checkbox('size[]', '18', in_array('Balta', $color), ['id' => 's6']) }}
                                {!! Form::customLabel('s6', '18') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Juoda', in_array('Juoda', $color), ['id' => 's7']) }}
                                {!! Form::customLabel('s7', '20') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Raudona', in_array('Raudona', $color), ['id' => 's8']) }}
                                {!! Form::customLabel('s8', '22') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Geltona', in_array('Geltona', $color), ['id' => 's9']) }}
                                {!! Form::customLabel('s9', '24') !!}
                                <br>
                                {{ Form::checkbox('size[]', 'Rusva', in_array('Rusva', $color), ['id' => 's10']) }}
                                {!! Form::customLabel('s10', '26') !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="group">
                <h5 class="text-uppercase">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Kaina <i class="caret"></i></a>
                </h5>

                <div id="collapse5" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="scrollbar-inner">
                            Nuo iki
                        </div>
                    </div>
                </div>
            </div>

        </div>

    {!! Form::close() !!}


@endsection


@section('scripts')
    <script type="text/javascript">
        /*--- Bootstrap collapse ---*/
        $('.collapse').on('hide.bs.collapse', function (e) {
            $(this).parent().find('.caret').removeClass('gly-rotate-0').addClass('gly-rotate-270');
        }).on('show.bs.collapse', function (e) {
            $(this).parent().find('.caret').removeClass('gly-rotate-270').addClass('gly-rotate-0');
        });


        /*--- Ajax filtering ---*/
        function filter(page){
            $('.loader').css({'display' : 'block'});

            if(page == null)
                page = '/';

            $.ajax({
                type: "get",
                url: '/?page='+page,
                data: $('form#filtrai').serialize(),
                success: function( msg ) {
                    setTimeout(function(){
                        $('#results').html(msg);
                        $('.loader').css({'display' : 'none'});
                    }, 200);
                },
                error: function(ts){
                    console.log(ts.responseText);
                }
            });
        }

        $('form#filtrai').change(function(){
            filter();
        });

        $(function(){
            /*--- Scrollbar ini ---*/
            $('.scrollbar-inner').scrollbar();

            if($('input:checked').length > 0)
                filter();

            $(document).on('click', '.pagination a', function (e) {
                filter($(this).attr('href').split('page=')[1]);
                e.preventDefault();
            });
        });
    </script>
@endsection