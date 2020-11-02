<h1>コーチ</h1>

    @foreach ($videos as $video)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/videos/{{ $video->id }}">{{ $video->name }}</a></li>
    @endforeach
<a href="/videos/create"><button>新規登録</button></a>