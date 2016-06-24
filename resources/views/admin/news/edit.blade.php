@extends('admin.body')
@section('title', 'Новости')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/news') }}">Новости</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование новости </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/news', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/news/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif
            <!--<div class="form-group col-xs-12">
        <button id="submit_button1" type="submit" class="btn  btn-success" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
    </div>-->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name[ru]', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[ro]', 'Заголовок рум', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[en]', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('categories', 'Теги', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    <select multiple data-placeholder="выберите категорию" id="chosencat" name="chosencat[]" class="tag-input-style col-xs-12">
                        @foreach($tags as $tag)
                        <option value="{{$tag['id']}}" @if (isset($data) && (in_array($tag->id, $data->getTagsIdsArray()))) selected="selected" @endif>
                            {{ $tag->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" id="mydate" class="form-control date-picker"
                               data-date-format="dd-mm-yyyy"
                               value="{{ (isset($data->created_at) ? $data->created_at : old('date', Date::now()->format('d-m-Y'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>
                </div>
            </div>
            @if (isset($data->updated_at))
                <div class="form-group">
                    <label class="col-sm-6 control-label no-padding-right"> Изменен: {{ $data->updated_at }}</label>
                </div>
            @endif
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#photos" data-toggle="tab">Фото</a>
            </li>
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="ru">

                <div class="tabbable  tabs-left">

                 <ul id="myTab" class="nav nav-tabs">
                   <li class="active">
                      <a href="#descRu" data-toggle="tab">Описание на русском</a>
                   </li>
                   <li>
                      <a href="#descRo" data-toggle="tab">Описание на румынском</a>
                   </li>
                   <li>
                      <a href="#descEn" data-toggle="tab">Описание на английском</a>
                   </li>
                 </ul>

                 <div class="tab-content">
                   <div class="tab-pane in active" id="descRu">
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>

                 </div>

                </div>
             </div>

            @include('admin.partials.meta')
            @include('admin.partials.photos', ['table' => 'news', 'table_id' => isset($data->id) ? $data->id : 0])
        </div>

</div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}
@endsection

@section('styles')
    {!! HTML::style('ace/assets/css/datepicker.css') !!}
    {!! HTML::style('ace/assets/css/chosen.css') !!}
@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.slug',['input_name'=>'name'])

    {!! HTML::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}
    <script type="text/javascript">
        jQuery(function($) {
            var mydate = $('#mydate')[0];
            if(mydate.type !== 'date') {//if browser doesn't support "date" input
                $(mydate).datepicker({
                    weekStart: 1,
                    autoclose:true,
                    language: 'ru'
                })
            }
        })
    </script>

    {!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
    <script>
        $("#chosencat").chosen();
    </script>
     <script>

        $(document).ready(function(){
         initSEFonEnter();   
        });

        transliterate = (
        function() {
            var
                rus = "щ   ш  ч  ц  ю  я  ё  ж  ъ  ы  э  а б в г д е з и й к л м н о п р с т у ф х ь".split(/ +/g),
                eng = "shh sh ch cz yu ya yo zh i  y  e  a b v g d e z i j k l m n o p r s t u f x i".split(/ +/g)
            ;
            return function(text, engToRus) {
                var x;
                for(x = 0; x < rus.length; x++) {
                    text = text.split(engToRus ? eng[x] : rus[x]).join(engToRus ? rus[x] : eng[x]);
                    text = text.split(engToRus ? eng[x].toUpperCase() : rus[x].toUpperCase()).join(engToRus ? rus[x].toUpperCase() : eng[x].toUpperCase());
                }
                text = text.toLowerCase().replace(/[^a-zA-Z ]/g, "").split(' ').join('-');
                return text;
            }
        }
    )();

    function initSEFonEnter(){
        $("input.name_ru").keyup(function() {
            var a = $(this).val();
            var b = transliterate(a);
            $("input[name=slug]").val(b);
        });
    }

    </script>
@endsection