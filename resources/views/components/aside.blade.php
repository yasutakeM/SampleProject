<aside class="sidebar">

        @if (Route::has('login'))
        @auth
        <div class="memberLink--flame">
                <div class="memberLink--side">

                  <div class="publicWrap">
                      <div class="memberLink--title">カート内情報</div>

                      <dl>
                        <dt>アイテム数</dt>
                        <dd>３件</dd>

                        <dt>合計</dt>
                        <dd>3333ゴールド</dd>
                      </dl>
                  </div>

                  <a href="#">レジへ</a>
                </div>
        </div>
        @endauth
        @endif

<div>
            <h3>イベント情報</h3> 
            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/event01.png') }}" alt="警備員をお探しの方はこちらから">
            </a>
</div>

<div>
            <h3>警備員をお探しの方</h3> 

            <a href="http://localhost:8888/guardiancat/" class="banner">
            <img src="{{ asset('storage/banner/04.gif') }}" alt="警備員をお探しの方はこちらから">
            </a>
</div>

</aside>