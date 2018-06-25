<div class="row">
    <div class="col-md col-6 mb-2">
        <a href="/images/Renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/Renders/07_D.jpg" class="img-fluid" alt=""></a>
    </div>
    <div class="col-md col-6 mb-2">
        <a href="/images/Renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_D.png" class="img-fluid" alt=""></a>
    </div>
    <div class="col-md col-6 mb-2">
        <a href="/images/Renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_E.png" class="img-fluid" alt=""></a>
    </div>
    <div class="col-md col-6 mb-2">
        <a href="/images/Renders/123.png" rel="group1" class="grouped_elements"><img src="/images/Renders/123.png" class="img-fluid" alt=""></a>
    </div>

    @foreach($images as $image)

        <div class="col-md col-6 mb-2">
            <a href="{{ $image->image }}" rel="group-{{ $month->name }}-{{ $year->name }}" class="grouped_elements"><img src="{{ $image->image }}" class="img-fluid" alt=""></a>
        </div>

    @endforeach
</div>