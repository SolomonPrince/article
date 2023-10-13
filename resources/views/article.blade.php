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
                                                
                                                <div class="card-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card card-bordered">
                                                                @if($article->getFirstMediaUrl('avatar') != null)
                                                                <img src="{{$article->getFirstMediaUrl('image')}}" class="card-img-top" alt="">
                                                                @endif
                                                                <div class="card-inner">
                                                                    <h5 class="card-title">{{$article->title}}</h5>
                                                                    <p class="card-text">{{$article->body}}</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-block nk-block-lg">

                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="ticket-msgs">
                                                    @foreach($article->comments as $comment)
                                                    <div class="ticket-msg-item">
                                                        <div class="ticket-msg-from">
                                                            
                                                            <div class="ticket-msg-date">
                                                                <span class="sub-text">{{$comment->created_at->format('d-m-Y H:i')}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="ticket-msg-comment">
                                                            <p><strong>{{$comment->thema}}</strong></p>
                                                            <p>{{$comment->text}}</p>
                                                        </div>
                                                    </div><!-- .ticket-msg-item -->
                                                    @endforeach
                                                   
                                                    <div class="ticket-msg-reply">
                                                        <h5 class="title">Comment</h5>
                                                        <form action="{{route('comment.store')}}" class="form-reply" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="article_id" value="{{$article->id}}">
                                                            <div class="form-group">
                                                                <div class="form-editor-custom">
                                                                    <input type="text" required name="thema" class="form-control" placeholder="Thema...">
                                                                    <br>
                                                                    <textarea required name="text" class="form-control" placeholder="Write a comment..."></textarea>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="form-action">
                                                                <ul class="form-btn-group">
                                                                    <li class="form-btn-primary"><button class="btn btn-primary">Send</button></li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                    </div><!-- .ticket-msg-reply -->
                                                </div><!-- .ticket-msgs -->
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->

                                            </div><!-- .card-preview -->

                                      
                                        </div>
                                        
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