<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="./././">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <!-- Page Title  -->
    <title>Article</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.css?ver=3.1.2">
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=3.1.2">
</head>

<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
               
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="components-preview wide-md mx-auto">
                                        
                                        <div class="nk-block nk-block-lg">
                                            
                                            <div class="card card-bordered card-preview">
                                                @foreach($articles as $article)
                                                <div class="card-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card card-bordered">
                                                                @if($article->getFirstMediaUrl('avatar') != null)
                                                                <img src="{{$article->getFirstMediaUrl('image')}}" class="card-img-top" alt="">
                                                                @endif
                                                                <div class="card-inner">
                                                                    <h5 class="card-title">{{$article->title}}</h5>
                                                                    <p class="card-text">{{Str::substr($article->body, 0, 50)}}</p>
                                                                    <a href="{{route('article.show', ['slug' => $article->id])}}" class="btn btn-primary">Show</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div><!-- .card-preview -->

                                      
                                        </div>
                                        @if($articles->lastPage() > 1)
                                        <nav>
                                            <ul class="pagination">
                                                @if($articles->currentPage() !== 1)
                                                <li class="page-item">
                                                    <a class="page-link" href="{{$articles->url(($articles->currentPage() - 1))}}" aria-label="Prev"><span aria-hidden="true">&laquo;</span></a>
                                                </li>
                                                @endif
                                                @for($i = 1; $i <= $articles->lastPage(); $i++)
                                                <li class="page-item"><a class="page-link" href="{{$articles->url($i)}}">{{$i}}</a></li>
                                                @endfor

                                                @if($articles->currentPage() !== $articles->lastPage())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{$articles->url(($articles->currentPage() + 1))}}" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                                </li>
                                                 @endif
                                            </ul>
                                       </nav>
                                       @endif 
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
  
    <!-- JavaScript -->
    <script src="/assets/js/bundle.js?ver=3.1.2"></script>
    <script src="/assets/js/scripts.js?ver=3.1.2"></script>
</body>

</html>