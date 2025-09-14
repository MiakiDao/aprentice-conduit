<head>
    <meta charset="utf-8" />
    <title>Conduit</title>
    <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>
<div class="home-page">
    <div class="banner">
        <div class="container">
            <h1 class="logo-font">conduit</h1>
            <p>A place to share your knowledge.</p>
        </div>
    </div>

    <div class="container page">
        <div class="row">
            <div class="col-md-9">
                <div class="feed-toggle">
                    <ul class="nav nav-pills outline-active">
                        <li class="nav-item">
                            <a class="nav-link" href="">Your Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Global Feed</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="article-preview">
                    <div class="article-meta">
                    </div>

                @foreach($articles as $article)
                    <a href="{{ route('articles.show', $article) }}" class="preview-link">
                        <h1>How to build webapps that scale</h1>
                        <p>This is the description for the post.</p>
                        <span>Read more...</span>
                        <ul class="tag-list">
                            <li class="tag-default tag-pill tag-outline">realworld</li>
                            <li class="tag-default tag-pill tag-outline">implementations</li>
                        </ul>
                    </a>
                @endforeach
                </div>

                <div class="article-preview">

                    <div class="article-meta">
                    </div>

                    <a href="/article/the-song-you" class="preview-link">
                        <h1>The song you won't ever stop singing. No matter how hard you try.</h1>
                        <p>This is the description for the post.</p>
                        <span>Read more...</span>
                        <ul class="tag-list">
                            <li class="tag-default tag-pill tag-outline">realworld</li>
                            <li class="tag-default tag-pill tag-outline">implementations</li>
                        </ul>
                    </a>
                </div> --}}
                @foreach($articles as $article)
                <div class="article-preview">

                    <div class="article-meta">
                    </div>

                    <a href="{{ route('articles.show', $article) }}" class="preview-link">
                        <h1>{{ $article->title }}</h1>
                        <p>{{ $article->sub_title}}</p>
                        <span>Read more...</span>
                        <ul class="tag-list">
                            <li class="tag-default tag-pill tag-outline">{{ $article->tags }}</li>
                        </ul>
                    </a>
                </div>
                @endforeach

                <a href="/create" class="btn btn-primary">Create</a>
            </div>

            <div class="col-md-3">
                <div class="sidebar">
                    <p>Popular Tags</p>

                    <div class="tag-list">
                        <a href="" class="tag-pill tag-default">programming</a>
                        <a href="" class="tag-pill tag-default">javascript</a>
                        <a href="" class="tag-pill tag-default">emberjs</a>
                        <a href="" class="tag-pill tag-default">angularjs</a>
                        <a href="" class="tag-pill tag-default">react</a>
                        <a href="" class="tag-pill tag-default">mean</a>
                        <a href="" class="tag-pill tag-default">node</a>
                        <a href="" class="tag-pill tag-default">rails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
