@extends('layouts.admin')
@section('content')
<input type="hidden" id="headerdata" value="{{ __('Leads') }}">
<div class="content-area">
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">{{ __('Leads') }}</h4>
                <ul class="links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.leads') }}">{{ __('Leads') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="mr-table allproduct">
                    @include('includes.admin.form-success')
                    <div class="table-responsiv">
                        <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Requirement') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ADD / EDIT MODAL --}}
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
                <img src="{{asset('assets/images/loader.gif')}}" alt="">
            </div>
            <div class="modal-header">
                <h5 class="modal-title">New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>
{{-- ADD / EDIT MODAL ENDS --}}

@endsection

@section('scripts')
<script type="text/javascript">
    var table = $('#geniustable').DataTable({
        ordering: false,
        processing: true,
        serverSide: true,
        ajax: '{{ route("admin.leads.datatables") }}',
        columns: [{
                data: 'name',
                name: 'name'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'requirement',
                name: 'requirement'
            } 
        ],
        language: {
            processing: '<img src="{{ asset("assets/images/loader.gif") }}">'
        },
        drawCallback: function(settings) {
            $('.select').niceSelect();

        },
    });
</script> 
 
 
<script>
    $(document).on("change", ".status-chaneg", function() {
        let leadId = $(this).find(":selected").data("id");
        let status = $(this).find(":selected").data("val");
        $.ajax({
            url: "{{ route('admin.leads.status', ['id1' => '__ID1__', 'id2' => '__ID2__']) }}"
                .replace('__ID1__', leadId)
                .replace('__ID2__', status),
            type: "GET",
            success: function(response) {

                $('#geniustable').DataTable().ajax.reload();
                 

            },
            error: function() {
              
            }
        });
    });
</script>
@endsection