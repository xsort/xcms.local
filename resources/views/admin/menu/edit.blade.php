@extends('admin.body')
@section('title', 'Меню')


@section('centerbox')
    <div class="page-header">
<<<<<<< HEAD
        <h1> <a href="{{ route('admin.menu', $product->id) }}">Меню</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование продукции для {{ $product->name }}</small> </h1>
=======
        <h1> <a href="{{ route('admin.menu', $product->id) }}">Меню</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование меню для {{ $product->name }}</small> </h1>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => route('admin.menu.store', $product->id), 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => route('admin.menu.update', $data->id), 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif
    
    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>

            <div class="col-sm-2 ">
                <label>
                    {{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace']) }}
                    <span class="lbl"> На главную меню</span>
                </label>
            </div>

            <div class="col-sm-4">
                <div class="profile-contact-info">
                    <div class="profile-links align-left">
                        
                        @if (isset($data))
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa- bigger-120 green"></i>
                            ID: {{ $data->id }}
                        </div>
                        
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa-calendar bigger-120 green"></i>
                             Изменен: {{ $data->updated_at }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.form-actions -->

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
            
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" id="mydate" class="form-control date-picker"
                               data-date-format="yyyy-mm-dd"
                               value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                {{ Form::label('category_id', 'Категория', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9">
<<<<<<< HEAD
                    <select name="category_id" class="col-sm-11 chosencat">
                        <option value="0">---нет категории---</option>
                        @foreach($categories as $cat)
                            @if( count($cat->children) > 0 )
                                <optgroup label="{{ $cat->name }}">
                                    @foreach($cat->children as $child)
                                        <option value="{{ $child->id }}"
                                                @if(isset($data->category_id) && $data->category_id == $child->id)selected @endif>
                                            {{ $child->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @else
                                <option value="{{ $cat->id }}"
                                        @if(isset($data->category_id) && $data->category_id == $cat->id)selected @endif>
                                    {{ $cat->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
=======
                    {{ Form::select('category_id', array("0" => "Нет родителя") + $categories, (isset($data->category_id) ? $data->category_id : 0), ['class'=>'col-sm-11']) }}
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Цена', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('price', (isset($data->price) ? $data->price : old('price')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <hr>
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
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>
                   <div class="tab-pane" id="descRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>
                   <div class="tab-pane" id="descEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => uniqid('id'))) }}
                   </div>

                 </div>

                </div>
             </div>

            @include('admin.partials.meta')

            @include('admin.partials.photos', ['table' => 'menu_products', 'table_id' => isset($data->id) ? $data->id : 0])

        </div>

</div>

<div class="form-actions">
{{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
</div>

{{ Form::close() }}
@endsection


@section('scripts')

@include('admin.partials.ckeditor')

@include('admin.partials.slug',['input_name'=>'name[ru]'])

@include('admin.partials.datepicker')

<<<<<<< HEAD
@include('admin.partials.chosen')

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
@endsection