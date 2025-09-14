<head>
  <meta charset="utf-8" />
  <title>Conduit</title>
  <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
  <link
    href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    rel="stylesheet"
    type="text/css"
  />
  <link
    href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
    rel="stylesheet"
    type="text/css"
  />
  <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
  <link rel="stylesheet" href="//demo.productionready.io/main.css" />
</head>

<div class="article-page">
  <div class="banner">
    <div class="container">
      <h1>{{ $article->title }}</h1>

      <div class="article-meta">


        <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-outline-secondary">
          <i class="ion-edit"></i> Edit Article
        </a>
        <form action="{{ route('articles.delete', $article) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">
                <i class="ion-trash-a"></i> Delete Article
            </button>
        </form>
      </div>
    </div>
  </div>

  <div class="container page">
    <div class="row article-content">
      <div class="col-md-12">
        <h2 id="introducing-ionic">{{ $article->sub_title }}</h2>
        <p>{{ $article->body }}</p>
        <ul class="tag-list">
          <li class="tag-default tag-pill tag-outline">{{ $article->tags }}</li>
        </ul>
      </div>
    </div>