@extends(layoutExtend())

@section('title')
     {{ adminTrans('team' , 'team') }} {{ adminTrans('home' , 'control') }}
@endsection

@section('style')
    @include('admin.shared.style')
@endsection

@section('content')
    @include(layoutTable() , ['title' => adminTrans('team' , 'team') , 'model' => 'team' , 'table' => $dataTable->table([] , true) ])
@endsection

@section('script')
    @include('admin.shared.scripts')
@endsection