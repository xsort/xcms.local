@extends('admin.common.list',
    [
        'title'       =>  'Новости',
        'desc'        =>  'Список новостей сайта',
        'model'       =>  'news',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data,
        'modalbox'    =>  true
    ]
)

@section('scripts')

    @include('admin.common.modals')

    @include('admin.partials.ckeditor')

<<<<<<< HEAD
    <script>
        function modalSuccessSubmit(data){
            location.reload();
            /*
            var $tr = $("#dynamic-table input[data-id='" + data.id + "']").closest('tr');
            if ($tr.length > 0){
                $tr.find('a.modalbox').first().text(data.name);
            }
            */
        }
    </script>

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
@stop
