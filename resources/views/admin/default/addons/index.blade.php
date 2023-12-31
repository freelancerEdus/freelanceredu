@extends('admin.default.layouts.app')

@section('content')

    <div class="">
        <div class="row ">
            <div class="col-sm-6">
                <div class="nav border-bottom aiz-nav-tabs">
                    <a class="p-3 fs-16 text-reset show active" data-toggle="tab" href="#installed">{{ translate('Installed Addon')}}</a>
                    <a class="p-3 fs-16 text-reset" data-toggle="tab" href="#available">{{ translate('Available Addon')}}</a>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('addons.create')}}" class="btn btn-circle btn-info">{{ translate('Install New Addon')}}</a>
            </div>
        </div>
    </div>
    <br>
    <div class="tab-content">
        <div class="tab-pane fade in active show" id="installed">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group">
                                @forelse(\App\Models\Addon::all() as $key => $addon)
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <img class="h-60px" src="{{ my_asset($addon->image) }}" alt="Image">
                                            <div class="mr-3 ml-5">
                                                <h4 class="fs-16 fw-600">{{ ucfirst($addon->name) }}</h4>
                                            </div>
                                            <div class="mr-3 ml-0">
                                                <p><small>{{ translate('Version')}}: </small>{{ $addon->version }}</p>
                                            </div>
                                            <div class="ml-auto mr-0">
                                                <label class="aiz-switch mb-0">
                                                    <input type="checkbox" onchange="updateStatus(this, {{ $addon->id }})" <?php if($addon->activated) echo "checked";?>>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item">
                                        <div class="text-center">
                                            <img class="mw-100 h-200px" src="{{ my_asset('assets/backend/default/img/nothing.svg') }}" alt="Image">
                                            <h5 class="mb-0 h5 mt-3">{{ translate('No Addon Installed')}}</h5>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="available">
            <div class="row" id="available-addons-content">

            </div>
        </div>
    </div>




@endsection

@section('script')
    <script type="text/javascript">
        
    </script>
@endsection
