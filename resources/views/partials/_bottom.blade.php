<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="owner row">
    <div class="col-md-6 owner-text">
        <div class="owner-name">Давыдов Год Пануилович</div>
        <div class="owner-pic"></div>
        <div class="owner-text-1">Наша миссия не только сохранить, но и приумножить традиции виноделия Дербента. Мы хотим внести свой собственный, пусть и небольшой, вклад в развитие отрасли в нашей любимой стране.</div>
        <div class="owner-text-2">Только натуральное вино отменного качества заслуживает того, чтобы оказаться на вашем столе!</div>
        <div class="owner-stamp"></div>
    </div>
    <div class="col-md-6 owner-photo">
        <img src="{{ asset('img/owner.jpg') }}" id="owner-photo" style="opacity: 0;" class="img-responsive">
    </div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="content-padding">
    <div class="row">
        <div class="col-md-5 feedback-form">
            <div class="form-caption">Напишите нам</div>
            <p>&nbsp;</p>
            <form action="{{ route('feedback.send') }}" method="POST" id="form_feedback" name="form_feedback">
                {{ csrf_field() }}
                <div class="form-status"></div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Ваше email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" placeholder="Ваше сообщение"></textarea>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfEsy4UAAAAACP0hDiXf0R9PP1KKh8kB-tL3Zn2"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-lg btn-info form-button">Отправить сообщение</button>
                </div>
            </form>
        </div>
        <div class="col-md-2 bottom-stamp">
            <img src="{{ asset('img/stamp-big.png') }}" class="img-responsive">
        </div>
        <div class="col-md-5">
            <ul class="bottom-menu">
                <li><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('page.show', 'about') }}">О нас</a></li>
                <li><a href="{{ route('galleries') }}">Фотогалерея</a></li>
                <li><a href="{{ route('catalog') }}">Карта вин</a></li>
                <li><a href="{{ route('page.show', 'partners') }}">Партнерам</a></li>
                <li><a href="{{ route('page.show', 'contacts') }}">Контакты</a></li>
            </ul>

            <div class="bottom-contacts">
                <div class="contact-line">
                    <div class="icon"><img src="{{ asset('img/icon-map.png') }}"></div>
                    <div class="line">368608, Россия, Республика Дагестан, г. Дербент, ул. М. Далгата, 24 "А"</div>
                    <div class="clearfix"></div>
                </div>
                <div class="contact-line">
                    <div class="icon"><img src="{{ asset('img/icon-phone.png') }}"></div>
                    <div class="line">Телефон +7 988 293 88 89</div>
                    <div class="clearfix"></div>
                </div>
                <div class="contact-line">
                    <div class="icon"><img src="{{ asset('img/icon-email.png') }}"></div>
                    <div class="line">Email для связи - oooagrolain@yandex.ru</div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="row inline-gallery">
    <img src="{{ asset('img/gallery-1.jpg') }}">
    <img src="{{ asset('img/gallery-2.jpg') }}">
    <img src="{{ asset('img/gallery-3.jpg') }}">
    <img src="{{ asset('img/gallery-4.jpg') }}">
    <img src="{{ asset('img/gallery-5.jpg') }}">
</div>