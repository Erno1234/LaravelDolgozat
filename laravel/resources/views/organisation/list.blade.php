@foreach ($org as $orgs)
<form action="/api/organisation/list" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <p>{{$orgs->org_id}}</p>
        <p>{{$orgs->name}}</p>
        <p>{{$orgs->description}}</p>
    </div>
</form>
@endforeach