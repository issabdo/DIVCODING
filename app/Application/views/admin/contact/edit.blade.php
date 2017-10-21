@extends(layoutExtend())

@section('title')
    {{ adminTrans('contact' , 'contact') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('contact' , 'contact') , 'model' => 'contact' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/contact/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('contact' , 'name') }}</label>
                    <input type="text" name="name" id="name" placeholder="{{ adminTrans('contact' , 'name') }}" class="form-control" value="{{ isset($item) ? $item->name : old('name') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('contact' , 'email') }}</label>
                    <input type="text" name="email" id="email" placeholder="{{ adminTrans('contact' , 'email') }}" class="form-control" value="{{ isset($item) ? $item->email : old('email') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('contact' , 'message') }}</label>
                    <textarea name="message" rows="8" class="form-control">{{ isset($item) ? $item->message : old('message') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('contact' , 'contact') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
