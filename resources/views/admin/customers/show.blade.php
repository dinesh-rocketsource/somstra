@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.customers.title') }}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.customers.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.customers.fields.id') }}
                    </th>
                    <td>
                        {{ $customer->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.customers.fields.name') }}
                    </th>
                    <td>
                        {{ $customer->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.customers.fields.email') }}
                    </th>
                    <td>
                        {{ $customer->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.customers.fields.quiz_score') }}
                    </th>
                    <td>
                        {{ $customer->quiz_score }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.customers.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection