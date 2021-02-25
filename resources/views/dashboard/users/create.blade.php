@extends('layouts.app')
    @section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                            <div class="card-header">
                                <h3>ادخال البيانات</h3>
                            </div>
                            <div class="card-block">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="nf-email">البريد الالكتروني</label>
                                        <input type="email" id="nf-email" name="nf-email" class="form-control" placeholder="ادخل البريد الالكتروني">
                                        <span class="help-block">رجاءا قم بادخال الايميل</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password">كلمة المرور</label>
                                        <input type="password" id="nf-password" name="nf-password" class="form-control" placeholder="ادخل كلمة المرور">
                                        <span class="help-block">رجاءا قم بادخال كلمة المرور</span>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> حفظ</button>
                            </div>
            </div>
        </div>
    </div>

@endsection
