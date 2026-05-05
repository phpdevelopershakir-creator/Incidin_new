@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style>
    .group-header {
        background: #f1f1f7;
        padding: 10px 15px;
        font-weight: 600;
        border-radius: 5px;
        margin-bottom: 10px;
        text-transform: uppercase;
        border-left: 4px solid #6c63ff;
    }

    .permission-box {
        background: #fff;
        padding: 15px;
        border-radius: 6px;
        border: 1px solid #e4e4e4;
        margin-bottom: 20px;
    }

    .permission-item {
        margin-bottom: 8px;
    }

    .group-check {
        transform: scale(1.2);
        margin-right: 6px;
    }

    #checkAll {
        transform: scale(1.2);
        margin-right: 6px;
    }
</style>

<div class="content-wrapper">

    <!-- Page Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Role & Permission Update</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Role & Permission Update</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <a href="{{ url('superadmin/all/role/permission') }}" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-list"></i> Role & Permission List
                    </a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('superadmin.update.role.permission', $role->id) }}">
                        @csrf

                        <!-- Role Name -->
                        <div class="form-group mb-4">
                            <label class="form-label"><strong>Role Name:</strong></label>
                            <h4>{{ $role->name }}</h4>
                        </div>

                        <!-- MASTER CHECKBOX -->
                        <div class="form-check mb-3">
                            <input type="checkbox" id="checkAll">
                            <label class="form-check-label" for="checkAll">
                                <strong>Select All Permissions</strong>
                            </label>
                        </div>

                        <hr>

                        <!-- PERMISSION GROUPS -->
                        @foreach($permission_groups as $group)

                        @php
                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                        @endphp

                        <div class="permission-box">

                            <!-- GROUP HEADER -->
                            <div class="group-header">
                                <input type="checkbox"
                                       class="group-check"
                                       data-group="{{ $group->group_name }}"
                                       {{ App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : '' }}>
                                {{ $group->group_name }}
                            </div>

                            <!-- PERMISSIONS INSIDE GROUP -->
                            <div class="row mt-3">

                                @foreach($permissions as $permission)
                                <div class="col-md-4 permission-item">

                                    <input type="checkbox"
                                           class="permission-item form-check-input"
                                           data-group="{{ $group->group_name }}"
                                           name="permission[]"
                                           value="{{ $permission->id }}"
                                           {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>

                                    <label class="form-check-label">
                                        {{ $permission->name }}
                                    </label>

                                </div>
                                @endforeach

                            </div>

                        </div>

                        @endforeach

                        <!-- SUBMIT BUTTON -->
                        <button type="submit" class="btn btn-primary">Update Permissions</button>

                    </form>

                </div>
            </div>

        </div>
    </section>

</div>

<!-- CHECKBOX LOGIC SCRIPT -->
<script>
    // Select ALL permissions
    $("#checkAll").on("click", function () {
        $("input[type=checkbox]").prop("checked", $(this).prop("checked"));
    });

    // Group Select
    $(".group-check").on("click", function () {
        let group = $(this).data("group");
        $("input.permission-item[data-group='" + group + "']")
            .prop("checked", $(this).prop("checked"));
    });

    // Auto check/uncheck group when all permissions selected
    $(".permission-item").on("click", function () {
        let group = $(this).data("group");

        let total = $("input.permission-item[data-group='"+ group +"']").length;
        let checked = $("input.permission-item[data-group='"+ group +"']:checked").length;

        $(".group-check[data-group='"+ group +"']").prop("checked", total === checked);
    });
</script>

@endsection
