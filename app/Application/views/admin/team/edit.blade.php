@extends(layoutExtend())

@section('title')
    {{ adminTrans('team' , 'team') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('team' , 'team') , 'model' => 'team' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/team/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'name') }}</label>
                    <input type="text" name="name" id="name" placeholder="{{ adminTrans('contact' , 'name') }}" class="form-control" value="{{ isset($item) ? $item->name : old('name') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'email') }}</label>
                    <input type="text" name="email" id="email" placeholder="{{ adminTrans('website' , 'email') }}" class="form-control" value="{{ isset($item) ? $item->email : old('email') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'fb') }}</label>
                    <input type="text" name="fb" id="fb" placeholder="{{ adminTrans('website' , 'fb') }}" class="form-control" value="{{ isset($item) ? $item->fb : old('fb') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'linkedin') }}</label>
                    <input type="text" name="linkedin" id="linkedin" placeholder="{{ adminTrans('website' , 'linkedin') }}" class="form-control" value="{{ isset($item) ? $item->linkedin : old('linkedin') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'profile') }}</label>
                    <input type="text" name="profile" id="profile" placeholder="{{ adminTrans('website' , 'profile') }}" class="form-control" value="{{ isset($item) ? $item->profile : old('profile') }}"/>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('website' , 'image') }}</label>
                    @if(isset($item) && $item->image != '')
                        <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->image) }}" class="img-responsive thumbnail" alt="">
                        <br>
                    @endif    
                    <input type="file" name="image" class="" {{ !isset($item) ? "required='required'" : '' }}>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('team' , 'team') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
