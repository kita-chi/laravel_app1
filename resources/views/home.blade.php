
<link rel="stylesheet" href="/css/home.css">

@include('layouts.header')

<body>
    @yield('header')
    <main>
        <div class="details">
            @for ($i=0; $i<count($datas); $i++)
                <div class="detail">
                    <div class="detail1" href="/" >
                        <h2><?php echo $datas[$i]->name ?></h2>
                        <h2>「<?php echo $datas[$i]->title ?>」</h2>
                        <h2><?php echo $datas[$i]->content ?></h2>
                        
                        <p><?php echo $datas[$i]->updated_at.'<br>' ?></p>

                        @if ( Session('id')==$datas[$i]->userid)

                            <ul>
                            <div class="edit">
                                <form action="edit" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value='<?php echo $datas[$i]->blogid ?>'>
                                <li><input type="submit" name="data" value="編集"></li>
                                </form>
                            </div>
                            <div class="delete">
                                <form action="delete" method='post'>
                                    @csrf
                                    <input type="hidden" name="id" value='<?php echo $datas[$i]->blogid ?>'>
                                <li><input type="submit" name="data" value="削除"></li>
                                </form>
                            </div>
                            </ul>
                            
                        @endif

                        @if (session('id'))
                            @if ( !in_array($datas[$i]->blogid, $liked) )
                                        <i class="fa-regular fa-heart like1" data-id1="<?php echo $datas[$i]->blogid ?>"></i>
                            @else
                                        <i class="fa-solid fa-heart like2 " data-id1="<?php echo $datas[$i]->blogid ?>"></i>
                            @endif
                        @endif
                        
                    </div>
                </div>
            @endfor
        </div>
    </main>
    
<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>