<table class="table table-bordered department-table">
    <thead>
    <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Full Name (EN)</th>
        <th scope="col">ID</th>
        {{-- <th scope="col">Training</th> --}}
        <th scope="col">Current Post</th>
        <th scope="col">Phone</th>
        <th scope="col">Temporary District</th>
        <th scope="col">Temporary Local Auth</th>
        <th scope="col">Province</th>
        <th scope="col">Status</th>
        {{-- <th scope="col">Action</th> --}}
    </tr>
    </thead>
    <tbody>
                                                {{-- {{dd($personalinfos)}} --}}
    @forelse($personalinfos as $personalinfo)
        <tr>
            {{-- <th scope="row">{{ ($personalinfos->currentpage()-1) * $personalinfos->perpage() + $loop->index + 1 }}</th> --}}
            <td>{{$loop->iteration}}</td>
            <td>{{$personalinfo->full_name_en}}</td>
            <td>{{$personalinfo->pin}}</td>
            {{-- <td>{{implode(', ', $personalinfo->training->pluck('title')->toArray())}}</td> --}}
            <td>{{$personalinfo->promotion->first()->post->posts ?? null}}</td>
            <td>{{$personalinfo->phone}}</td>
            <td>{{$personalinfo->temp_district->district_name ?? null}}</td>
            <td>{{$personalinfo->temp_local->mun_vdc_en ?? null}}</td>
            <td>{{$personalinfo->temporary_pradesh}}</td>  
                @php
                    // dd($personalinfo->status);
                    $tempStatus = $personalinfo->status->first()->status ?? null;
                @endphp
                    @if(!is_null($tempStatus))
            <td>{{config('constants.status')[$tempStatus]}}</td>
                    @else
                    <td></td>
                    @endif
            {{-- <td>
                <a href="{{route('personal.show', $personalinfo->id)}}"
                   class="btn btn-sm btn-outline-info">
                    <i class="far fa-eye" data-toggle="tooltip" data-placement="top"
                       title="View"></i>
                </a>
                <a href="{{route('personal.edit', $personalinfo->id)}}"
                   class="btn btn-sm btn-primary">
                    <i class="far fa-edit" data-toggle="tooltip" data-placement="top"
                       title="Edit"></i>
                </a>
            <a href="{{route('personal.destroy', $personalinfo->id)}}" data-uuid="{{$personalinfo->id}}"
                   data-name="{{$personalinfo->name}}"
                   class="btn btn-sm btn-danger">
                    <i class="fas fa-trash" data-toggle="tooltip"
                       data-placement="top" title="Delete"></i></a>
            </td> --}}
        </tr>
    @empty
        <tr>
            <td colspan="100%" class="text-center">Currently there is no data.
            </td>
        </tr>
    @endforelse

    </tbody>
</table>