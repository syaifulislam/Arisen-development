<ul class="clear">
    @if (Route::getCurrentRoute()->uri == '/')
    <li class="active"><a href="/"><i class="fa fa-home"></i></a></li>
    @else
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    @endif

    @if (Route::getCurrentRoute()->uri == 'forum')
    <li class="active"><a href="forum">ARISAN</a></li>        
    @else
    <li><a href="/forum">ARISAN</a></li>        
    @endif

    @if (Route::getCurrentRoute()->uri == 'arbar')
    <li class="active"><a href="arbar">ARBAR</a></li>        
    @else
    <li><a href="/arbar">ARBAR</a></li>        
    @endif

    @if (Route::getCurrentRoute()->uri == 'bantuan')
    <li class="active"><a href="bantuan">BANTUAN</a></li>        
    @else
    <li><a href="/bantuan">BANTUAN</a></li>        
    @endif

    @if (Route::getCurrentRoute()->uri == 'tentang-kami')
    <li class="active"><a href="tentang-kami">TENTANG KAMI</a></li>        
    @else
    <li><a href="/tentang-kami">TENTANG KAMI</a></li>        
    @endif
  </ul>