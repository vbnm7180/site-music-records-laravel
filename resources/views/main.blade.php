@include('header')

<main class="list">

<div class="list__container">
	<h1 class="list__name">Каталог музыкальных пластинок</h1>

	@foreach ($res as $record)
	<div class="list__record">
		<div class="record__wrapper">
			<img src="/images/records/{{$record->image}}" alt="" class="record__image">
			<div class="record__info">
				<span class="record__name"><span class="record__artist">{{$record->artist}}</span> - {{$record->name}}</span>
			</div>
			<div class="record__year">{{$record->year}}</div>
		</div>
		<div class="record__admin-btns">
			<button class="record__change-btn">Изменить</button>
			<button class="record__delete-btn">Удалить</button>
		</div>
	</div>

	@endforeach



	{{$res->links('paginator')}}


	<div class="record__admin-form admin-form__none">
            <div class="admin-form__close">
                <img src="/images/cancel.svg" alt="" class="close__icon">
            </div>
            <div class="admin-form__content">
                <label for="record__change-image">Путь к картинке</label>
                <input type="text" id="record__change-image" class="record__change-image">

                <label for="record__change-artist">Имя исполнителя</label>
                <input type="text" id="record__change-artist" class="record__change-artist">

                <label for="record__change-name">Имя альбома</label>
                <input type="text" id="record__change-name" class="record__change-name">

                <label for="record__change-year">Год издания</label>
                <input type="text" id="record__change-year" class="record__change-year">

                <button class="record__save-btn">Сохранить</button>
            </div>
        </div>


</div>

</main>

@include('footer')