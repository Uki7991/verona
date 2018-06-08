<div class="row">

    <div class="col-4">
        <form action="/slider" method="post">
            @csrf
            <h2>Создать слайд</h2>
            <div class="form-group">
                <label for="name-section">Название слайда</label>
                <input type="text" class="form-control" name="name" id="name-section" placeholder="Название слайда">
                <input type="hidden" value="{{ $menu->id }}" name="menu_id">
            </div>
            <div class="form-group">
                <label for="position-section">Позиция слайда</label>
                <input type="text" class="form-control" name="position" id="position-section" placeholder="Позиция слайда">
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </div>

    <div class="col-4">
        <form method="POST" action="/benefit">
            @csrf
            <h2>Создать секцию</h2>
            <div class="form-group">
                <label for="name-section">Название секции</label>
                <input type="text" class="form-control" id="name-section" name="title" placeholder="Название секции">
            </div>
            <input type="hidden" value="{{ $menu->id }}" name="menu_id">
            <div class="form-group">
                <label for="position-section">Позиция секции</label>
                <input type="text" class="form-control" name="position" id="position-section" placeholder="Позиция секции">
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </div>

    <div class="col-4">
        <form action="/advantage" method="post">
            @csrf
            <h2>Создать секцию(мод)</h2>
            <div class="form-group">
                <label for="name-section">Название секции(мод)</label>
                <input type="text" class="form-control" name="name" id="name-section" placeholder="Название секции(мод)">
            </div>
            <input type="hidden" value="{{ $menu->id }}" name="menu_id">
            <div class="form-group">
                <label for="position-section">Позиция секции(мод)</label>
                <input type="text" class="form-control" name="position" id="position-section" placeholder="Позиция секции(мод)">
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </div>

</div>