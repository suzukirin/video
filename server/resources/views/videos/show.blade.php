<p>
     <b>名前:{{ $video->name }}</b>
 </p>

 <p>
     <b>アピール：{{ $video->description }}</b>
 </p>

 <p>
     <b>一時間あたり：{{ $video->price }}円</b>
 </p>

 <p>
     <b>メール：{{ $video->email }}</b>
</p>

<p>
    <img src="{{ $video->image_url }}">
</p>

<!-- 商品のidを元に編集ページへ遷移する -->
  <a href="/videos/{{ $video->id }}/edit"><button>編集する</button></a>
<form action="/videos/{{ $video->id }}" method="post">
     @csrf
     @method('DELETE')
     <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
 </form>