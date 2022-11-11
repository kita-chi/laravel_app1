
<link rel="stylesheet" href="/css/home.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

@include('layouts.header')

<body>
    @yield('header')
    <main>
        <div class="details">
            @for ($i=0; $i<count($datas); $i++)
                <div class="detail">
                    <a class="detail1" href="/" >
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
                        @else
                        <i class="fa-regular fa-heart"></i>
                        @endif

                    </a>
                </div>
            @endfor
        </div>
    </main>

<script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>