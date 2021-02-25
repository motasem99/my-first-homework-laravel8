@extends('layouts.app')
    @section('content')
        <div class="col-md-12">
            <div class="card">
                            <div class="card-header">
                                <h3>ادخال البيانات</h3>
                            </div>
                            <div class="card-block">
                                <form method="post" action="/dashboard/users/save">
                                @csrf
                                <div class="form-group">
                                        <label for="nf-email">الاسم</label>
                                        <input type="text" id="nf-email" name="name" class="form-control" placeholder="ادخل  الاسم">
                                        <span class="help-block">رجاءا قم بادخال الاسم</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email">البريد الالكتروني</label>
                                        <input type="email" id="nf-email" name="email" class="form-control" placeholder="ادخل البريد الالكتروني">
                                        <span class="help-block">رجاءا قم بادخال الايميل</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password">كلمة المرور</label>
                                        <input type="password" id="nf-password" name="password" class="form-control" placeholder="ادخل كلمة المرور">
                                        <span class="help-block">رجاءا قم بادخال كلمة المرور</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password">تاكيد كلمة المرور</label>
                                        <input type="password" id="nf-password" name="conf_password" class="form-control" placeholder="أكد كلمة المرور">
                                        <span class="help-block">رجاءا قم بتاكيد كلمة المرور</span>
                                    </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> حفظ</button>
                            </div>
                                </form>
                            </div>
            </div>
        </div>

@endsection
