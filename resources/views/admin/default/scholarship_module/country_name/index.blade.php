@extends('admin.default.layouts.app')
@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{translate('All Scholarship Country name')}}</h1>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-lg-7">
    <div class="card">
        <div class="card-header d-block d-md-flex">
            <h5 class="mb-0 h6">{{ translate('Scholarship Country name') }}</h5>
            <form class="" id="sort_categories" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{translate('Name')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ ($key+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                        <td>{{ $category->country_name }}</td>
                        <td class="text-right">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{url('admin/scholarship-country/'.$category->id.'/edit')}}" title="{{ translate('Edit') }}">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('scholarship-country.destroy', $category->id)}}" title="{{translate('Delete')}}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">

            </div>
        </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{ translate('Add New Study Level') }}</h5>
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('scholarship-country.store') }}">
              @csrf
                <div class="form-group mb-3">
                    <label for="name">{{translate('Name')}}</label>
                    <input type="text" id="country_name" name="country_name" placeholder="{{ translate('Country Name') }}" class="form-control" required>
                </div>
                <div class="form-group mb-3 text-right">
                    <button type="submit" class="btn btn-primary">{{translate('Save New Country name')}}</button>
                </div>
            </form>
            {{ $categories->links() }}
        </div>
    </div>
  </div>
</div>

@endsection


@section('modal')
  @include('admin.default.partials.delete_modal')
@endsection
