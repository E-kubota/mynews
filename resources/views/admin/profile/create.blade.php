@extends('layouts.profile')
@section('title', 'プロフィール作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form action="{{ route('profile.create') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mb-2">
                        <label class="col-md-2" for="title">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                            <label class="form-check-label" for="radio1">男性</label>
                            <input type="radio" id="radio1" class="form-check-input" name="gender" value="男">{{ old('gender') }}
                            <label class="form-check-label" for="radio2">女性</label>
                            <input type="radio" id="radio2" class="form-check-input" name="gender" value="女">{{ old('gender') }}
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="3">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="17">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection
